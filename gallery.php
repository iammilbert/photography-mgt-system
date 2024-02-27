

<?php include('header.php'); ?>

<?php include('db_connect.php'); ?>

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
                        <li><a class="active" href="gallery.php">Gallery</a></li>
                        <li><a href="signup.php">Sign up</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


 
        <div id="portfolio">
        <div class="container">
            <div class="section-title text-center">
                        <hr class="invis">
              <h3>Our Gallery</h3>
            </div><!-- end title -->
        </div><!-- end container -->

        <div class="container-fluid">

            <div id="da-thumbs" class="da-thumbs portfolio">

                <?php
                    $sql = "SELECT * FROM gallery";
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                ?>
  <?php while($gallery_row = mysqli_fetch_assoc($query)): ?>
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="assets/images/gallery/<?php echo $gallery_row['picture'];?>" data-rel="prettyPhoto[gal]">
                        <img src="assets/images/gallery/<?php echo $gallery_row['picture']; ?>" alt="img" class="img-responsive">
                        <div>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                 <?php endwhile; ?>
                <!-- End single gallery image -->
            </div><!-- end portfolio -->
        </div><!-- end container -->
    </div><!-- end section -->
    
	        <hr class="invis">
	<?php include('footer.php'); ?>