<?php /** @noinspection SpellCheckingInspection **/

session_start();

if (isset($_POST['x'])){
    $name = $_POST['x'];
    $email = $_POST['y'];
    $password = $_POST['z'];
    $encpassword = md5($password);


    $conn = mysqli_connect("localhost","root","","safegas");
    if (!$conn){
        echo "failed to connect";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `registeruser`(`id`, `name`, `email`, `password`) VALUES ('null','$name','$email','$encpassword')");
        if (!$insert){
            echo "failed to save1";
        }else{
            echo "$name saved succesfully";
            header("location:register.php");
        }
    }
}

?>
