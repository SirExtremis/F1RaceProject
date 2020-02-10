<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration for F1 Racing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="MDB Free/css/bootstrap.min.css" rel="stylesheet">
  <link href="MDB Free/css/mdb.min.css" rel="stylesheet">
</head>
<body style="font-family: 'Josefin Sans', sans-serif;">
  <!-- NAVIGATION BAR AND HEADER BEGINS-->
	<div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <a class="navbar-brand" href="F1 home.html">F1 POST</a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="F1%20home.html">HOME&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="F1%20about.html">ABOUT&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="F1%20race%20timetable.html">RACE TIMETABLE&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="F1%20constructors.html">CONSTRUCTORS&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="F1%20drivers.html">DRIVERS&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="F1%20standings.html">STANDINGS</a>
                        </li>
                    </ul>
										<ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/project/register.php">REGISTER&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/project/login.php">SIGN IN&nbsp;</a>
                        </li>
                    </ul>
                </nav>
                <header>
                    <br>
                    <h1>Become a Fan today!</h1><hr>
                </header>
            </div>
        </div>
        <!-- NAVIGATION BAR AND HEADER ENDS-->
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>

 