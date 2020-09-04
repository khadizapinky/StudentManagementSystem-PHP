<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>student management system</title>
  </head>
  <body>
    <div class="container">
    </br>
    <h1 class="text-center">Student Management System</h1>
  </br>
  <h1 class="text-center">Admin login form Submit</h1>
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form action="index.php" method="POST">
        <div>
          <input type="text" placeholder="username" required="" class="form-control"/>
        </div>
        <div>
          <input type="password" placeholder="password" required="" class="form-control">
        </div>
        <br>
        <div>
          <input type="submit" value="login" name="login" class="btn btn-info pull-right">
        </div>
      </form>
    </div>
  </div>
</div>


    
    
  </body>
</html>