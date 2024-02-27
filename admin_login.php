<?php 
session_start();

ob_start();

?>
<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist2/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">


	<?php 
		

		if (isset($_POST['login'])) {

		$userName = $_POST['userName'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE userName = '".$userName."' AND password = '".$password."'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($query)==1) {

			$row = mysqli_fetch_assoc($query);
	     
			$_SESSION['id'] = $row['id'];
			

			header('Location: admin-dashboard.php');

		}


		else{
			 $_SESSION['message'] = "Incorrect login details!";
            $_SESSION['msg_type'] = "warning";
			
		}
	}

	?>


<div class="login-box">
  <div class="login-logo">
    <a href="admin_login.php"><b>Admin Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="admin_login.php" method="post">

      		 <?php
            if (isset($_SESSION['message'])): ?> 
              <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

		        <?php 
		            echo $_SESSION['message'];
		            unset($_SESSION['message']);
		        ?>
		            </div>
		            
		    <?php endif ?>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="UserName" name="userName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="myInput" required="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" onclick="myFunction()">
              <label for="remember">
                Show Password
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-flat btn-primary btn-block" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary disabled">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger disabled">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="admin-register.php" class="text-center">Register a new Admin</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist2/js/adminlte.min.js"></script>



<script type="text/javascript">
	function myFunction(){
		var x =
		document.getElementById("myInput");
		if (x.type==="password") {
			x.type = "text";
		}else{
			x.type = "password";
		}
	}
</script>
</body>
</html>


