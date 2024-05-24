<?php

session_start();

if (isset($_POST['submit'])){
$server ="localhost";
$username ="root";
$password = "";
$dbname = "wt";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn){
    echo "Connected Successfully";
}

$email = $_POST['email'];
$password = $_POST['password'];

$insert ="INSERT INTO `logindata` (`email`, `password`) VALUES ('$email', '$password');";
$query = mysqli_query($conn,$insert);

if($query){
    echo "Inserted Successfully";
}else{
    echo "Not Inserted, You have an Account Already ";
}
}

// Assuming login is successful
$_SESSION['user_authenticated'] = true;

// Redirect back to Index.html
header("Location: ../src/index.php");
exit();
?>
