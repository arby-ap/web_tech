<h1>Customers</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<?php foreach ($customers as $customer): ?>
    <p>
        <?= $customer['fullname']; ?> -
        <?= $customer['email']; ?>
    </p>
<?php endforeach; ?>
