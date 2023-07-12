<?php
include_once "connection.php";

$query = "select * from properties";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Beay Real Estate Agent</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
  <link rel="shortcut icon" href="images/favicon.ico" />

<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<!--favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png"/>
 <link rel="shortcut icon" href="images/favicon.ico"/>
<!--favicon-->

<script src='assets/google_analytics_auto.js'></script></head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->
<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="images/logo.png" width="150px" height="150px" alt="Realestate"></a>

            <div class="menu">
              <ul class="pull-right">
              	<li><a href="index.php">Home</a></li>
                <li><a href="list-properties.php">Viwanja Vilivyopo</a>
                	<!--  <ul class="dropdown">
                    	<li><a href="sale.php">Properties on Sale</a></li>
                        <li><a href="rent.php">Properties on Rent</a></li>
                    </ul> -->
                </li>
                
              </ul>
           </div>
</div>
<!-- #Header Starts -->
</div> <div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Tunauza na kununua viwanja</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Dodoma,Tanzania</p>
              <p>Bei zetu ni nafuu na unaruhusiwa kilipa kwa awamu kwa kipindi cha miezi sita(6)</p>
              <cite>Makazi: 5000/= Per Square Meter</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Tunauza na kununua viwanja</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Dodoma,Tanzania</p>
              <p>Bei zetu ni nafuu na unaruhusiwa kilipa kwa awamu kwa kipindi cha miezi sita(6)</p>
              <cite>Makazi & Biashara: 6000/= Per Square Meter</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">Tunauza na kununua viwanja</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Dodoma,Tanzania</p>
              <p>Bei zetu ni nafuu na unaruhusiwa kilipa kwa awamu kwa kipindi cha miezi sita(6)</p>
              <cite>Biashara: 7000/= Per Square Meter</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
             <h2><a href="#">Tunauza na kununua viwanja</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Dodoma,Tanzania</p>
              <p>Maeneo ambapo viwanja vipo</p>
              <cite>Dodoma: Makamala | Nala | Mahoma Makulu | Kitelela | Chahwa | Ipala</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
             <h2><a href="#">Tunauza na kununua viwanja</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Dodoma,Tanzania</p>
              <p>Maeneo ambapo viwanja vipo</p>
              <cite>Pwani: Bagamoyo</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>

<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Tafuta Kiwanja</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <form action="search.php" method="post">
          <!-- <input name="search" type="text" class="form-control" placeholder="Tafuta kiwanja"> -->
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select name="delivery_type" class="form-control">
                <option>Mkoa</option>
                <option value="Rent">Dodoma</option>
                <option value="Sale">Pwani</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
             <select name="search_price" class="form-control">
                <option>Eneo</option>
                <option value="1">Makamala </option>
                <option value="2">Nala</option>
                <option value="3">Mahoma Makulu</option>
                <option value="4">Kitelela</option>
                <option value="5">Chahwa</option>
                <option value="6">Ipala</option>
                <option value="7">Bagamoyo</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
           <select name="property_type" class="form-control">
                <option>Aina Ya Kiwanja</option>
                <option value="Apartment">Makazi</option>
                <option value="Building">Makazi Na Biashara</option>
                <option value="Office-Space">Biashara</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button name="submit" class="btn btn-success"  onclick="window.location.href='buysalerent.html'">Tafuta</button>
              </form> 
              </div>
          </div>  
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Jiunge nasi kupata taarifa kuhusu viwanja vipya.
          <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Login</button>      </p>  </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="pull-right viewall">Viwanja Vyote</a>
    <h2>Viwanja Vyetu</h2>
    <div id="owl-example" class="owl-carousel">
      
     
      
      <?php 
	  	while($property_result = mysqli_fetch_assoc($result)){
			$id = $property_result['property_id'];
			$property_title = $property_result['property_title'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availablility'];
			$price = $property_result['price'];
			$property_img = $property_result['property_img'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
			$kitchen = $property_result['kitchen'];
			$utility = $property_result['utility'];
		
	  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
          <?php if($availablility == 0){ ?><div class="status sold">Available</div> <?php } else { ?>
          <div class="status new">Not Available</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
        <p class="price">Price: <?php echo $price; ?>Tshs</p>
        <p class="price">Delivery Type: <?php echo $delivery_type; ?></p>
        <p class="price">Utilities: <?php echo $utility; ?></p>
        <div class="listing-detail">
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Mbele"><?php echo $bed_room; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Nyuma"><?php echo $liv_room; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kulia"><?php echo $parking; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kushoto"><?php echo $kitchen; ?></span> 
        </div>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
      </div>
      
      <?php } ?>
      
    </div>
  </div>
</div>



<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Taarifa</h4>
                    <p>Kupata taarifa zaidi kwa njia ya Email.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                  <!--   <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a> -->
                    <a href="https://www.instagram.com/beay_realestate_agent/"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                        <p><b>Beay Real Estate Agent</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Mahoma,near Goverment City,Dodoma <br>
<span class="glyphicon glyphicon-envelope"></span> beayrealestateagent@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> +255654306355 | +25553849536</p>
            </div>
        </div>
        <hr style="opacity: 0.1; border-color: gray;">
<p class="copyright">Copyright &copy 2022.Beay Real Estate Agent.All rights reserved | Developed By Meshapps</p>
</div>
</div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.html'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>


</html>



