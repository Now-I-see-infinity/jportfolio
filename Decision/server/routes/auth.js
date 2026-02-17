const express = require('express');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');
const { read, write, getNextId } = require('../db');
const { SECRET } = require('../utils/authMiddleware');

const router = express.Router();

// Register
router.post('/register', async (req, res) => {
  const { name, email, password } = req.body;
  if (!email || !password) return res.status(400).json({ error: 'email/password required' });
  const db = read();
  const exists = db.users.find(u => u.email === email);
  if (exists) return res.status(400).json({ error: 'User exists' });
  const hash = await bcrypt.hash(password, 10);
  const id = getNextId(db);
  const user = { id, name: name || '', email, passwordHash: hash, createdAt: Date.now() };
  db.users.push(user);
  write(db);
  const token = jwt.sign({ id: user.id, email: user.email, name: user.name }, SECRET, { expiresIn: '8h' });
  res.json({ token, user: { id: user.id, name: user.name, email: user.email } });
});

// Login
router.post('/login', async (req, res) => {
  const { email, password } = req.body;
  const db = read();
  const user = db.users.find(u => u.email === email);
  if (!user) return res.status(401).json({ error: 'Invalid credentials' });
  const ok = await bcrypt.compare(password, user.passwordHash);
  if (!ok) return res.status(401).json({ error: 'Invalid credentials' });
  const token = jwt.sign({ id: user.id, email: user.email, name: user.name }, SECRET, { expiresIn: '8h' });
  res.json({ token, user: { id: user.id, name: user.name, email: user.email } });
});

module.exports = router;
