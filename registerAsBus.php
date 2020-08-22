
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css"/>

        <title>Register as a Business</title>

    </head>
    <body>
        <?php include 'php/nav.component.php'; ?>
        
        <form class="form-signup" action="php/signup.script.php" method="post">
            <div class="container">

                <div class="list-group">
                    <a class="list-group-item active centre" style="color: white;">Sign Up</a>
                    <a class="list-group-item list-group-item-action centre">Enter your information to register as a business.</a>
                    
                </div>
            
                <input type="email" name="bus-signup-email" placeholder="EMAIL" required>
            
                <input type="password" name="bus-signup-password" placeholder="PASSWORD" required>
            
                <input type="password" name="bus-signup-password-conf" placeholder="RE-TYPE PASSWORD" required>
        
                <input type="text" name="bus-signup-name" placeholder="BUSINESS NAME" required>
        
                <input type="text" name="bus-signup-location" placeholder="LOCATION" required>
                
                <button type="submit" name="bus-signup-submit" class="btn btn-primary btn-lg finalbtn">Submit</button>
              
            </div>
        </form>





        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>