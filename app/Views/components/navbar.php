<?php if (!(session()->get('logged_in') && session()->get('role') === 'admin')): ?>
<div style="text-align: center">
    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
    <a href="<?= base_url('login') ?>">
        <button style="background: transparent; border: 2px solid #888; color: #555; padding: 8px 16px; border-radius: 6px; cursor: pointer; margin-left: 40px;">Login Admin</button>
    </a>
</div>
<?php else: ?>
<div style="text-align: center">
    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
    <!-- Admin sudah login, jadi tombol Login Admin dihilangkan -->
</div>
<?php endif; ?>
