<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/loginstyle.css">
        
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="stylesheet" href="assets/css/main.css" />

    <!-- booststrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="regi.css"> -->
    <!-- bootstrap -->

        <title>Login</title>
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
      <input class="un " type="text" align="center"  placeholder="Email" style="width:85%;">
      <input class="pass" type="password" align="center" placeholder="Password"  style="width:85%;">
      <a class="submit" align="center">log in</a>
      <p class="forgot" align="center"><a href="Regi.php">not sign in?</p>
            
                
    </div> -->
     
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Log in</h3>
                            <div class="form-group">
                                <label for="Email" class="text-info">Email:</label>
                                <input type="text" name="email" id="Email" class="form-control">
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
                                <a href="Regi.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <?php
            include 'connection.php';
            if(isset($_POST['submit']))
            {
                //session_start();

                $email = $_POST['email'];
                $password = $_POST['password'];

                // Query for member
                $query1 = "SELECT * FROM member WHERE mem_email = '$email' AND mem_pass = '$password'";
                $result1 = mysqli_query($con, $query1);
                $row1 = mysqli_fetch_array($result1);

                // Query for admin
                $query2 = "SELECT * FROM admin WHERE email = '$email' AND pass = '$password'";
                $result2 = mysqli_query($con, $query2);
                $row2 = mysqli_fetch_array($result2);

                if(mysqli_num_rows($result1) == 1)
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['member_status'] = "loged in";
                    header("location:member/member.php");
                }
                if(mysqli_num_rows($result2) == 1)
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['admin_status'] = "loged in";
                    header("location:admin/admin.php");
                }
                
            }
            
        ?>

        

    <?php
        include 'footer.php' ;
    ?>
    
    <script src="vendor/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    </body>
    
</html>