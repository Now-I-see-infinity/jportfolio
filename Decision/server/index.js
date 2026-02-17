const express = require('express');
const http = require('http');
const cors = require('cors');
const bodyParser = require('express').json;
const { read, write } = require('./db');

const app = express();
const server = http.createServer(app);
const { Server } = require('socket.io');
const io = new Server(server, { cors: { origin: '*' } });

const authRoutes = require('./routes/auth');
const projectsRoutes = require('./routes/projects');
const tasksRoutes = require('./routes/tasks');

app.use(cors());
app.use(bodyParser());

app.use('/api/auth', authRoutes);
app.use('/api/projects', projectsRoutes);
app.use('/api/projects/:projectId/tasks', tasksRoutes);

// Attach io to app so routes can emit
app.set('io', io);

io.on('connection', (socket) => {
  console.log('socket connected', socket.id);

  socket.on('joinProject', (projectId) => {
    const room = 'project:' + projectId;
    socket.join(room);
  });

  socket.on('leaveProject', (projectId) => {
    const room = 'project:' + projectId;
    socket.leave(room);
  });

  socket.on('disconnect', () => {
    // noop
  });
});

// Simple health
app.get('/health', (req, res) => res.json({ ok: true }));

const PORT = process.env.PORT || 4000;
server.listen(PORT, () => {
  console.log(`Decision server listening on ${PORT}`);
});
