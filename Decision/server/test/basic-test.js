const assert = require('assert');

// Use global fetch when available (Node 18+), otherwise try node-fetch
let fetchFn;
try {
  fetchFn = global.fetch || require('node-fetch');
} catch (err) {
  fetchFn = global.fetch;
}

async function run() {
  console.log('Basic test: ensure /health responds');
  if (!fetchFn) {
    console.error('No fetch available. Install node-fetch or use Node 18+');
    process.exit(1);
  }
  const res = await fetchFn('http://localhost:4000/health');
  const body = await res.json();
  assert.strictEqual(body.ok, true);
  console.log('OK');
}

run().catch(err => { console.error(err); process.exit(1); });
