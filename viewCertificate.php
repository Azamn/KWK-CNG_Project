<?php
	require_once 'connection.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CNG INDIA</title>
		<link rel="stylesheet" href='css/main.css' />
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
				}
							table {
									width:100%;
									}
									table, th, td {
									border: 1px solid black;
									border-collapse: collapse;
									}
									th, td {
									padding: 15px;
									text-align: left;
									}
									table#t01 tr:nth-child(even) {
									background-color: #eee;
									}
									table#t01 tr:nth-child(odd) {
									background-color: #fff;
									}
									table#t01 th {
									background-color: black;
									color: white;
									}
	

		</style>
	</head>
	<body>
			<header id="header">
				<nav class="left">
					<a href="#menu" style="color:blue"><span>&#9776;open</span></a>
				</nav>
				<img class="logo" src='images/OG_logo_png.png'></a>
				<nav class="right">
					<a href='login.php' class="button alt">Create Certificate</a>
				</nav>
			
			<nav id="menu">
				<ul class="links">
					<li><a href='index.php'>Home</a></li>
					<li><a href='viewCertificate.php'>View Certificate</a></li>
				</ul>
				
			</nav>
			
</header>
  <main>
	<div class="s01" >
		
      <form method="POST" action="searchDetails.php" >
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="ENTER YOUR VEHICLE NO" name="Searches"/>
          </div>
        
          <div class=" third-wrap">
            <input type="submit" name="search" value="SEARCH">
		  </div>
		  
		<div>	 
        </div>
	  </form>
    </div>
	</main>
	<!-- <div>
		<div>
			
			<table style="width:100%">
					
					<tr>
					  <th>Vahicle Name</th>
					  <th>Vahicle Number</th>
					  <th>Cylinder Weight</th>
					</tr>
					{% for cng in cngmodel %}
					{% if cng.vahicle_no == title %}
					<tr>
					  <td>{{cng.vahicle_name}}</td>
					  <td>{{cng.vahicle_no}}</td>
					  <td>{{cng.cylinder_weight}}</td>
					</tr>
					{% endif %}
					{% endfor %}
				  </table>
				  
		</div>
	</div> -->
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
					&copy; 2019 CNG. All Rights Reserved.<a href="#">CNG INDIA</a>
				</div>
			</footer>
		
		
	</body>
</html>