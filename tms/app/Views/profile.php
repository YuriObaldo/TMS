<h1>Profile</h1>

<?php if ($user === null): ?>
    <p>No user record found.</p>
<?php else: ?>
    <p><strong>Full name:</strong> <?= esc($user['full_name']) ?></p>
    <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
    <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
    <p><strong>Member since:</strong> <?= esc(date('F j, Y', strtotime($user['created_at']))) ?></p>
<?php endif; ?>
