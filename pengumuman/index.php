<?php include("../koneksi.php") ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PENGUMUMAN | National Informatics Competition</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/customregister.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">

  </head>
  <body>
    

    <h1>PENGUMUMAN</h1>

    <?php 

        $sql = "SELECT * FROM pengumuman";
        $result = mysqli_query($conn, $sql);
        $folder = "img/";
    ?>
        <table border=1> 
        
        <?php
        while($data = mysqli_fetch_array($result)){
        ?>
            <tr>
              <td rowspan=2> <img src="../admin/<?= $data['gambar'] ?>" width="100" alt=""> </td>
              <td><h3><?= $data['judul'] ?></h3></td>
            </tr>
            <tr>
              <td>
                <p><?= $data['subjudul'] ?></p> <br> 
                <a href="readmore.php?id=<?= $data['id_pengumuman'] ?>">read more...</a>
              </td>
            </tr>
            
        <?php   
        }
    ?>
        </table>



    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>
  </body>