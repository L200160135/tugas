<?php
 include "../koneksi.php";
 error_reporting (E_ALL ^ E_NOTICE )

?>
<?php
if(isset($_POST['simpan'])){
	
	$nama_peserta = $_POST['nama_peserta'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$instansi = $_POST['instansi'];
	$team = $_POST['tim'];
	// $tim_id = $data['id_tim'];

	$sql = "INSERT INTO peserta( nama_peserta, tempat_lahir, tgl_lahir, jenis_kelamin, 
	alamat, email, instansi, id_tim) VALUES ('$nama_peserta', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', 
	'$alamat', '$email', '$instansi', '$team' )";
	//$query = mysqli_query($conn, $sql);
	mysqli_query($conn, $sql);
	header("location: peserta.php");
	/*if($query){
		echo "<script>alert('iso');</script>";
		header('location: peserta.php');
	
	}else{
		echo "<script>alert('raiso lur');</script>";
	}*/

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
              <h3 class="box-title">Peserta</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
         
            <!-- header kolom  -->
<form name="form_add" method="POST">
<table>
	<tr>
		<td>nama</td>
		<td>:</td>
		<td><input type="text" name="nama_peserta"></td>
	</tr>
	<tr>
		<td>tempat lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir"></td>
	</tr>
	<tr>
		<td>tanggal lahir</td>
		<td>:</td>
		<td><input type="text" name="tgl_lahir"></td>
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td>:</td>
		<td>
		<ol>
			<input type="radio" name="jenis_kelamin" value="laki-laki">Laki - Laki
			<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
		</ol>
		</td>
	</tr>
	<tr>
		<td>alamat</td>
		<td>:</td>
		<td><textarea name="alamat" id="alamat"></textarea></td>
	</tr>
		<tr>
		<td>email</td>
		<td>:</td>
		<td><input type="text" name="email"></td>
	</tr>
		<tr>
		<td>instansi</td>
		<td>:</td>
		<td><input type="text" name="instansi"></td>
	</tr>
	<?php
		$tampil_tim = "SELECT * FROM tim";
		$result_tim = mysqli_query($conn, $tampil_tim);
	?>

	<tr>
		<td>nama tim</td>
		<td>:</td>
		<td>
			<select name="tim" id="tim">
				<?php
				while($data = mysqli_fetch_array($result_tim)){
					?>
					<option value="<?= $data['id_tim'] ?>"><?= $data['nama_tim'] ?></option>
				<?php
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan"><input type="reset" name="reset" value="Reset"></td>
	</tr>
</table>
</form>