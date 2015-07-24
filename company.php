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
<html lang="eg">
<head>
	<meta charset="UTF-8">
	<!--Javascript main-->
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<!--Bootstrap-->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!---reset-->
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

<body class="container-fluid">

<nav>
	<div class="row nav">
		<ul class="navBar">
	    <li><a href="index.html">HOME</a></li>
      <li class="leftBorderNav"><a href="services.html">SERVICES</a></li>
      <li class="leftBorderNav"><a href="projects.html">PROJECTS</a></li>
      <li class="leftBorderNav"><a href="company.php">COMPANY</a></li>
    </ul>
	</div>
</nav>

<main>
<div class="row">
	<figure class="headerImage">
		<img src="images/Header-1600px.jpg" 
			srcset="images/Header-1600px.jpg 1600w, images/Header-1200.jpg 1200w, images/Header-800px.jpg 800w, images/Header-600px.jpg 600w"
			alt="" />
	</figure>

</div>

<div class="row">
	<div class="text-body">
		<h1 class="title">Our Company</h1>
        <div class="indent">
          <div class="companyInfo col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-map-marker fa-3x"></i>
                        <p  class="info">1247 E Columbia Ave<br> Phila, PA 19125</p>
                    </li>
                    <li>
                        <i class="fa fa-mobile fa-3x"></i>
                        <p class="info">215-925-5559</p>
                    </li>
                    <li>
                        <i class="fa fa-fax fa-2x"></i>
                        <p class="info">215-261-6073</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6" id="map-canvas">>
    		    </div>
        </div>
    </div>
</div>
 <?PHP
 if(isset($_POST['emailSubmit'])) {
	 
	 $headers = $_POST['email'];

$msg = "You have a new message from $name. \n 
		$message \n
		$name's email is $email \n
		and the phone number is $phone ";
			
// send email
mail($to, $subject, $msg, $headers);

	 
	 
	 
 echo '
 <div class="row">
    <div class="text-body">
        <h1 class="title">Thank You!</h1>
        <div class="indent">
 			<div class="thankYou">Thank you for you message, '.$name.'. We will be in touch shortly!<br>
			The below is for testing:<br>
			'.$email.'<br>
			'.$phone.'<br>
			'.$message.'<br>
			</div>
 		</div>
 	</div>
 </div>';
 
 }
 
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
</div> ';
	 
 }
 ?>
        
</main>

<div class="row">
<footer>
	<ul class="icons">
		<li class="facebook">
			<i class="fa fa-facebook fa-2x">
			</i>
		</li>
		<li class="twitter">
			<i class="fa fa-twitter fa-2x">
			</i>
		</li>
	</ul>

	<p class="footText">© 2015 EbuiltInc</p>
	<p class="footText">1247 E Columbia Ave Phila, PA 19125</p>
	<p class="footText">215-925-5559</p>
	<p class="footText"><a href="mailto:JMaransky@EBuiltInc.com">JMaransky@EBuiltInc.com<a></p>

</footer>
</div>
</body>


</html>