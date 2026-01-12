<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Manajemen ORMAWA' ?></title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
        }

        /* HEADER */
        .header {
            background-color: #1f2937;
            color: #fff;
            padding: 16px 24px;
        }

        .header h1 {
            font-size: 22px;
        }

        /* NAVBAR */
        .navbar {
            background-color: #111827;
            padding: 10px 24px;
        }

        .navbar a {
            color: #e5e7eb;
            margin-right: 16px;
            text-decoration: none;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #60a5fa;
        }

        /* CONTENT */
        .container {
            padding: 24px;
        }

        /* DASHBOARD */
        .dashboard-title {
            margin-bottom: 6px;
        }

        .dashboard-subtitle {
            color: #6b7280;
            margin-bottom: 24px;
        }

        /* GRID */
        .row {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        /* CARD */
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            flex: 1;
            min-width: 220px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .card h6 {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 28px;
            color: #1f2937;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin-top: 16px;
        }

        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
        }

        table th {
            background-color: #f9fafb;
            text-align: left;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            background-color: #2563eb;
            color: #fff;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Manajemen ORMAWA</h1>
</div>

<div class="navbar">
    <a href="<?= base_url('dashboard') ?>">Dashboard</a>

    <?php if ($this->session->userdata('role') == 'admin'): ?>
        <a href="<?= base_url('ormawa') ?>">ORMAWA</a>
    <?php endif; ?>

    <a href="<?= base_url('auth/logout') ?>">Logout</a>
</div>

<div class="container">
    <?= $content ?>
</div>

</body>
</html>
