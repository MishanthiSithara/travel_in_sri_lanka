<?php 

include_once "../config/dbConfig.php";

$fullName = $_POST['full_name']; 
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST['confirm_password'];


if($password == $confirmPassword){
    $sql = "INSERT INTO users (full_name, email, password)
VALUES ('$fullName', '$email', '$confirmPassword')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}else {
      echo "password not match";
}

