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
            <li><a href="register.php"><b>Register</b></a></li>
            <li><a href="contact.php"><b>Contact Us</b></a></li>
            <li><a href="#"><b>About</b></a></li>
        </ul>
    </nav>
</header>
<form action="register_control.php" method="POST">
    <label>
        <input type="text" name="x" placeholder="Name" class="form-group" required>
    </label><br>
    <label>
        <input type="email" name="y" placeholder="Email" class="form-group" required>
    </label><br>
    <label>
        <input type="password" name="z" placeholder="Password" required>
    </label><br>
    <label>
        <input type="password" name="b" placeholder="Confirm Password" required>
    </label><br>
    <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
    <input type="reset" name="btnreset" value="Refresh" class="btn btn-primary">
</form>
</body>
</html>