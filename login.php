<?php 
session_start();
ob_start();

?>

<?php include('header.php'); ?>
<?php include('db_connect.php'); ?>


<?php 
    if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM signup WHERE email = '".$email."' AND password = '".$password."'";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

  if (mysqli_num_rows($query)==1) {

    $row = mysqli_fetch_assoc($query);

    $_SESSION['id'] = $row['id'];

    header('Location: customer_page.php');

    }else{
      $_SESSION['message'] = "Incorrect Login details!";
            $_SESSION['msg_type'] = "warning";
    }
  }

  ?>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a class="navbar-brand" href="index.html">GAZE STUDIO</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="signup.php">Sign up</a></li>
                        <li><a class="active" href="login.php">Login</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<div class="banner-area banner-bg-1">
	<div class="container-fluid">
			<div class="col-md-4">
		
			</div>
      	<form method="POST">
           	<div class="col-md-4">
           	
				<fieldset>

						<legend style="color: orange;"><b>Customer Login</b></legend>
							<div class="form-group">
								<i class="fa fa-user" aria-hidden="true" style="color: black"></i>
									<label style="color: white">Email<b style="color: red">*</b></label>
									<input type="email" name="email" class="form-control" required="email" style="border-color: orange; background: none; color: white">
							</div>
						
								<div class="form-group">
									<i class="fa fa-lock" aria-hidden="true" style="color: black"></i>
								<label style="color: white">PassWord<b style="color: red">*</b></label>
								<input type="password" name="password" class="form-control" required="password" placeholder="e.g. *******" style="border-color: orange; background: none; color: white">
							</div>

               				
               				<div class="form-group">
               					
	               				<input name="login" type="submit" value="Login" class="btn btn-light btn-radius btn-brd">

	               				<button class="btn btn-light btn-radius btn-brd"><a href="index.php" style="color: white">Home</a></button>

               				 </div>

					</fieldset>
			</div>
    
		</form>
	<div class="col-md-4">
							
	</div>
</div><!-- end section -->
</div>

         

 
	

<?php include 'footer.php' ?>


