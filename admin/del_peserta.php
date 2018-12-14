<?php
    include "../koneksi.php";

    $get_id = $_GET['id'];

    $sql = "DELETE FROM peserta WHERE id_peserta='$get_id'";
    mysqli_query($conn, $sql);

    header ("location: peserta.php");
?>