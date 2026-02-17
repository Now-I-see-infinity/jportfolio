# Decision — Prototype

This prototype implements a minimal Task Management backend and a lightweight client to demonstrate project/task creation and realtime updates.

Structure
- `Decision/server` — Express + Socket.IO server, JSON file storage (no external DB required for prototype)
- `Decision/client` — minimal static UI (open `index.html`) that talks to the server

Quick start

1. Install dependencies (from project root for server):

```bash
cd Decision/server
npm install
```

2. Start server:

```bash
node index.js
# or: npm start
```

3. Open the client in a browser:

Open `Decision/client/index.html` in your browser (file://) OR serve the folder with a static server.

Notes
- Data is persisted to `Decision/server/data.json`.
- JWT secret uses `JWT_SECRET` env var; default is `dev_secret_change_me`.
- This is a lightweight prototype to iterate on — next steps: add persistent DB (MySQL/Postgres), secure refresh tokens, role-based access, React client.
