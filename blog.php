<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
body {
    width: 550px;
    font-family: Arial;
}

#frm-qr {
    display: block;
    height: 100%;
    width: 200%;
    padding: 20px 40px;
    background: #CCC;
    border-radius: 3px;
}

.input-field {
    align-items: center;
    padding: 10px;
    border: 0px;
    border-radius: 3px;
    width: 250px;
    height: 50px;
}

.submit-button {
    background: #333;
    color: #FFF;
    padding: 10px 20px;
    border-radius: 3px;
}

.form-row {
    margin-bottom: 15px;
}

.result-heading {
    padding: 10px 0px 2px 0px;
    border-bottom: #333 1px solid;
    margin-bottom: 20px;
}

#validation-info {
    display: none;
    padding: 10px 20px;
    background: #f5c7c8;
    border: #e6bbbd 1px solid;
}
</style>
</head>
<body>
<div class="col-lg-12">

<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>

</div>

<form method="post" name="frmQRGenerator" id="frm-qr" action="rand.php">
           Enetr 6 Kgs: <input type="number" name="number_field"id="number_field" class="input-field" />
           Enter 13 Kgs: <input type="number" name="number_fieldone"id="number_fieldone" class="input-field" />
           Enter 22.5 Kgs: <input type="number" name="number_fieldtwo"id="number_fieldtwo" class="input-field" />
           Enter 50 Kgs: <input type="number" name="number_fieldthree"id="number_fieldthree" class="input-field" />
        </div>

        <div>
            <input type="submit" name="generate" class="submit-button"
                value="Generate QR Code" />
        </div>
    </form>  
    
    <div id="validation-info"></div>
    <script src="jquery-3.2.1.min.js"></script>
    <script>
function validate() {

	var valid = true;
    var emailRegexp = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i
	    
    $("#validation-info").hide();
	$("#validation-info").html();
    if($("#email_field").val() == "") {
        	$("#validation-info").show();
        	$("#validation-info").html("Email is required.");
        	valid = false;
    } else if ( !( emailRegexp.test( $("#email_field").val() ) ) ) {
        $("#validation-info").show();
        $("#validation-info").html("Invalid Email.");
        valid = false;
    }


    return valid;
}
</script>




<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
header("location:login.php ");
}
?>