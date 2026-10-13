<h1>Today's Tasks</h1>

<a href="/">Home</a> |
<a href="/tasks">Tasks</a> |
<a href="/profile">Profile</a> |
<a href="/about">About</a>

<?php foreach($tasks as $task): ?>

<p>
<?= $task['title']; ?>
-
<?= $task['status']; ?>
</p>

<?php endforeach; ?>