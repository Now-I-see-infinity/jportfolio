const express = require('express');
const { read, write, getNextId } = require('../db');
const { authMiddleware } = require('../utils/authMiddleware');

const router = express.Router({ mergeParams: true });

router.use(authMiddleware);

// List tasks for a project
router.get('/', (req, res) => {
  const db = read();
  const projectId = Number(req.params.projectId);
  const tasks = db.tasks.filter(t => t.projectId === projectId);
  res.json(tasks);
});

// Create task
router.post('/', (req, res) => {
  const db = read();
  const projectId = Number(req.params.projectId);
  const { title, description, status = 'todo', assigneeId = null } = req.body;
  if (!title) return res.status(400).json({ error: 'title required' });
  const id = getNextId(db);
  const task = { id, projectId, title, description: description || '', status, assigneeId, createdBy: req.user.id, createdAt: Date.now() };
  db.tasks.push(task);
  write(db);

  // Emit event via attached socket if available
  if (req.app && req.app.get('io')) {
    const io = req.app.get('io');
    io.to('project:' + projectId).emit('task:created', task);
  }

  res.json(task);
});

// Update task
router.put('/:taskId', (req, res) => {
  const db = read();
  const projectId = Number(req.params.projectId);
  const taskId = Number(req.params.taskId);
  const task = db.tasks.find(t => t.id === taskId && t.projectId === projectId);
  if (!task) return res.status(404).json({ error: 'task not found' });
  const { title, description, status, assigneeId } = req.body;
  if (title !== undefined) task.title = title;
  if (description !== undefined) task.description = description;
  if (status !== undefined) task.status = status;
  if (assigneeId !== undefined) task.assigneeId = assigneeId;
  task.updatedAt = Date.now();
  write(db);

  if (req.app && req.app.get('io')) {
    const io = req.app.get('io');
    io.to('project:' + projectId).emit('task:updated', task);
  }

  res.json(task);
});

// Delete task
router.delete('/:taskId', (req, res) => {
  const db = read();
  const projectId = Number(req.params.projectId);
  const taskId = Number(req.params.taskId);
  const idx = db.tasks.findIndex(t => t.id === taskId && t.projectId === projectId);
  if (idx === -1) return res.status(404).json({ error: 'task not found' });
  const [removed] = db.tasks.splice(idx, 1);
  write(db);

  if (req.app && req.app.get('io')) {
    const io = req.app.get('io');
    io.to('project:' + projectId).emit('task:deleted', removed);
  }

  res.json({ success: true });
});

module.exports = router;
