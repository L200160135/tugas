<?php 
    include("../koneksi.php");

    $get_id = $_GET['id'];
    $sql = "DELETE FROM lomba WHERE id_lomba ='$get_id'";
    mysqli_query($conn, $sql);
    
    header('location: lomba.php');
?>