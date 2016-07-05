<?php
error_reporting(E_ERROR | E_PARSE);
 $db_query = mysqli_query($connect,"SELECT * FROM users WHERE email='$_POST[email]'");         
$users_number = mysqli_num_rows($db_query);
if (isset($_POST['submit'])) {
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$username= $_POST['username'];
$password = md5($_POST['password']);

if (!empty($firstname && $lastname && $email && $username && $password) && $users_number <= 0) {
    $query= mysqli_query($connect,"INSERT INTO users (firstname, lastname, username, email, password)
     VALUES ('$firstname' , '$lastname' , '$username' , '$email' , '$password' )" );
  header("location: login.php");
}else{  
  mysqli_close($connect);
$message = "<code>This user is already registered</code> ".$users_number;
    header("location: register.php"); 
}

}
?>