<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Gas</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="styles.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<header>
    <h1>SAFE<span>GAS</span></h1>
    <nav>
        <ul>
            <li><a href="index.html"><b>Home</b></a></li>
            <li><a href="login.html"><b>Register</b></a></li>
            <li><a href="contact.html"><b>Contact Us</b></a></li>
            <li><a href="about.html"><b>About</b></a></li>
        </ul>
    </nav>
</header>
<form action="reg_con.php" method="POST">
    <label>
        <input type="text" name="x" placeholder="Name" class="form-group" >
    </label><br>
    <label>
        <input type="email" name="y" placeholder="Email" class="form-group" >
    </label><br>
    <label>
        <input type="password" name="z" placeholder="Password" >
    </label><br>
    <label>
        <input type="password" name="b" placeholder="Confirm Password" >
    </label><br>
    <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
</form>
</body>
</html>