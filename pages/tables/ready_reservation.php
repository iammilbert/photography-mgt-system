<?php
session_start();

ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist2/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<div class="wrapper">


<?php include('../../db_connect.php'); ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../admin-dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated">
                <a class="dropdown-item" href="../../admin-profile.php"><i class="far fa-user nav-icon"></i> My Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../change-pass.php"><i class="fas fa-lock nav-icon"></i> Change Password</a>
                  <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="../../admin_logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                  <div class="dropdown-divider"></div>
              </div>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin-dashboard.php" class="brand-link">
    
      <span class="brand-text font-weight-light" style="color: orange"><b>GAZE STUDIO</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="../../admin-dashboard.php" class="nav-link active">
              <i class="fa fa-fw fa-home"></i>
              <p>
                DASHBOARD  
              </p>
            </a>
       
          </li>
    
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                INCOMMING
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ready_reservation.php" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Reservation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ready_request.php" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ready_contact.php" class="nav-link">
                  <i class="far fa-envelope nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>

            </ul>
          </li>
         
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-image nav-icon"></i>
              <p>
                GALLERY
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin-create-gallery.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add New Picture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin-gallery.php" class="nav-link">
                  <i class="far fa-image nav-icon"></i>
                  <p>View Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                PORTFOLIOS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin-create-birthday.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Birthday</p>
                </a>
                 <a href="../../admin-create-wedding.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Wedding</p>
                </a>
                 <a href="../../admin-create-burial.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Burial</p>
                </a>
                 <a href="../../admin-create-other.php" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Others</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Reservations</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

               <div class="form-group">
                  <?php
               if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
            <a href="ready_reservation.php" style="color: blue">Refresh</a>
                </div>
                
            <?php endif ?>
                    
                </div>   
              <form class="form" method="POST">
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Event Type</th>
                        <th>Reserved Date</th> 
                        <th>Event Date</th> 
                        <th>Event Time</th>  
                        <th>Event State</th>
                        <th>Address</th>  
                        <th>Action</th>  
                    </tr>
                    </thead>
                    <tbody>

                <?php
                $sql="SELECT customer_reservation.transaction_id, customer_reservation.event, customer_reservation.date, customer_reservation.time, customer_reservation.shot, customer_reservation.transaction_id, customer_reservation.status, customer_reservation.customer_id, signup.firstName, signup.lastName, signup.email, signup.mobile, customer_reservation.date, customer_reservation.reserved_date, customer_reservation.state, customer_reservation.address
              FROM customer_reservation 

              INNER JOIN signup
              ON customer_reservation.customer_id = signup.id";

               $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
           
        while ($row = mysqli_fetch_assoc($query)) {
          ?>
                    <tr>
                      <td><?php echo $row['transaction_id']; ?></td>
                        <td><?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['event']; ?></td>
                        <td style="color: green"><?php echo $row['reserved_date']; ?></td>
                        <td style="color: red"><?php echo $row['date']; ?></td>
                        <td style="color: green"><?php echo $row['time']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['address']; ?></td>


                        <td>
                            <?php
                                if($row['status']==1){
                                    echo "<button class='btn btn-flat btn-dark' selected disabled>Success</button>";
                                }
                              elseif($row['status']==0){
                                    

                                  echo "<a href='../../process-reservation.php?id=".$row['transaction_id']."' class='btn btn-flat btn-success'> Process</a>";
                                }
                                elseif($row['status']==2){
                                    echo "<button class='btn btn-flat btn-dark' selected disabled>Unsuccessful</button>";
                                }
                                  else{
                                    echo "<button class='btn btn-flat btn-dark' selected disabled>Invalid</button>";
                                  };


                            ?>
                        </td>
                    </tr>

                <?php
                    }

                ?>
            </tbody>
         </table>
      </form>
    </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="http://adminlte.io">GAZE STUDIO</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist2/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist2/js/demo.js"></script>
<script type="text/javascript" src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
  });
</script>
</body>
</html>
