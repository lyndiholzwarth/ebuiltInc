<?php

$email = $_POST['email1'];
$name = $_POST['name1'];
$phone = $_POST['phone1'];
$message = $_POST['message1'];
$to = "e_czekner@hotmail.com";
$from = $_POST['email1'];
$subject = "New Ebuilt contact message";


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Javascript main-->
  <script src="http://code.jquery.com/jquery.min.js"></script>
  <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  <!---CSS reset-->
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <!--coded CSS and javascript-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/app.js"></script>
  <!--fontawesome-->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!--picturefill patch-->
  <script>
      // Picture element HTML5 shiv
      document.createElement( "picture" );
    </script>
    <script src="js/picturefill.min.js" async></script>
    <script>document.createElement('footer');</script>
    <!--map image-->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUzdJdFshDqzEXTtEMW9fBfGGiZUXrYr8">
    </script>
  <title>EbuiltInc - Contact Us</title>
</head>

<body>
<div class="wrapper">

<nav class="navbar navbar-fixed-top navBar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img class="logo" src="images/EBuilt_Logo_Sign-trans-white.png" alt="EBuilt Inc Logo"></a> 
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li class="leftBorderNav"><a href="services.html">SERVICES</a></li>
        <li class="leftBorderNav"><a href="projects.html">PROJECTS</a></li>
        <li class="leftBorderNav"><a href="company.php">COMPANY</a></li>
      </ul>
    </div>
  </div>
</nav>

<main>
<div class="container-fluid">
<!-- static header image ================================================== -->
<div class="row">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="images/header-img-cropped.jpg" alt=" ">
      </div>
    </div>
  </div>
</div><!-- /header img -->

<div class="row">
	<div class="text-body">
		<h1 class="title">Our Company</h1>
        <div class="indent">
          <div class="companyInfo col-sm-6">
                <ul>
                    <li>
                        <i class="fa fa-map-marker fa-3x circle"></i>
                        <p  class="info">1247 E Columbia Ave<br> Phila, PA 19125</p>
                    </li>
                    <li>
                        <i class="fa fa-mobile fa-3x circle"></i>
                        <p class="info">215-925-5559</p>
                    </li>
                    <li>
                        <i class="fa fa-fax fa-2x circle"></i>
                        <p class="info">215-261-6073</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6" id="map-canvas">>
    		    </div>
        </div>
    </div>
</div>


   <?PHP
 if(isset($_POST['emailSubmit'])) {
	 
	$headers = $_POST['email'];
	$to = "e_czekner@hotmail.com";
	$subject = "You have a new contact form submission";
	$msg = "You have a new message from $name. \n 
		$message \n
		$name's email is $email \n
		and the phone number is $phone ";
			
// send email
mail($to, $subject, $msg, $headers);

	 
	 
	 

  echo '<div class="row">
    <div class="text-body">
        <h1 class="title">Thank You!</h1>
        <div class="indent">
 			<div class="thankYou">Thank you for you message, '.$name.'. We will be in touch shortly!<br>
			</div>
 		</div>
 	</div>
 </div>';}
 
 else{
	echo '<div class="row">
    <div class="text-body">
        <h1 class="title">Contact Us</h1>
        <div class="indent">

            <form method="post" name="myemailform" action="">
              <div class="form-group">
                <label class="sr-only" for="name1">Name</label>
                <input type="name" class="form-control" id="name1" name="name1" placeholder="Name">
              </div>
              <div class="form-group">
                <label class="sr-only" for="phone1">Phone</label>
                <input type="phone" class="form-control" id="phone1" name="phone1" placeholder="Phone">
              </div>
              <div class="form-group">
                <label class="sr-only" for="email1">Email</label>
                <input type="email" class="form-control" id="email1" name="email1" placeholder="Email">
              </div>
              <div class="form-group">
                <label class="sr-only" for="message1">Message</label>
               <textarea class="form-control" rows="3" id="message1" name="message1" placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="emailSubmit" id="emailSubmit">Submit</button>
            </form>
			
        </div>
    </div>  
</div>';}
 ?>

</div> 




</main>

<div class="row">
<footer>
  <ul class="icons">
    <li class="facebook">
      <a href="http://www.facebook.com/ebuiltinc" target="_blank"><i class="fa fa-facebook fa-2x">
      </i></a>
    </li>
  </ul>

  <p class="footText">© 2015 EbuiltInc</p>
  <p class="footText">1247 E Columbia Ave Phila, PA 19125</p>
  <p class="footText">215-925-5559</p>
  <p class="footText"><a href="mailto:info@ebuiltinc.com">info@ebuiltinc.com<a></p>

</footer>
</div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</div>
</body>


</html>