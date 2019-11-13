<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="regityle.css">
        
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- ENAN -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="regi.css"> -->
    <!-- ENAN -->

    <title>Registration</title>
</head>
<body>
    <!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Fitness Studio</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="Regi.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
				</ul>
			</nav>
  <!-- <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1">
      <input class="un " type="text" align="center"  placeholder="Name" style = "width : 85%;">
      <input class="un " type="text" align="center"  placeholder="Email">
      <input class="un " type="number" align="center"  placeholder="Mobile" >
      <input class="un " type="number" align="center"  placeholder="Age" >
      <input class="un " type="number" align="center"  placeholder="Weight" >
      <input class="un " type="number" align="center"  placeholder="Height" >
      <input class="pass" type="password" align="center" placeholder="Password">
      <input class="pass" type="password" align="center" placeholder="Re-enter Password">

      <a class="submit" align="center">log in</a>
      <p class="forgot" align="center"><a href="#">not sign in?</p>
            
                
    </div> -->

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Registration</h3>
                            <div class="form-group">
                                <label for="Username" class="text-info">Name:</label>
                                <input type="text" name="Username" id="Username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Email" class="text-info">Email:</label>
                                <input type="email" name="Email" id="Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Mobile" class="text-info">Mobile:</label>
                                <input type="tel" name="Mobile" id="Mobile" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Age" class="text-info">Age:</label>
                                <input type="number" name="Age" id="Age" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Weight" class="text-info">Weight (in kg):</label>
                                <input type="number" name="Weight" id="Weight" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Height" class="text-info">Height (in cm):</label>
                                <input type="number" name="Height" id="Height" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     
</body>




    
<?php
        include('footer.php');
    ?>
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	$name = $_POST['Username'];
	$email = $_POST['Email'];
    $mobile = $_POST['Mobile'];
	$age = $_POST['Age'];
	$weight = $_POST['Weight'];
    $height = $_POST['Height'];
    $password = $_POST['password'];
    $query = "INSERT INTO `member` (`mem_name`,`mem_email`,`mem_mobile`,`mem_age`,`mem_weight`,`mem_height`,`mem_pass`)
            values('$name','$email','$mobile',$age,$weight,$height,'$password')";
     mysqli_query($con, $query);
    // $_SESSION['name'] = $name;
    // $_SESSION['email'] = $email;
    // $_SESSION['mobile'] = $mobile;
    // $_SESSION['loc'] = $loc;
    // $_SESSION['gender'] = $gender;
    // $_SESSION['dob'] = $dob;
    // $_SESSION['success'] = "congrats";
   // header('location: index.php');
}
?>