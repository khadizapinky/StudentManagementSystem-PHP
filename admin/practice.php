<?php
 if(isset($_POST['registration'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];
  $photo = explode('.',$_FILES['photo']['name']);
  $photo = end($photo);
  $photo_name = $username.'.'.$photo;
   $input_error = array();

  if(empty($name)){
    $input_error['name'] = "The name field is required";
}
if(empty($email)){
    $input_error['email'] = "The email field is required";
}
if(empty($username)){
    $input_error['username'] = "The username field is required";
}
if(empty($password)){
    $input_error['password'] = "The password field is required";
}
if(empty($c_password)){
    $input_error['c_password'] = "The c_password field is required";
}

// echo '<pre>';
//   print_r($input_error);
// echo '</pre>';
}
?>
