const fs = require('fs');
const path = require('path');

const DB_FILE = path.join(__dirname, 'data.json');

function read() {
  try {
    const raw = fs.readFileSync(DB_FILE, 'utf8');
    return JSON.parse(raw);
  } catch (err) {
    return { users: [], projects: [], tasks: [], nextId: 1 };
  }
}

function write(data) {
  fs.writeFileSync(DB_FILE, JSON.stringify(data, null, 2));
}

function getNextId(data) {
  if (!data.nextId) data.nextId = 1;
  return data.nextId++;
}

module.exports = {
  read,
  write,
  getNextId,
  DB_FILE
};
