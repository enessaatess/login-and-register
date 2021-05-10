<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Enes Ates - Login/Register</title>
</head>
<body>
    <div id="logreg-forms">
    <?php 

            if (@$_GET['status']=="different") {?>

                <div class="alert alert-danger">
                    <strong>Error!</strong> The passwords you entered do not match.
                </div>
                
            <?php } elseif (@$_GET['status']=="missing") {?>

                <div class="alert alert-danger">
                    <strong>Error!</strong> Your password must be at least 6 characters long.
                </div>
                
            <?php } elseif (@$_GET['status']=="repeatuser") {?>

                <div class="alert alert-danger">
                    <strong>Error!</strong> This user has been registered before.
                </div>
                
            <?php } elseif (@$_GET['status']=="error") {?>

                <div class="alert alert-danger">
                    <strong>Error!</strong> Failed to Register Consult the System Administrator.
                </div>
             <?php } elseif (@$_GET['status']=="loginsuccess") {?>

                <div class="alert alert-success">
                    <strong>Success!</strong> Congratulations your login is successful
                </div>
            <?php } elseif (@$_GET['status']=="ok") {?>

                <div class="alert alert-success">
                    <strong>Success!</strong> Your registration has been done successfully
                </div>
                
            <?php }
            ?>
        <form class="form-signin" action="connect/flag.php" method="POST">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="user_mail">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="user_pass">
            
            <button class="btn btn-success btn-block" type="submit" name="userlogin"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
            </form>

            
            
            <form action="connect/flag.php" method="POST" class="form-signup">
               
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign Up</h1>

                <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="" name="user_mail">
                <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="" name="user_passone">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="" name="user_passtwo">

                <button class="btn btn-primary btn-block" type="submit" name="userregister"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <br>
            
    </div>
    <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction" target="_blank" style="color:black"> Design : By Artin</a><a> & </a>
        <a href="https://github.com/enessaatess" target="_blank" style="color:black"> Code : By Enes</a>
    </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
</body>
</html>