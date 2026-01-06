<html>
<head><title><?php echo $judul; ?></title>
</head>
<body>
<h1><?=$judul?></h1>
<table border='1'>
<thead>
<tr>
<th>Induk</th>
<th>Nama Lengkap</th>
<th>Alamat</th>
<th>Kota</th>
</tr>
</thead>
<tbody>
<?php
foreach ($daftar_user as $user) {
?>
< <tr>
<td><?php echo $user->induk; ?></td>
<td><?php echo $user->nama_lengkap; ?></td>
<td><?php echo $user->alamat; ?></td>
<td><?php echo $user->kota; ?></td>
<td><?php echo '<a href="'.base_url().'index.php/user_controller/delete_user/'.
$user->induk.'"onclick="return confirm (\'Anda Yakin Menghapus'.
$user->nama_lengkap.'?\')">Delete</a>'?></td>
</tr>
<?php }?>
</tbody>
</table>
</body>
</html>
