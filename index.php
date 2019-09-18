<?php
	require_once 'connection.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CNG INDIA</title>
		<meta charset="utf-8" />
			<link rel="stylesheet" href='css/main.css' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src='js/jquery.min.js'></script>
			<script src='js/jquery.scrolly.min.js'></script>
			<script src='js/skel.min.js'></script>
			<script src='js/util.js'></script>
			<script src='js/main.js'></script>
		<style type="text/css">
		.carousel-inner img {
     		 width: 100%;
			  height: 100%;
		}
			.carousel-item {
				height: 100vh;
				min-height: 350px;
				background: no-repeat center center scroll;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				}
				h2{
					color: greenyellow;
					margin-top: 1rem;
				}
				p{
					font-family: "Open Sans", Arial, sans-serif;
				    font-weight: 400;
				    font-size: 16px;
				    line-height: 1.7;
				    color: #828282;

}

		</style>
	</head>
	<body>
		<!-- <header id="header"> -->
		<nav class="navbar navbar-expand-md navbar-light bg-light">
    		<div class="container-fluid">
				
					<a href="#menu" style="color:blue" ><span>&#9776;</span></a>
				
					<img class="logo" src='images/OG_logo_png.png' width="130",height="130" style="align-items: center;"></a>
				
					<a href='login.php' class="button alt">Create Certificate</a>
				
			</div>
		</nav>
		<!-- </header> -->
			<nav id="menu">
				<ul class="links">
					<li><a href='index.php'>Home</a></li>
					<li><a href='viewCertificate.php'>View Certificate</a></li>
					
				</ul>
				
			</nav>
				<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" > <img src='images/1.png'>
        
      </div>
      <div class="carousel-item" >
		<img src='images/2.png'>
      </div>
      <div class="carousel-item" >
		<img src='images/3.png'>
      </div>
      <div class="carousel-item" >
        <img src='images/4.png'>
      </div>
      <div class="carousel-item" >
        <img src='images/5.png'>
      </div>
      <div class="carousel-item" >
        <img src='images/7.png'>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
			

			
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                                    <h2 class="light-red">What is CNG Testing</h2>
                    <p class="medium">
                        <strong class="green large">CNG</strong> stands for <strong>Compressed Natural Gas</strong>. It is a fuel with a mixture of hydrocarbons, mainly methane in the range of 95%. Due to its low density, it is compressed to a pressure of 200 bar to enhance the vehicle on-board storage capacity. The properties of CNG make it a safe fuel. It is lighter than air, so in case of a leak it just rises up and disperses into the atmosphere. There are over 3 million vehicles run on CNG which proves the fact.
                    </p>
                    <p class="medium">
                        CNG cylinders are designed and built in such a way so as to withstand high pressure. CNG cylinders are safe as they are manufactured as per specific requirements and tested before use, in accordance with international specifications and standards and they are duly approved by Chief Controller of Explosives. Moreover, these have been provided with a 'safety burst disc' such that in case of inadvertent high-pressure/high temperature at the time of filling or at any other time, this disc is ruptured and pressure released.
                    </p>
                    <p class="medium">
                        CNG cylinders are manufactured from a special steel alloy and are seamless in construction. Their compact size allows them to easily fit into a small vehicle. As per Indian Standard 8451, Gas Cylinder Rules & CCOE guidelines , CNG cylinder re-testing is required on interval of every 3 years from cylinder manufacturing date or last re-testing date to ensure 100 % safety of CNG cylinder usage.
                    </p>
                </div>
            </div>
        </div>
			

			<section id="two" class="wrapper style1" style="background: cyan">
				<div class="inner">
					<h2>What We Do</h2>
					<figure>
					    <p>
					        This is a platform for all Government approved Cylinder Testing Company and CNG Retro Fitment Centers who are authorised for CNG Cylinder Hydro Testing. This platform will facilitate the task of Certification generation & printing, QR code generation for checking by CNG stations & other government authorities.</p>
					</figure>
				</div>
			</section>

			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="content">
							<h3>On the Cloud</h3>
							<p>This is an online platform; thus can be accessed from any place and on any device.</p>
						</div>
					</div>
					<div class="flex-item box">

						<div class="content">
							<h3>Certificate generation</h3>
							<p>Generate testing certificate with minimum effort and efficient error free way.</p>
						</div>
					</div>
					<div class="flex-item box">
						
						<div class="content">
							<h3>QR Code</h3>
							<p>Generate and print QR code on sticker or compliance plate for viewing certificate on scanning.</p>
						</div>
					</div>
					

				</div>
			</section>

	
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="tel:9892064026"></a>(+91)9892064026</a></li>
						<li><span class="icon fa-phone"></span> <a href="tel:9702290776">(+91)9702290776</a></li><a href="mailto:kwkcng@gmail.com?Subject='ENQUIRY'" target="_top"x>kwkcng@gmail.com</a></li>
						
						<div class="container"><li><span class="icon fa-map-marker"></span>Survey No.104/6,Thakur pada Road,Opposite Irani Masjid ,
							Dhaisar naka,Mumbra Panvel Road,
						 District-Thane-400612,Maharashtra</li>
				</div>
				<div class="copyright">
					&copy; 2019 CNG. All Rights Reserved.<a href="#">CNG INDIA</a><br>
					Developed By: Azamali, Ayan, Zeeshan
				</div>
			</footer>
		
	</body>
</html>