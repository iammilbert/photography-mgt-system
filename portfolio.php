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
                        <li><a class="active" href="portfolio.php">Portfolio</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
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
                <h3>Our Portfolio</h3>
            </div><!-- end title -->
        </div><!-- end container -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="portfolio-filter text-center">
                        <ul>
                         
                            <li><a class="btn btn-dark btn-radius btn-brd active" data-toggle="tooltip" data-placement="top" title="Wedding" href="#wedding" data-filter=".cat1">Wedding</a></li>

                            <li><a class="btn btn-dark btn-radius btn-brd" href="#birthday" data-toggle="tooltip" data-placement="top" title="Birthday" data-filter=".cat2">Birthday</a></li>

                            <li><a class="btn btn-dark btn-radius btn-brd" href="#burial" data-toggle="tooltip" data-placement="top" title="Burial" data-filter=".cat3">Burial</a></li>

                            <li><a class="btn btn-dark btn-radius btn-brd" href="#other" data-toggle="tooltip" data-placement="top" title="Nature" data-filter=".cat4">Others</a></li>
                           
                        </ul>


                    <div class="da-thumbs portfolio">

                              <?php


                                $wedding_sql = "SELECT * FROM wedding";

                                $wedding_query = mysqli_query($conn, $wedding_sql) or die(mysqli_error($conn));


   
                                ?>

          <?php while($wedding_row = mysqli_fetch_assoc($wedding_query)): ?>
                <div class="post-media pitem item-w1 item-h1 cat1" id="wedding">
                    <a href="assets/images/wedding/<?php echo $wedding_row['picture']; ?>" data-rel="prettyPhoto[gal]">
                        <img src="assets/images/wedding/<?php echo $wedding_row['picture']; ?>" alt="" class="img-responsive">
                        <div>
                            <h3>Wedding<small>HD Camera</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>


            </div><!-- end portfolio -->




            <div class="da-thumbs portfolio">

                              <?php


                                $birthday_sql = "SELECT * FROM birthday";

                                $birthday_query = mysqli_query($conn, $birthday_sql) or die(mysqli_error($conn));
   
                                ?>

          <?php while($birthday_row = mysqli_fetch_assoc($birthday_query)): ?>
                <div class="post-media pitem item-w1 item-h1 cat2" id="birthday">
                    <a href="assets/images/birthday/<?php echo $birthday_row['picture']; ?>" data-rel="prettyPhoto[gal]">
                        <img src="assets/images/birthday/<?php echo $birthday_row['picture']; ?>" alt="" class="img-responsive">
                        <div>
                            <h3>Birthday<small>HD Camera</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>


            </div><!-- end portfolio -->



            <div class="da-thumbs portfolio">

                              <?php


                                $burial_sql = "SELECT * FROM burial";

                                $burial_query = mysqli_query($conn, $burial_sql) or die(mysqli_error($conn));
   
                                ?>

          <?php while($burial_row = mysqli_fetch_assoc($burial_query)): ?>
                <div class="post-media pitem item-w1 item-h1 cat3" id="burial">
                    <a href="assets/images/burial/<?php echo $burial_row['picture']; ?>" data-rel="prettyPhoto[gal]">
                        <img src="assets/images/burial/<?php echo $burial_row['picture']; ?>" alt="" class="img-responsive">
                        <div>
                            <h3>Burial Ceremony<small>HD Camera</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>


            </div><!-- end portfolio -->



             <div class="da-thumbs portfolio">

                              <?php


                                $other_sql = "SELECT * FROM other";

                                $other_query = mysqli_query($conn, $other_sql) or die(mysqli_error($conn));
   
                                ?>

          <?php while($other_row = mysqli_fetch_assoc($other_query)): ?>
                <div class="post-media pitem item-w1 item-h1 cat4" id="other">
                    <a href="assets/images/other/<?php echo $other_row['picture']; ?>" data-rel="prettyPhoto[gal]">
                        <img src="assets/images/other/<?php echo $other_row['picture']; ?>" alt="" class="img-responsive">
                        <div>
                            <h3>Varities of Views<small>HD Camera</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>


            </div><!-- end portfolio -->


                    </nav>
                </div>
            </div>

            <hr class="invis">

            
        </div><!-- end container -->
    </div><!-- end section -->
            <hr class="invis">
    
    <?php include('footer.php'); ?>