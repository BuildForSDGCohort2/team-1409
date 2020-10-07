<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Gas</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="styles.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<header>
    <h1>SAFE<span>GAS</span></h1>
    <nav>
        <ul>
            <li><a href="index.html"><b>Home</b></a></li>
            <li><a href="contact.html"><b>Contact Us</b></a></li>
            <li><a href="login.html"><b>Log In</b></a></li>
        </ul>
    </nav>
</header>
<body>
<div>
    <h1 class="kichwa">Fill In Your Details</h1>
</div>
<div class="contact-title">
    <h2>Click The Register Button Once You;re Done</h2>

</div>
<div class="registration-form">
<form id="registration-form" class="registration-form" method="POST" action="reg_con.php">
    <input type="text" class="reg-control" name="fname" placeholder="First Name" required><br>
    <input type="text" class="reg-control" name="lname" placeholder="Last Name" required><br>
    <input type="text" class="reg-control" name="cname" placeholder="Name of your company" required><br>
    <input type="text" class="reg-control" name="email" placeholder="Company email" required><br>
    <input type="password" class="reg-control" name="passworda" placeholder="Enter Password" required><br>
    <input type="password" class="reg-control" name="passwordb" placeholder="Confirm Password" required><br>
    <input type="submit" class="reg-control submit" value="REGISTER">
    <!--        <button type="button" class="btn btn-warning">SEND MESSAGE</button>-->
    </div>
</form>
</body>
</html>