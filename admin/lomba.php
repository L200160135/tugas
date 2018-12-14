<?php
  
  include "../koneksi.php";

  session_start();
    
  if(isset($_SESSION['admin'])) {

  ?>

<!DOCTYPE html>
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
  <body class="hold-transition skin-yellow-light sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>EX</b>SAM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Examole</b>Surakarta</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/img/log.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo '$username'; ?> </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="assets/img/log.png" class="img-circle" alt="User Image">
                    <p>
                      
                      <small></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="index.php?page=edd_acount&id_admin=<?php echo $_SESSION['id_admin']; ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="assets/img/log.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['username']; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="indexadmin.php">
                <i class="fa fa-home"></i> <span>HOME</span> 
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="peserta.php"><i class="fa fa-circle-o"></i> Peserta</a></li>
                <li><a href="tim.php"><i class="fa fa-circle-o"></i> Tim</a></li>
                <li><a href="lomba.php"><i class="fa fa-circle-o"></i> Lomba</a></li>
                <li><a href="pengumuman.php"><i class="fa fa-circle-o"></i> Pengumuman</a></li>
              </ul>
            </li>
  
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            National Informatics Competition
            <small></small>
          </h1>
          
        </section>

        <!-- content Lomba-->
        <section class="content">
          
          <!-- Tabel Lomba -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lomba</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
         
            <!-- header kolom  -->
            <div class="box-body">
              <div class="content table-responsive table-full-width">                                
                <table class="table table-hover table-striped">
                  <thead>
                    <th>ID</th>
                    <th>Nama Lomba</th>
                    <th>Deskripsi</th>
                    <th>Keterangan Babak Penyisihan</th>
                    <th>Keterangan Penilaian</th>
                    <th width="7%">Action</th>
                  </thead>

                  <!-- isi tabel -->
                  <?php
                  $query = "SELECT * FROM lomba";
                  $result = mysqli_query($conn, $query);
                  while ($data = mysqli_fetch_assoc($result)) { ?>
                  <tbody>
                    <tr>
                      <td><?= $data['id_lomba'] ?>        </td>
                      <td><?= $data['kategori']?>         </td>
                      <td><?= $data['deskripsi'] ?>       </td>
                      <td><?= $data['babak_penyisihan']?> </td>
                      <td><?= $data['penilaian']?>        </td>
                      <td>
                        <a href="upd_lomba.php?id=<?= $data['id_lomba'] ?>">Edit</a> | 
                        <a href="del_lomba.php?id=<?= $data['id_lomba'] ?>">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php  
                  }
                  ?>
                </table>
            </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <a href="index.php?page=tambah_berita"><button class="btn btn-info" data-toggle="tooltip" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</button></a>
            </div><!-- /.box-footer-->
          </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          
        </div>
       <strong>Copyright &copy; 2017. </strong>
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugin/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugin/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/js/demo.js"></script>
    <!-- data tables -->
        <script src="../plugin/media/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../plugin/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function(){
              $('#data_table').DataTable();
            });

        </script>


    <!-- file input -->
    <script src="../plugin/fileinput/js/fileinput.js" type="text/javascript"></script>
    <script>
      $(document).on('ready', function() {
          $("#input-6").fileinput({
              showUpload: false,
              maxFileCount: 10,
              mainClass: "input-group-lg"
          });
      });
    </script>
    <!-- form validation -->
    <script src="../plugin/form_validation/assets/jquery.validate.js" type="text/javascript"></script>
    <script src="../plugin/form_validation/script.js" type="text/javascript"></script>

    <!-- Tiny Mce / untuk membuat tampilan type text menjadi tampilan blogspot -->
    <script src="../plugin/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea",theme: "modern",height: 300,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
           ],
           toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
           toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
           image_advtab: true ,

           external_filemanager_path:"plugin/filemanager/",
           filemanager_title:"Responsive Filemanager" ,
           external_plugins: {"filemanager" : "../filemanager/plugin.min.js"}
        });
    </script>
  </body>
</html>
<?php
   } 
   else {
    header("location: login.php");
   }
  ?>