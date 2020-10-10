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
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

<!-- Script -->
<script type="text/javascript">
$(document).ready(function () {

   $("#submit").click(function () {

       fname = $("#fname").val();
       lname = $("#lname").val();
       cname = $("#cname").val();
       email = $("#email").val();
       password = $("#password").val();

       $.ajax({
           type: "POST",
           url: "reg_con.php",
           data: "fname=" + fname + "&lname=" + lname + "&cname=" + cname + "&email=" + email + "&password=" + password,
           success: function (html) {
               if (html == 'true') {

                   $("#add_err2").html('<div class="alert alert-success"> \
                                        <strong>Account</strong> processed. \ \
                                        </div>');

                   window.location.href = "blog.php";

               } else if (html == 'false') {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Email Address</strong> already in system. \ \
                                        </div>');                    

               } else if (html == 'fname') {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>First Name</strong> is required. \ \
                                        </div>');
                                        
               } else if (html == 'lname') {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Last Name</strong> is required. \ \
                                        </div>');
               } else if (html == 'cname') {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>company Name</strong> is required. \ \
                                        </div>');
               } else if (html == 'eshort') {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Email Address</strong> is required. \ \
                                        </div>');

               } else if (html == 'eformat') {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Email Address</strong> format is not valid. \ \
                                        </div>');
                                        
               } else if (html == 'pshort') {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Password</strong> must be at least 4 characters . \ \
                                        </div>');

               } else {
                   $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Error</strong> processing request. Please try again. \ \
                                        </div>');
               }
           },
           beforeSend: function () {
               $("#add_err2").html("loading...");
           }
       });
       return false;
   });
});
</script>
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
<div id="add_err2" style="width:100px; height:50px; float:center;"></div>
<form id="registration-form" class="registration-form">
    <input type="text" class="reg-control" name="fname" id="fname" placeholder="First Name"><br>
    <input type="text" class="reg-control" name="lname" id="lname" placeholder="Last Name"><br>
    <input type="text" class="reg-control" name="cname" id="cname" placeholder="Name of your company"><br>
    <input type="text" class="reg-control" name="email" id="email" placeholder="Company email"><br>
    <input type="password" class="reg-control" name="password" id="password"  placeholder="Enter Password"><br>
    <input type="submit" name="btnsubmit" id="submit" class="reg-control submit" value="REGISTER">
    <!--        <button type="button" class="btn btn-warning">SEND MESSAGE</button>-->
</form>
</div>
</body>
</html>