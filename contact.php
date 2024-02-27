
<?php include('header.php'); ?>

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
                        <li><a href="login.php">Login</a></li>
                        <li><a class="active" href="contact.php">Contact</a></li>
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


<?php
include('db_connect.php');

if (isset($_POST['submit'])) {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $mobile = $_POST['mobile'];
      $message = $_POST['message'];

      $to='michaelgabriel165@gmail.com';
      $subject2='Form Submission';
      $msg="Name: ".$firstName."\n"."mobile: ".$mobile."\n". "Wrote the following: "."\n\n".$message;
      $headers="From: ".$email;


      $sql = "INSERT INTO contact_us(firstName, lastName, email, subject, mobile, message) VALUES('".$firstName."', '".$lastName."', '".$email."', '".$subject."', '".$mobile."', '".$message."')";

      $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

     

       $_SESSION['message'] = "Sent successfully!, Thank you"." ".$firstName.", We will contact get back to you.";
        $_SESSION['msg_type'] = "success";

      }
  
  ?>


    <div id="contact">
        <div class="container">
            <div class="section-title text-center">
                <hr class="invis">
                <h3 style="font-family: Gebriola">Get in touch</h3>
                <h1 class="lead">CONTACT US</h1>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                            <?php
                           if (isset($_SESSION['message'])): ?> 
                            <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

                        <?php 
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        ?>
                            </div>
                            
                        <?php endif ?>

                           <form method="POST" class="mu-contact-form">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstName" placeholder="First Name" required="firstName">
                      </div>
                             <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" required="lastName">
                      </div>

                      <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required="email">
                      </div>  

                      <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="subject">
                      </div>

                      <div class="form-group">
                        <label>Mobile</label>
                        <input type="tel" class="form-control" name="mobile" placeholder="Subject" required="subject">
                      </div>

                      <div class="form-group">
                        <label>Message</label>                        
                        <textarea class="form-control" name="message"  cols="30" rows="10" placeholder="Type Your Message"></textarea>
                      </div>  

                       <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-light btn-radius grd1 btn-brd" value="Send Message">
                      </div> 
                    </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Headquarters</h3>
						<p>PO Box 16122 Collins Street West 
							<br> Victoria 8007 Australia</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Email Us</h3>
						<p>michaelgabriel165@gmail.com
							<br>michaelgabriel4968@yahoo.com</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Call Us</h3>
						<p>+2348137950284
							<br>+2348059709121</p>
					</div>
				</div>
			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->

  <?php include('footer.php'); ?>