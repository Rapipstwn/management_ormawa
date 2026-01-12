<h2>Data ORMAWA</h2>

<a href="<?= base_url('ormawa/create') ?>" class="btn">+ Tambah ORMAWA</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama ORMAWA</th>
    </tr>
    <?php $no=1; foreach ($ormawa as $o): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $o->nama_ormawa ?></td>
    </tr>
    <?php endforeach; ?>
</table>
