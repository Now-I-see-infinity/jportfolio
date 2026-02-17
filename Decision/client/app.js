const API = (path, opts = {}) => fetch('http://localhost:4000' + path, opts).then(r => r.json());

let token = null;
let currentProjectId = null;
const socket = io('http://localhost:4000');

function setAuthHeader() {
  return { 'Content-Type': 'application/json', ...(token ? { Authorization: 'Bearer ' + token } : {}) };
}

document.getElementById('btnRegister').onclick = async () => {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const res = await fetch('http://localhost:4000/api/auth/register', {
    method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ email, password })
  });
  const data = await res.json();
  if (data.token) { token = data.token; alert('Registered'); loadProjects(); }
};

document.getElementById('btnLogin').onclick = async () => {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const res = await fetch('http://localhost:4000/api/auth/login', {
    method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ email, password })
  });
  const data = await res.json();
  if (data.token) { token = data.token; alert('Logged in'); loadProjects(); }
};

async function loadProjects() {
  const res = await fetch('http://localhost:4000/api/projects', { headers: setAuthHeader() });
  const projects = await res.json();
  const sel = document.getElementById('projects');
  sel.innerHTML = '';
  projects.forEach(p => {
    const opt = document.createElement('option'); opt.value = p.id; opt.textContent = p.name; sel.appendChild(opt);
  });
  if (projects.length) {
    currentProjectId = projects[0].id;
    sel.value = currentProjectId;
    joinProject(currentProjectId);
    loadTasks(currentProjectId);
  }
}

document.getElementById('btnCreateProject').onclick = async () => {
  const name = document.getElementById('projectName').value;
  if (!name) return alert('enter name');
  const res = await fetch('http://localhost:4000/api/projects', { method: 'POST', headers: setAuthHeader(), body: JSON.stringify({ name }) });
  const p = await res.json();
  await loadProjects();
};

document.getElementById('projects').onchange = (e) => {
  const id = Number(e.target.value); currentProjectId = id; joinProject(id); loadTasks(id);
};

async function loadTasks(projectId) {
  const res = await fetch(`http://localhost:4000/api/projects/${projectId}/tasks`, { headers: setAuthHeader() });
  const tasks = await res.json();
  renderTasks(tasks);
}

function renderTasks(tasks) {
  const groups = { todo: document.getElementById('col-todo'), inprogress: document.getElementById('col-inprogress'), done: document.getElementById('col-done') };
  Object.values(groups).forEach(g => g.innerHTML = '');
  tasks.forEach(t => {
    const el = document.createElement('div'); el.className = 'task'; el.textContent = t.title; el.dataset.id = t.id;
    groups[t.status || 'todo'].appendChild(el);
  });
}

document.querySelectorAll('.btnAdd').forEach(btn => btn.onclick = async (e) => {
  const status = e.target.dataset.status;
  const input = document.getElementById('new-' + status);
  const title = input.value.trim(); if (!title) return;
  const res = await fetch(`http://localhost:4000/api/projects/${currentProjectId}/tasks`, { method: 'POST', headers: setAuthHeader(), body: JSON.stringify({ title, status }) });
  const t = await res.json(); input.value = '';
  // local update handled by socket event
});

function joinProject(id) {
  if (!id) return;
  socket.emit('joinProject', id);
}

socket.on('task:created', (task) => { if (task.projectId === currentProjectId) { loadTasks(currentProjectId); } });
socket.on('task:updated', (task) => { if (task.projectId === currentProjectId) { loadTasks(currentProjectId); } });
socket.on('task:deleted', (task) => { if (task.projectId === currentProjectId) { loadTasks(currentProjectId); } });

// Attempt to load projects on open if token present
window.addEventListener('load', () => { /* nothing initial */ });
