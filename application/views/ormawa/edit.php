<h2>Edit Ormawa</h2>

<form method="post">
    <label>Nama Ormawa</label><br>
    <input type="text" name="nama_ormawa"
           value="<?= $ormawa->nama_ormawa ?>" required>
    <br><br>
    <button type="submit">Update</button>
    <a href="<?= site_url('ormawa') ?>">Batal</a>
</form>
