<?php
session_start();

ob_start();

include ('header.php');

include ('db_connect.php');

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

$id = $_SESSION['id'];

if (isset($_POST['submit'])) {

		$id = $_SESSION['id'];
		$password = $_POST['password'];


		$sql = "SELECT * FROM signup WHERE id = '".$id."' AND password = '".$password."'";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($query)==1) {

		$row = mysqli_fetch_assoc($query);

		header('Location: enterNew_password.php');

		}else{
			$_SESSION['message'] = "Password incorrect!";
            $_SESSION['msg_type'] = "warning";
		}
	}


?>

<div class="section wb">
	<div class="col-md-4 col-md-offset-4">
		<form method="POST">
			<div class="row">

				<?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
                    </div>
                    
                <?php endif ?>

			
			<div class="form-group">
				<label style="color: black">Enter your current password</label>
				<input type="password" name="password" class="form-control" style="border-color: darkgreen">
				
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="submit" class="btn btn-success">
	
			</div>

		</div>
		</form>
	</div>
</div>




<?php include ('footer.php'); ?>
