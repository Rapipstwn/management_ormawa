<!DOCTYPE html>
<html>
<head>
    <title>Edit Data User</title>
</head>
<body>

<h1>Edit Data User</h1>

<form action="<?php echo site_url('user_controller/update'); ?>" method="post">
    <p>
        <label>Induk</label><br>
        <input type="text" name="induk" value="<?php echo $u->induk; ?>" readonly>
    </p>

    <p>
        <label>Nama Lengkap</label><br>
        <input type="text" name="nama_lengkap" value="<?php echo $u->nama_lengkap; ?>">
    </p>

    <p>
        <label>Alamat</label><br>
        <input type="text" name="alamat" value="<?php echo $u->alamat; ?>">
    </p>

    <p>
        <label>Kota</label><br>
        <input type="text" name="kota" value="<?php echo $u->kota; ?>">
    </p>

    <p>
        <button type="submit">Simpan Perubahan</button>
        <a href="<?php echo site_url('user_controller'); ?>">Batal</a>
    </p>
</form>
<h2>Edit Ormawa</h2>

<form method="post">
    <input type="text" name="nama_ormawa"
           value="<?= $ormawa->nama_ormawa ?>" required>
    <br><br>
    <button type="submit">Update</button>
    <a href="<?= site_url('ormawa') ?>">Batal</a>
</form>


</body>
</html>
