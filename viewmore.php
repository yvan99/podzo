<?php

include('connection/konnect.php');

?>

<?php $get_id = $_GET['id']; 

$date=date("d/m/Y");

$select=mysqli_query($conn,"select * from resto where re_id='$get_id'");
//,menu where resto.re_id=menu.re_id and resto.re_id='$get_id'
$fetch=mysqli_fetch_array($select);

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

   <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>PODZO</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="elegant_font/style.css" />
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="elegant_font/style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Header End -->

    <header >
        <!-- Navigation Menu start-->

	<nav id="topNav" class="navbar navbar-default main-menu" style="background-color: #fff;color: #fff;border-bottom: 4px solid #ff6000;">

    <div class="container">
        <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            ☰
        </button>

        <div class="collapse navbar-toggleable-sm" id="collapsingNavbar">
            <ul class="nav navbar-nav">
                <li>
                <a href=""><img class="logo" id="logo" src="images/podzo.png" alt="logo"></a></li>

                 <li class="active">
                            <a href="#slider">Home</a>
                        </li>
                        <li>
                            <a href="#about">Restaurants</a>
                        </li>
						 <li>
                            <a href="#services">Contact Us</a>
                        </li>
                        <li>
                            <a href="">|</a>
                        </li> 
						 <li>
                            <a href="#menuCard">Sign Up</a>
                        </li>
                        <li>
    <button class="btn btn warning" style="background-color: #ff6000;"><a style="color:#fff;" href="login.php">Login</a></button>
                        </li>
                      
            </ul>
        </div>
    </div>
</nav>


    </header>


    <!-- Header End -->




   
    <section id="services" class="section-wrapper">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text"><?php echo $fetch['re_name'];?></span></h2>

        <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">See Restaurant Menu</p>
                </div>
                <!-- Section Header End -->

                <div class="our-services">


		 <div class="row">


                    <?php

    $query = mysqli_query($conn,"select * from resto,menu where resto.re_id=menu.re_id and resto.re_id='$get_id'")or die(mysqli_error());

    while($row = mysqli_fetch_array($query)){

        $id = $row['me_id'];
    ?>

    <div class="col-md-3 col-sm-3 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">

						<div class="service-box">
                           
							<img src="images/food.png" alt="Custom Image">

                             <div class="icon">
                              <h3>

    <a style="color: #fff;" href="viewmore.php<?php echo '?id='.$id; ?>"><?php echo $row['me_name'];?></a></h3>

                            <p>Taking Time: <?php echo $row['me_take'];?></p>

                            <p>Menu Price : <?php echo $row['me_price'];?></p>

                            </div>

							</div>
</div>
<?php }?>

 

 



                    </div>




                </div>

            </div>
        </div>
    </section>


    <!-- Contact Section End -->
    <section class="footer-container" style="background-color: #000;">
        <div class="container">
            <div class="row footer-containertent">

                <div class="col-md-4">

                    <h4>Contact Us</h4>

                    <ul>
                            <li><i class="fa fa-home"></i>Kigali , Rwanda</li>
                            <li><i class="fa fa-phone"></i>078 216 88 46</li>
                            <li><i class="fa fa-envelope-o"></i>Ishimweyvan90@gmail.com</li>
                        </ul><br>

                          <ul class="footer-social-info">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    
                </div>
              
                <div class="col-md-4 contac-us">

    <form method="post" id="contactForm" >

    <div class="col-md-6">

<input type="text" class="form-control" placeholder="Name" required>
    
</div>

         <div class="col-md-6">
<input type="email" class="form-control" placeholder="Email" id="email" required><br>
        </div> 

        <div class="col-md-12">

        <textarea rows="10" cols="100" class="form-control"
        placeholder="Message" id="message" required style="resize:none"></textarea>
        </div>

        <div class="col-md-8 col-md-offset-2"><br><div id="success"> </div><button type="submit" class="btn btn-primary">Submit</button></div>
        </form>
                </div>
            </div>
        </div>
    </section>


    <footer>

        <div class="container">
            <div class="row">
                <div class="footer-containertent">

                     <div class="col-md-4">
                    <p>Challenge By Awesomity Ltd</p>
                </div>

                 <div class="col-md-4">
                  
                </div>

                <div class="col-md-4 contac-us">
                  
                    <p style="color: #ff6000;">Developed By Ishimwe Yvan</p>
                 
                </div>



                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from webthemez.com/demo/italy-best-restaurant-website-template-free/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2020 07:30:26 GMT -->
</html>
