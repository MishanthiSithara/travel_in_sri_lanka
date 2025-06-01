<?php
session_start();

include_once "../config/dbConfig.php";

$email = $_POST["email"];
$password = $_POST["password"];


$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0){
    $user = $result->fetch_assoc();

$hashPassword = $user["password"];

if (password_verify($password, $hashPassword)) {
   $_SESSION['uId'] = $user['id'];
   $_SESSION['role'] = $user['role'];

   if ($_SESSION['role'] == 'admin') {
    header("location:../admin/dashboard.php");
   } else if($_SESSION['role']== "user") {
    header("location:../home.php");
   }

}  else {
    echo "password not match";
}
    
}  else {
    echo"user not found! please register";
}


