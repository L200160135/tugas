<?php
 include "../koneksi.php";
 error_reporting (E_ALL ^ E_NOTICE );
 
 $get_id = $_GET['id'];

 $query = "SELECT * FROM pengumuman WHERE id_pengumuman=$get_id";
 $get_data = mysqli_query($conn, $query);
 $data = mysqli_fetch_array($get_data);

if(isset($_POST['simpan'])){
    
	$judul = $_POST['judul'];
	$subjudul = $_POST['subjudul'];
	$isi = $_POST['isi'];
	$direktori='img/';
	$gambar = $_FILES['gambar']['name'];
	$upload = $direktori.$gambar;

	if ($upload == "img/"){
		$upload = $data['gambar'];

	}


	$update = "UPDATE pengumuman SET judul='$judul', subjudul='$subjudul', isi='$isi', gambar='$upload' WHERE id_pengumuman='$get_id' ";
	mysqli_query($conn, $update);
	move_uploaded_file($_FILES["gambar"]["tmp_name"],$upload);	

    header ("location: pengumuman.php");
    
	// if($query){
	// 	echo "<script>alert('iso');</script>";
	// 	header('location: peserta.php');
	
	// }else{
	// 	echo "<script>alert('jancuk raiso');</script>";
	// }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Lomba Kompetensi Mahasiswa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/css/skins/_all-skins.css">
    <!-- data tables-->
    <link href="../plugin/media/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap file input -->
    <link href="../plugin/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <!-- bootstrap validatin -->
    <link href="../plugin/form_validation/style.css" media="all" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
</html>

<!-- Tabel Peserta -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ubah pengumuman</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
         
            <!-- header kolom  -->
<form name="form_add" method="POST" enctype='multipart/form-data'>
<table>
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td><input type="text" name="judul" value="<?= $data['judul'] ?>"></td>
	</tr>
	<tr>
		<td>Subjudul</td>
		<td>:</td>
		<td><input type="text" name="subjudul" value="<?= $data['subjudul'] ?>"></td>
	</tr>
	<tr>
		<td>Isi</td>
		<td>:</td>
		<td> <textarea name="isi"><?= $data['isi'] ?></textarea> </td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td>:</td>
		<td>
            <img src="<?= $data['gambar'] ?>" width="100">
            <input type ='file' name='gambar' size='20' accept="<?= $data['gambar'] ?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan"><input type="reset" name="reset" value="Reset"></td>
	</tr>
</table>
</form>