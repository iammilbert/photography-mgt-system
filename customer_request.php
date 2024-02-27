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
        
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM signup WHERE signup.id = '".$id."'";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $row = mysqli_fetch_assoc($query)


?> 

 
<?php 

if (isset($_POST['confirm'])) {
            $customer_id = $_POST['customer_id'];
            $request = $_POST['request'];
            $event_id = $_POST['event_id'];
            $delivery_type = $_POST['delivery_type'];
            $status = $_POST['status'];
    
            $sql = "INSERT INTO customer_request(customer_id, request, event_id, delivery_type, status) VALUES('".$customer_id."', '".$request."', '".$event_id."', '".$delivery_type."', '".$status."')";

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
    


<hr class="invis">
<div id="contact" class="container">
    <div class="section-title text-center">
        <h3><b>Make Your Request</b></h3>
        <p class="lead">Please fill out the form below.</p>
            
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="contact_form">

    <form class="form" name="contactform" method="post">
        <div class="row">   
                    
        <input type="hidden" name="customer_id" value="<?php echo $row['id']; ?>">            
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
                        <label>Request<b style="color: red;">*</b></label>
                            <select class="form-control" id="request" name="request" required="request">
                                <option value=""> -Select Request-</option>
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
                        <label>Even ID<b style="color: red;">*</b></label>
                        <input type="text" id="event_id" name="event_id" class="form-control" required="event_id">
                    </div>

                    <div class="form-group">
                        <label>Delivery<b style="color: red;">*</b></label>
                        <select class="form-control" id="delivery_type" name="delivery_type" required="delivery_type">
                                <option value="Nill"> -Select Delivery Type-</option>
                                <option>Email</option>
                                <option>Shipping</option>
                                <option>Come to Office</option>
                            </select>
                    </div>

                   <input type="hidden" name="status" value="0">
                    <div class="form-group">
                        <input type="submit" id="confirm" name="confirm" value="Submit" class="btn btn-primary">

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
