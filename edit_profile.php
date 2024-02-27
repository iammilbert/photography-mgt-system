<?php 

    session_start();
    ob_start();

include ('header.php'); 

 
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
                        <li><a href="customer_page.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a class="active" href="Profile.php">Profile</a></li>
                        <li><a href="myReservations.php">My Reservations</a></li>
                        <li><a href="myRequests.php">My Requests</a></li>
                        <li><a href="makecomplain.php">Make Complains</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<?php
	include('db_connect.php');
		$id = $_SESSION['id'];
		$sql = "SELECT signup.id, signup.firstName, signup.lastName, signup.middleName, signup.gender, signup.mobile,signup.email FROM signup WHERE signup.id = '".$id."'";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 $row = mysqli_fetch_assoc($query);


	if (isset($_POST['update'])) {
				$id = $_POST['id'];
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$middleName = $_POST['middleName'];
				$gender = $_POST['gender'];
				$mobile = $_POST['mobile'];
				$email = $_POST['email'];

		
$sql = "UPDATE signup SET firstName = '".$firstName."', lastName = '".$lastName."', middleName = '".$middleName."', gender = '".$gender."', email = '".$email."', mobile = '".$mobile."' WHERE signup.id = '".$id."'";

			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            header('location: profile.php');

	}

	?>

<style type="text/css">
	form{	
		color: black;
	}

	.form-group .form-control{	
		color: black;
		border-color: orange;
	}

</style>


    <div id="contact" class="section">
    	<div class="section-title text-center">
        		<h3><b>Edit and Submit</b></h3>
    		</div>
        <div class="col-md-6 col-md-offset-3"  style="background-color: darkgrey">
           <div class="contact_form">
	<form class="form" method="POST" ">
		<div class="row">
			<div>
				<fieldset">
					<legend style="color: green;"><h2><b>Profile</b></h2></legend>
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<label>First Name<b style="color: red;">*</b></label>
						<input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName']; ?>">
					</div>

					<div class="form-group">
						<label>Last Name<b style="color: red;">*</b></label>
						<input type="text" name="lastName" class="form-control" value="<?php echo $row['lastName']; ?>" >
					</div>

					<div class="form-group">
						<label>Middle Name</label>
						<input type="text" name="middleName" class="form-control" value="<?php echo $row['middleName']; ?>">
					</div>

					<div class="form-group">
							<label>Gender<b style="color: red;">*</b></label>
							<select class="form-control" name="gender">
								<option><?php echo $row['gender']; ?></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>

					<div class="form-group">
						<label>Mobile<b style="color: red;">*</b></label>
						<input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
					</div>

					<div class="form-group">
						<i class="glyphicon glyphicon-envelope"></i>
						<label>Email<b style="color: red;">*</b></label>
						<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
					</div>


					<div>
						<input type="submit" name="update" value="Update" class="btn  btn-primary">

						<a href="profile.php" name="cancel" class="btn  btn-radius btn-danger">Cancel</a>
					</div>

				</fieldset>
			</div>
		</div>
	</form>
	</div>
		</div>
	</div>


    <?php include 'footer.php' ?>
</body>
</html>