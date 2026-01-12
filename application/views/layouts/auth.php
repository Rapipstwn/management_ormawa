<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Login'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6ea8fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .auth-card {
            width: 380px;
            border-radius: 15px;
            padding: 25px;
            background: #fff;
        }
    </style>
</head>
<body>

<div class="auth-card shadow">
    <?php $this->load->view($content); ?>
</div>

</body>
</html>
