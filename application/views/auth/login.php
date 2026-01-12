<!DOCTYPE html>
<html>
<head>
    <title>Login | Manajemen ORMAWA</title>

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

        .login-box {
            background: #ffffff;
            width: 360px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #1f2937;
        }

        .login-box p.subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .login-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 14px;
        }

        .login-box input:focus {
            outline: none;
            border-color: #2563eb;
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            background-color: #2563eb;
            border: none;
            color: white;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #1d4ed8;
        }

        .error {
            background-color: #fee2e2;
            color: #991b1b;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }

        .info {
            margin-top: 20px;
            font-size: 12px;
            color: #374151;
            background: #f9fafb;
            padding: 12px;
            border-radius: 8px;
        }

        .info strong {
            color: #111827;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Manajemen ORMAWA</h2>
    <p class="subtitle">Silakan login untuk melanjutkan</p>

    <?php if (isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('index.php/auth') ?>">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <div class="info">
        <strong>Demo Login</strong><br>
        Admin: <b>admin / admin123</b><br>
        User: <b>user / user123</b>
        <div style="text-align:center; margin-top:15px;">
    <a href="<?= base_url('index.php/auth/register') ?>"
       style="text-decoration:none; color:#2563eb; font-size:14px;">
        Belum punya akun? Daftar di sini
    </a>
</div>

    </div>
</div>

</body>
</html>
