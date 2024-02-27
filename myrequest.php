<?php 
    session_start();
    ob_start();
?>
<?php include ('header.php'); ?>
<style type="text/css">
    table,th,td{
    
        color: black;

    }

     @media print{
        .btn-sm{
            display: none;
        }

        .footer{
            display: none;
        }

        .btn-primary{
            display: none;
        }

        .copyrights{
            display: none;
        }
    }

</style>

<?php 
include 'db_connect.php';



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
                        <li><a href="Profile.php">Profile</a></li>
                        <li><a href="myReservations.php">My Reservations</a></li>
                        <li><a class="active" href="myRequest.php">My Requests</a></li>
                        <li><a href="makecomplain.php">Make Complains</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    
<div class="container-fluid" style="padding-bottom: 160px">
        <div class="col-md-8 col-md-offset-2">
            <form class="form">
                <div class="row">
                    <hr class="invis">
                 <p class="text-center" style="font-family: Gebriola; font-size: 30px; color: black"><b>My Requests</b></p>

                     <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>

               
                    </div>
                    
                <?php endif ?>

                <div class="text-right">
                    <td><a href="#" class='btn btn-primary' onclick="javascript:window.print()" /><i class='fa fa-print'></i> Print</a></td>
                </div>

                <table class="table" style="font-size: 13px">

                    <tr>
                        <td><b>S/N</b></td>
                        <td><b>Request</b></td>
                        <td><b>Event ID</b></td>
                        <td><b>Date Ordered</b></td>  
                    </tr>

                    <?php
                     $id = $_SESSION['id'];
                        $no=1;

                    $sql = "SELECT * FROM signup
                            INNER JOIN customer_request
                            ON customer_request.customer_id = signup.id
                            WHERE customer_request.customer_id ='".$id."'";

                        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['request']; ?></td>
                        <td><?php echo $row['event_id']; ?></td>
                        <td><?php echo $row['dateOdered']; ?></td>

                    </tr>

                <?php
                    $no++;
                    }
                    

                ?>
            
         </table>
         </div>
      </form>
    </div>
</div>

    
  
<?php include 'footer.php' ?>   
