<?php
session_start();
session_regenerate_id();

include ('header.php');
?>


<?php 

$errors = array();

include ('db_connect.php');
$id = $_SESSION['id'];

if (isset($_POST['update'])) {

		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];

			if ($password != $password_confirm) {
				array_push($errors, "The two password do not match");
			}

if (count($errors)==0) {
		$sql = "UPDATE signup SET password = '".$password."' WHERE id = '".$id."'";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			header('Location: pass_reset.php');
			

		}
}



?>

<style type="text/css">
	ul li{
		color: black;
	}
</style>

<div class="banner-area banner-bg-1">
	<div class="container">
		<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="contact_form">
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

		<form method="POST" class="form">
 
			<div class="row">
				
			<div class="form-group">
				<label style="color: black">Password Requirements</label>
				<ul>
					<li>Minimum 6 Characters</li>
					<li>Space are not permitted</li>
					<li>password should not be your mobile number</li>
				</ul>
				
			</div>
			
			<div class="form-group">
				
		        <b><?php include ('signup_error.php'); ?></b>
				<label style="color: black">Enter your New Password</label>
				<input type="password" name="password" class="form-control" style="border-color: darkgreen; color: black" required="password">
				
			</div>

			<div class="form-group">
				<label style="color: black">Confirm Password</label>
				<input type="password" name="password_confirm" class="form-control" style="border-color: darkgreen; color: black" required="password_confirm">
				
			</div>
			<div>
						<input type="submit" name="update" value="Update" class="btn  btn-primary">

						<a href="profile.php" name="cancel" class="btn  btn-radius btn-danger">Cancel</a>
			</div>
		</div>
		</form>
	</div>
</div>
</div>
</div>
</div>




<?php include ('footer.php'); ?>
