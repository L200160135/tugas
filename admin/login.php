<?php
session_start();
if (!isset($_SESSION['admin'])){

  include ("../koneksi.php");
  // start session
  session_start();

  // jika sign in di klik
  if(isset($_POST['submit'])){  
    // mengambil variabel
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // pencocokan login
    if($username == $row['username'] && $password == $row['password']){
      
      // jika login sbg Admin
      if($row['fk_roles'] == 1){
        $_SESSION['admin'] = $username;
        header ("location: indexadmin.php");
        ?>
        <script language="javascript"> 
          alert("login sebagai <?php $username ?>"); 
        </script>
        <?php
      } 
      else {
        $_SESSION['peserta'] = $username;
        header ("location: http://localhost/tugasakhir/index.php");
      }
    
    } 
    else {
      ?>
      <!-- alert jika gagal -->
      <script language="javascript">
        alert("username or password is invalid");
        document.location="login.php";
      </script>
      
      <?php
    }
  }
?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title> | Log in</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="../admin/assets/css/bootstrap.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../admin/assets/css/font-awesome.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../admin/assets/css/AdminLTE.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body class="hold-transition login-page">
      <div class="login-box">
        <div class="login-logo">
          <b>Login</b> ADMIN
        </div><!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>
          <form action="login.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" name="username" class="form-control" placeholder="username">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">
              
              </div><!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div><!-- /.col -->
            </div>
          </form>
          <br/>
        </div><!-- /.login-box-body -->
      </div><!-- /.login-box -->

      <!-- jQuery 2.1.4 -->
      <script src="../admin/assets/js/jQuery-2.1.4.min.js"></script>
      <!-- Bootstrap 3.3.5 -->
      <script src="../admin/assets/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
// $_SESSION['admin'];
} else {
  header ("location: indexadmin.php");
}
?>