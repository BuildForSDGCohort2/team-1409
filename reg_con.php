<?php /** @noinspection SpellCheckingInspection **/

session_start();

if (isset($_POST['btnsubmit'])){

    $name = ($_POST['x']);
    $email = ($_POST['y']);
    $password = ($_POST['z']);
    $encpassword = md5($password);


    $conn = mysqli_connect("localhost","root","","safegas");

    if (!$conn){
        echo "failed to connect";
    }else{
        $insert_query = "INSERT INTO `registeruser`(`id`, `name`, `email`, `password`) VALUES (null,'$name','$email','$encpassword')";
        $insert = mysqli_query($conn,$insert_query);
        if (!$insert){
            echo "failed to save1";
        }else{
            echo "$name saved succesfully";
            header("location:register.php");
        }
    }
}

?>
