const express = require('express');
const { read, write, getNextId } = require('../db');
const { authMiddleware } = require('../utils/authMiddleware');

const router = express.Router();

router.use(authMiddleware);

// List projects
router.get('/', (req, res) => {
  const db = read();
  res.json(db.projects || []);
});

// Create project
router.post('/', (req, res) => {
  const { name, description } = req.body;
  if (!name) return res.status(400).json({ error: 'name required' });
  const db = read();
  const id = getNextId(db);
  const project = { id, name, description: description || '', ownerId: req.user.id, createdAt: Date.now() };
  db.projects.push(project);
  write(db);
  res.json(project);
});

module.exports = router;
