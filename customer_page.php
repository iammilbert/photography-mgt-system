<?php
session_start();

ob_start();
?>


<?php include('db_connect.php');
    include ('header.php');
?>
   
   <?php      
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM signup WHERE signup.id='".$id."'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($query);
    
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
                        <li><a class="active" href="customer_page.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="Profile.php">Profile</a></li>
                        <li><a href="myReservations.php">My Reservations</a></li>
                        <li><a href="myRequests.php">My Requests</a></li>
                        <li><a href="makecomplain.php">Make Complains</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

                <div class="section" style="background-image: url('uploads/inner-bg.jpg');">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    
                                        <h2 data-animation="animated zoomInRight" style="font-size: 60px; font-family: Gebriola"><strong style="color: darkorange">Welcome,</strong><b style="text-transform: lowercase;"> </b><?php echo $row['firstName']; ?> <strong><?php echo $row['lastName']; ?></strong></h2>

                                        <p class="lead" data-animation="animated fadeInLeft" style="color: black; font-family: Monotype Corsiva">Please you can now proceed with your reservation or request. </p>

                                        <hr class="invis">

                                            <a href="customer_request.php" class="btn btn-light btn-radius grd1"><span>Make a Request</span></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="customer_reservation.php" class="btn btn-light btn-radius grd1"><span>Book a Session</span></a>
                                  
                                </div>
                            </div><!-- end row -->            
                        </div><!-- end container -->
                </div><!-- end section -->
  
    <?php include 'footer.php' ?>    

