<h2>Data Ormawa</h2>
<a href="<?= site_url('ormawa/tambah') ?>">+ Tambah Ormawa</a>
<br><br>


<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama Ormawa</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($ormawa as $o): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $o->nama_ormawa ?></td>
        <td>
            <a href="<?= site_url('ormawa/hapus/'.$o->id_ormawa) ?>"
       onclick="return confirm('Yakin hapus data?')">
       Hapus
             </a>
             <td>
        <a href="<?= site_url('ormawa/edit/'.$o->id_ormawa) ?>">Edit</a> |
        <a href="<?= site_url('ormawa/hapus/'.$o->id_ormawa) ?>"
       onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>

        </td>

    </tr>
    <?php endforeach; ?>
</table>
