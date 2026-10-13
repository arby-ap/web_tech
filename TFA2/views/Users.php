<h1>Users</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<?php foreach ($users as $user): ?>

<p>
<?= $user['username']; ?> -
<?= $user['full_name']; ?>
</p>

<?php endforeach; ?>