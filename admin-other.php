<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist2/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">
</head>
<body>

<?php include('db_connect.php'); ?>



    <section class="content-header">
      <div class="container-fluid text-center">
       <h1>Others Pictures</h1>
       <a href="admin-dashboard.php" class="btn btn-success">HOME</a>
      </div><!-- /.container-fluid -->
    </section>


          <?php
            if(isset($_GET['delete'])){
              $id = $_GET['delete'];
              $sql = "DELETE FROM other WHERE id='".$id."'";
              $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            
            }


            $sql = "SELECT * FROM other";

            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));


            ?>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">

    <?php while($gallery_row = mysqli_fetch_assoc($query)): ?>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card bg-light">
                  
              <img style="width: 400px; height: 400px" alt="img" src="assets/images/other/<?php echo $gallery_row['picture']; ?>">                
                <div class="card-footer">
                  <div class="text-center">
                    <a href="admin-other.php?delete=<?php echo $gallery_row['id']; ?>" class="btn btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                    <a href="admin-edit-other.php?id=<?php echo $gallery_row['id'] ?>" class="btn btn-success">
                      <i class="fas fa-edit"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?> 
          </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">Steam Fast</a>.</strong> All rights
    reserved.
  </footer>



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist2/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist2/js/demo.js"></script>
<script type="text/javascript" src="assets/libs/jquery/dist/jquery.min.js"></script>

</body>
</html>