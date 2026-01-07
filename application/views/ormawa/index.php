<!DOCTYPE html>
<html>
<head>
    <title>Management Ormawa</title>
</head>
<body>

<h2>Management Ormawa</h2>

<p>Login sebagai: <b><?= $this->session->userdata('username') ?></b></p>
<a href="<?= site_url('Auth/logout') ?>">Logout</a>

<hr>

<ul>
<?php foreach ($ormawa as $o): ?>
    <li><?= $o->nama_ormawa ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>
