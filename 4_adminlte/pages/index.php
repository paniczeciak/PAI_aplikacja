<?php
  session_start();
  if (isset($_SESSION["logged"]) && session_status()==2){
    header("location: ./views/logged.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kukła | Rezerwacja stolików</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <style>
        a {
            color: #777777 !important;
            transition: color 0.3s ease !important;
        }

        a:hover {
            color: #151717 !important;
        }


    </style>
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
	<?php
	if (isset($_SESSION["success"])){
		echo <<< ERROR
    <div class="callout callout-success">
        <h5>Info</h5>
        <p>$_SESSION[success]</p>
    </div>
ERROR;
		unset($_SESSION["success"]);
	}

	if (isset($_SESSION["error"])){
		echo <<< ERROR
    <div class="callout callout-danger">
        <h5>Info</h5>
        <p>$_SESSION[error]</p>
    </div>
ERROR;
		unset($_SESSION["error"]);
	}
	?>
  <div class="card card-outline card-primary" style="border-top: 3px solid #333333;">
    <div class="card-header text-center">
        <a href="#" class="h1"><img src="../dist/img/logo-kukla.jpg" alt="Logo" style="max-width: 100%; height: auto";></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Zaloguj się aby zarezerwować stolik</p>

      <form action="../scripts/login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Podaj email" name="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Podaj hasło" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Zapamiętaj mnie
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-block btn-dark" >Logowanie</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <p class="mb-1">
        <a href="./forgot-password.php">Zapomniałem hasła</a>
      </p>
      <p class="mb-0">
        <a href="./register.php" class="text-center">Zarejestruj nowego użytkownika</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
