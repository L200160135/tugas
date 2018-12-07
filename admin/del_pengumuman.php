<?php 
    include("koneksi.php");

    $get_id = $_GET['id'];

    $sql = "DELETE FROM pengumuman WHERE id_pengumuman = $get_id";
 
    mysqli_query($conn, $update);
 
    header('location: pengumuman.php');
?>