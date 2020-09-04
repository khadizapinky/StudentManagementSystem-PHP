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
      $input_error['username'] = "The name field is required";
    }
    if(empty($password)){
      $input_error['password'] = "The password field is required";
  }
  if(empty($c_password)){
      $input_error['c_password'] = "The c_password field is required";
  }
   }
   ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
    <div class="container">
      <h1>User Registration Form</h1>
      <hr/>
      <div class="row">
        <div class="col-md-12">
          <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
              <label for="name" class="control-label col-sm-1">Name</label>
              <div class="col-sm-4">
              <input id="name" class="form-control" type="text" name="name" placeholder="Enter your name" value="<?php if(isset($name)){ echo $name;}?>"/>
            </div>
            <label class="error">
              <?php
              if(isset($input_error['name'])){
              echo $input_error['name'];}
              ?>
            </label>
            
          </div>
          <div class="form-group">
              <label for="email" class="control-label col-sm-1">Email</label>
              <div class="col-sm-4">
              <input id="email" class="form-control" type="text" name="email" placeholder="Enter your email"  value="<?php if(isset($email)){ echo $email;}?>">
            </div>
            <label class="error">
              <?php
              if(isset($input_error['email'])){
              echo $input_error['email'];}
              ?>
            </label>
          </div>
          <div class="form-group">
              <label for="username" class="control-label col-sm-1">Username</label>
              <div class="col-sm-4">
              <input id="username" class="form-control" type="text" name="username" placeholder="Enter your username" value="<?php if(isset($username)){ echo $username;}?>">
            </div>
            <label class="error">
              <?php
              if(isset($input_error['username'])){
              echo $input_error['username'];}
              ?>
            </label>
          </div>
          <div class="form-group">
              <label for="password" class="control-label col-sm-1">Password</label>
              <div class="col-sm-4">
              <input id="password" class="form-control" type="password" name="password" placeholder="Enter your password" value="<?php if(isset($password)){ echo $password;}
              ?>" />
            </div>
            <label class="error">
              <?php
              if(isset($input_error['password'])){
              echo $input_error['password'];}
              ?>
            </label>
          </div>
          <div class="form-group">
              <label for="c_password" class="control-label col-sm-1">Confirm password</label>
              <div class="col-sm-4">
      <input id="c_password"class="form-control"type="password"name="c_password"placeholder="Enter your password" value="<?php if(isset($c_password)){ echo $c_password;} ?>" />
            </div>
            <label class="error">
              <?php
              if(isset($input_error['c_password'])){
              echo $input_error['c_password'];}
              ?>
            </label>
          </div>
          <div class="form-group">
              <label for="photo" class="control-label col-sm-1">photo</label>
              <div class="col-sm-4">
              <input id="photo"  type="file" name="photo">
            </div>
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <input type="submit" value="Registration" name="registration" class="btn btn-primary">
          </div>
        </form>
          

          <br>
       
          <p>if you have account then please <a href="login.php"> login</a>.</p>
          <br>
          <footer>
          <P> copyright@2018- <?= date("Y") ?>rights deserved </P>
        </footer>
      </div>
    </div>
  </div>


   


    
    
  </body>
</html>