<?php
        
            if ($_POST)
            {
                $username=$_POST['username'];
                $pass=$_POST['password'];
                if($username=="admin" && $pass=="admin")
                {
                    header('location:create.php');
                }
                else
                {
                    echo '<span> Incorrect username or password!</span>';
                }
            }

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>CNG INDIA</title>
    <link rel="stylesheet" href='css/main.css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
</style>
    <title>Login</title>
</head>
<body>

			<header id="header">
				<nav class="left">
					<a href="#menu" style="color:blue "><span>Menu</span></a>
				</nav><div class="logodiv">
				<img class="logo" src='images/OG_logo_png.png'></div>
				
			</header>
			<nav id="menu">
				<ul class="links">
					<li><a href='index.php'>Home</a></li>
					<li><a href='viewCertificate.php'> View Certificate</a></li>
				</ul>
				
			</nav>
		


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ENTER YOUR USERNAME PASSWORD</div>
                    <div class="card-body">
       
                        <form action="login.php" method="POST">
                           
                            <div class="form-group row">
                                <label for="USERNAME" class="col-md-4 col-form-label text-md-right">USERNAME</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                         

                            <div class="col-md-6 offset-md-4">
                            <input type="submit" class="button" value="Login" name="submit">

                            </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

</main>

</body>
</html>