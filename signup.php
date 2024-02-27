<?php 
    session_start();

    ob_start();
?>
<?php include('header.php'); ?>
<?php include ('db_connect.php');?>


<?php 

$errors = array();

if (isset($_POST['confirm'])) {
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$middleName = $_POST['middleName'];
			$gender = $_POST['gender'];
			$password = $_POST['password'];
			$password_confirm = $_POST['password_confirm'];

			$email = $_POST['email'];
			$check_duplicate_email = "SELECT email FROM signup WHERE email = '".$email."'";
			$query_email = mysqli_query($conn, $check_duplicate_email) or die(mysqli_error($conn));
			$email_count = mysqli_num_rows($query_email);
			if ($email_count > 0) {
				array_push($errors, "email already taken, Please use another email");
		
			}

			$mobile = $_POST['mobile'];
			$check_duplicate_mobile = "SELECT mobile FROM signup WHERE mobile = '".$mobile."'";
			$query_mobile = mysqli_query($conn, $check_duplicate_mobile) or die(mysqli_error($conn));
			$mobile_count = mysqli_num_rows($query_mobile);
			if ($mobile_count > 0) {
				array_push($errors, "Mobile number already taken, Please use another another number");
		
			}
		
			if ($password != $password_confirm) {
				array_push($errors, "The two password do not match");
			}


			if (count($errors)==0) {
	
			$sql = "INSERT INTO signup(firstName, lastName, middleName, gender, password, password_confirm, email, mobile) VALUES('".$firstName."', '".$lastName."', '".$middleName."', '".$gender."', '".$password."', '".$password_confirm."', '".$email."', '".$mobile."')";

			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

			 $_SESSION['message'] = "Record has been Sucessfully Submitted!" ;
    		$_SESSION['msg_type'] = "danger";

					
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
                        <li><a class="active" href="signup.php">Sign up</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

	
	<style type="text/css">
	.form-group label{
		color: black;
	}

	.form-group .form-control option{
		color: black;
	}

	.form-group .form-control{
		color: black;
		border-color : orange;
	}


</style>


<div class="section wb">
       <div class="container">
            <div class="section-title text-center">
                <h3>CREATING ACCOUNT</h3>
                <p class="lead">Please fill the form correctly</p>
            </div><!-- end title -->
        </div><!-- end container -->
    <div class="col-md-8 col-md-offset-2">
        <div class="contact_form">

	<form class="form" name="contactform" method="post">
		<div class="row">				
				 <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>

                <a href="login.php" style="color: darkgreen;">Login here</a>
                    </div>
                    
                <?php endif ?>

				<fieldset">
					<b><?php include ('signup_error.php'); ?></b>
					<div class="form-group">
						<label>First Name<b style="color: red;">*</b></label>
						<input type="text" id="firstName" name="firstName" class="form-control" required="firstName">
					</div>

					<div class="form-group">
						<label>Last Name<b style="color: red;">*</b></label>
						<input type="text" id="lastName" name="lastName" class="form-control" required="lastName">
					</div>

					<div class="form-group">
						<label>Middle Name</label>
						<input type="text" id="middleName" name="middleName" class="form-control" required="middleName">
					</div>

						<div class="form-group">
						<label>Gender<b style="color: red;">*</b></label>
							<select class="form-control" id="gender" name="gender" required="gender">
						<option value=""> -select gender-</option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>			


					<div class="form-group">
						<label>Email<b style="color: red;">*</b></label>
						<input type="email" id="email" name="email" class="form-control" required="email">
					</div>

					<div class="form-group">
						<label>Mobile<b style="color: red;">*</b></label>
						<input type="mobile" id="mobile" maxlength="11" name="mobile" class="form-control" required="mobile">
					</div>

					<div class="form-group">
						<label>Password<b style="color: red;">*</b></label>
						<input type="password" id="password" name="password" class="form-control" required="password">
					</div>

					<div class="form-group">
						<label>Confirm Password<b style="color: red;">*</b></label>
						<input type="password" id="password_confirm" name="password_confirm" class="form-control" required="password_confirm">
					</div>


					<div>
						<input type="submit" id="confirm" name="confirm" value="Register" class="btn btn-light btn-radius grd1 btn-brd">
					</div>

					<div class="form-group" style="padding-top: 10px; color: black"><b>Already Registered? <a href="login.php" style="color: darkgreen;">Login here</a> instead</b>
					</div>
				</fieldset>
			</div>

	</form>
</div>
</div>
</div>

    <?php include 'footer.php' ?>
