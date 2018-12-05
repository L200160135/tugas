<?php
    include("../koneksi.php");

    $get_id = $_GET['id'];
    $sql = "SELECT * FROM pengumuman WHERE id_pengumuman = $get_id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
?>
<h2><?= $data['judul'] ?> </h2>
<p><?= $data['subjudul'] ?></p>
<p><?= $data['isi'] ?></p>