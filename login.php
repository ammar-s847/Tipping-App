<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css"/>

        <title>Login</title>

    </head>
    <body>
        <nav class="nav">
            <a class="nav-link active" href="index.php">HOME</a>
            <a class="nav-link active" href="search.php">SEARCH</a>
            <a class="nav-link active" href="login.php">LOGIN</a>
            <a class="nav-link active" href="register.php">REGISTER</a>
        </nav>
        
        
        <form class="form-login" action="php/login.script.php">
            <div class="container">

              <div class="list-group">
                <a class="list-group-item active centre" style="color: white;">Login</a>
                <a class="list-group-item list-group-item-action centre">Enter your information to login as a user/business owner</a>
                
              </div>
          
              <input type="email" placeholder="EMAIL" name="login-email" required>
          
              <input type="password" placeholder="PASSWORD" name="login-password" required>
          
          
              
              <button type="submit" name = "login-submit" class="btn btn-primary btn-lg finalbtn">Submit</button>
              
            </div>
          </form>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>