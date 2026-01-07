<table border="1" cellpadding="4" cellspacing="0">
    defined('BASEPATH') OR exit('No direct script access allowed');
    <tr>
        <th>Induk</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($user as $u): ?>
        <tr>
            <td><?php echo $u->induk; ?></td>
            <td><?php echo $u->nama_lengkap; ?></td>
            <td><?php echo $u->alamat; ?></td>
            <td><?php echo $u->kota; ?></td>
            <td>
                <a href="<?php echo site_url('user_controller/edit/'.$u->induk); ?>">Edit</a>
                &nbsp;|&nbsp;
                <a href="<?php echo site_url('user_controller/delete/'.$u->induk); ?>"
                   onclick="return confirm('Yakin menghapus data ini?');">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?= site_url('ormawa/edit/'.$o->id_ormawa) ?>">Edit</a>

