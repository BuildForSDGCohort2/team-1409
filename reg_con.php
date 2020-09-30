<?php /** @noinspection SpellCheckingInspection **/

session_start();
$conn = mysqli_connect("localhost","root","","safegas");
if (isset($_POST['btnsubmit'])){
    $name = ($_POST['x']);
    $email = ($_POST['y']);
    $password = ($_POST['z']);
    $password2 = ($_POST['b']);


// check all the fields are been filled
    if ($name=="" || $email=="" || $password=="" ||$password2==""){
        echo '<script>alert("please input all fields")</script>';
    }
    // check if passwords matches
    if ($password == $password2){
        //then encrypt
        $encpassword = sha1(md5($password));
    }else{
        echo '<script>alert("passwords do not match")</script>';
    }

    if (!$conn){
        echo "failed to connect";
    }else{
        $insert_query = "INSERT INTO registeruser(`id`, `name`, `email`, `password`) VALUES (null,'$name','$email','$encpassword')";
        $insert = mysqli_query($conn,$insert_query);
        if (!$insert){
            echo '<script>alert("failed to save1")</script>';
        }else{
            echo '<script>alert("saved succesfully")</script>';
//            echo "$name saved succesfully";
//            header("location:register.php");
        }
    }
}

?>
