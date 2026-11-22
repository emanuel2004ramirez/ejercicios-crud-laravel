import assert from 'node:assert/strict';
import test from 'node:test';

globalThis.window = {};
await import('../../resources/js/bootstrap.js');

test('bootstrap exposes axios with the XMLHttpRequest header configured', () => {
    assert.ok(globalThis.window.axios);
    assert.equal(
        globalThis.window.axios.defaults.headers.common['X-Requested-With'],
        'XMLHttpRequest',
    );
});
