<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Bootstrap css files-->
        <link rel="stylesheet" href="css/dashboard.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <title>Admin login | eMart</title>
    </head>
    <body>
        <div style="width:400px;margin:0 auto;margin-top:60px">
            <div class="jumbotron">
                <h2>Signin to admin panel</h2>

                <form action="includes/login_processor.php" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control-lg" name="user_email"
                        placeholder="registered email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control-lg" name="user_password"
                        placeholder="your password" required>
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg" name="signin">
                        Sign in
                    </button>
                </form>

                <small>
                    Forgot password?<br>
                    <a href="#">Reset your password</a>
                </small>
            </div>
        </div> 
    </body>
</html>