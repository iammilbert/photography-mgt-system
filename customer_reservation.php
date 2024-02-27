<?php 
    session_start();

    ob_start();
?>

<?php include ('header.php'); ?>
   
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
include 'db_connect.php';
?> 

 
<?php 

if (isset($_POST['confirm'])) {
            $customer_id = $_POST['customer_id'];
            $event = $_POST['event'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $shot = $_POST['shot'];
            $state = $_POST['state'];
            $address = $_POST['address'];
            $status = $_POST['status'];
    
            $sql = "INSERT INTO customer_reservation(customer_id, event, date, time, shot, state, address, status) VALUES('".$customer_id."', '".$event."', '".$date."', '".$time."', '".$shot."', '".$state."', '".$address."', '".$status."')";

            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

             $_SESSION['message'] = "Reservation successfully!" ;
            $_SESSION['msg_type'] = "success";

                    
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
                   <a class="navbar-brand" href="index.php">GAZE STUDIO</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="customer_page.php">Home</a></li>
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

<hr class="invis">
<div id="contact" class="container">
    <div class="section-title text-center">
        <h3><b>Make Your Reservation</b></h3>
        <p class="lead">Please fill out the form below.</p>
            
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="contact_form">

    <form class="form" name="contactform" method="post">
        <div class="row">   
                    
        <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id']; ?>">            
                 <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
                    </div>
                    
                <?php endif ?>

                <fieldset">
               <div class="form-group">
                        <label>Event<b style="color: red;">*</b></label>
                            <select class="form-control" id="event" name="event" required="event">
                                <option value=""> -Select Event-</option>
                                <option>Birthday</option>
                                <option>Wedding</option>
                                <option>Burial</option>
                                <option>In-house Photo shot</option>
                                <option>Studio Session</option>
                                <option>Movies</option>
                                <option>Other</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Even Date<b style="color: red;">*</b></label>
                        <input type="date" id="date" name="date" class="form-control" required="date">
                    </div>
                    <div class="form-group">
                        <label>Event Time<b style="color: red;">*</b></label>
                        <input type="text" id="time" name="time" class="form-control" required="time">
                    </div>

                    <div class="form-group">
                        <label>Number of shots<b style="color: red;">*</b></label>
                        <select class="form-control" id="shot" name="shot" required="shot">
                                <option value="Nill"> -Select Shots-</option>
                                <option>1-20</option>
                                <option>20-40</option>
                                <option>40-60</option>
                                <option>60-80</option>
                                <option>80-100</option>
                                <option>120-140</option>
                                <option>140 and Above</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label><u>EVENT LOCATION:</u></label>
                    </div>

                    <div class="form-group">
                        <label>State<b style="color: red;">*</b></label>
                        <select class="form-control" id="state" name="state" required="state">
                                <option>Abuja</option>
                                <option>Lagos</option>
                                <option>Kaduna</option>
                                <option>Cross River</option>
                                <option>Kogi</option>
                                <option>Delta</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                         <textarea class="form-control" name="address" id="address" rows="6" placeholder="Give us with LandMark.."></textarea>

                    </div>
                        <input type="hidden" name="status" value="0">

                    <div class="form-group">
                        <input type="submit" id="confirm" name="confirm" value="Register" class="btn btn-primary">

                        <a href="customer_page.php" class="btn btn-danger">Cancel</a>
                    </div>

                


                </fieldset>
            </div>

    </form>
</div>
</div>
</div>
<hr class="invis">
<?php include 'footer.php' ?>
