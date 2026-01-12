<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun | Manajemen ORMAWA</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1f2937, #111827);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: #ffffff;
            width: 360px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);
        }

        .box h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .box p {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
        }

        .box button {
            width: 100%;
            padding: 12px;
            background-color: #16a34a;
            border: none;
            color: white;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
        }

        .box button:hover {
            background-color: #15803d;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
        }

        .link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .link a {
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Daftar Akun</h2>
    <p>Buat akun baru sebagai pengguna</p>

    <?php if (isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Daftar</button>
    </form>

    <div class="link">
        Sudah punya akun?
        <a href="<?= base_url('index.php/auth') ?>">Login</a>
    </div>
</div>

</body>
</html>
