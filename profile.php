<?php
session_start();

ob_start();
?>

<?php include ('header.php'); ?>
    
    

<?php 
    include('db_connect.php');      
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM signup WHERE signup.id='".$id."'";

		    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		    $row = mysqli_fetch_assoc($query);
    
?>

<style type="text/css">
	table,th,td{
	
		font-size: 13px;
		color: black;

	}

	@media print{
    	.btn-sm{
    		display: none;
    	}

    	.footer{
    		display: none;
    	}

    	.top-bar{
    		display: none;
    	}

    	.btn-primary{
    		display: none;
    	}
    	.btn-block{
    		display: none;
    	}

    	.copyrights{
    		display: none;
    	}

</style>

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

   
 <div id="container">
 	 <hr class="invis">
    	<div class="row">
         <div class="col-md-8 col-md-offset-2" style="padding-bottom: 20px">
	<form class="form">
			<div class="text-right">
				<td><a class="btn btn-primary" href="change_password.php">Change Password</a></td>

			 	<td><a href="#" class='btn btn-primary' onclick="javascript:window.print()" /><i class='fa fa-print'></i> Print</a></td>
			 	</div>
			 <div class="section-title text-center">
			 	<img src="images/KASULogo.PNG"  style="width: 100px; height: 80px; padding-bottom: 10px">
			 	
        		<h3 style="font-size: 17px; font-family: Tahoma"><b style="font-size: 22px;">GAZE STUDIO</b><br>Customer Information System (SIF)</h3>
        			    
    		</div>
				<fieldset">
					<table class="table">
					
						<tr>
							<th>First Name:</th>
							<td><?php echo $row['firstName']; ?></td>
							<th>Last Name:</th>
							<td><?php echo $row['lastName']; ?></td>
						</tr>

						<tr>
							<th>Middle Name:</th>
							<td><?php echo $row['middleName']; ?></td>
							<th>Gender:</th>
							<td><?php echo $row['gender']; ?></td>
						</tr>

							<tr>
							<th>Mobile:</th>
							<td><?php echo $row['mobile']; ?></td>
							<th>Email:</th>
							<td><?php echo $row['email']; ?></td>
							
						</tr>

	
					</table>


					<div>

						<a href="edit_profile.php?id=<?php echo $row['id']; ?>" name="edit" class="btn btn-light btn-radius grd1 btn-block">Edit Profile</a>

					</div>

				</fieldset>
			</div>
				
		</div>
	</form>
</div>
</div>
</div>
<hr class="invis">


 

    <?php include 'footer.php' ?>
