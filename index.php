<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Management system</title>
  </head>
  <body>
    <div class="container">
    </br>
    <a class="btn btn-primary pull-right" href="admin/login.php">login</a>
    <h1 class="text-center">Welcome to Student Management System</h1>

    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
    <form action="" method="POST">
      <table class="table table-bordered">
         <tr>
            <td colspan="2" class="text-center"><label>Student Data</label></td>
          </tr>
           <tr>
            <td><label for="choose class">Choose class</label>
            </td>
            <td>
              <select class="form-control" id="choose" name="choose">
                <option value="1">select</option>
                 <option value="">1st</option>
                  <option value="">2nd</option>
                   <option value="">3rd</option>
                    <option value="">4th</option>
                    <option value="">5th</option>

                
              </select>
            </td>
          </tr>
           <tr>
            <td><label for="roll">Roll Number</label>
            </td>
            <td><input class="form-control" type="text" name="roll" pattern="[0-9]{8}" placeholder="Roll"></td>
          </tr>

           <tr>
            <td colspan="2" class="text-center"><input class="btn btn-default" type="submit" value="show info" name="show_info"></td>
          </tr>
        
      </table>

      
    </form>
    </div>
    </div>
  </div>
      </div>













    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>