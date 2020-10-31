<?php
require_once 'includes/db.con.php';
include 'includes/functions.php';

if (isset($_POST['create_admin'])) {
    $FName = $_POST['first_name'];
    $LName = $_POST['last_name'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];

    if($_POST['password'] == $_POST['password2']){
        $hashedPassword = password_hash($_POST['password'],PASSWORD_DEFAULT);
    }
    else{
        $_SESSION['failureInfo'] = 'Password are not the same. Password must be identical';
    }

    $Role = $_POST['role'];

    $sql = "INSERT INTO admin (first_name,last_name,phone,email,password,role)
    VALUES(?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'ssssss',$FName,$LName,$Phone,$Email,$hashedPassword,$Role);//s-string,i-integer,d-double
    mysqli_stmt_execute($stmt);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Bootstrap css files-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <script src="https://unpkg.com/feather-icons"></script>
        <title>Admin Dashboard | eMart</title>
        <script src="https://Kit.fontawesome.com/b99e675b68.js"></script>
    </head>
    <body>
        <!--Main navbar-->
        <?php include 'includes/nav.php';?>
        <!--dashboard section-->

        <section class="p-2 bg-teal text-white">
            <div class="container">
                <div class="jumbotron">
                
                    <?php 
                    echo successInfo();
                    echo failureInfo();
                    ?>
                    
                    <h1 style="color:#000;">Create a new admin</h1>

                    <form action="create_admin.php" method="POST">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control form-control-lg" name="first_name"
                                placeholder="first name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control form-control-lg" name="last_name"
                                placeholder="last name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control form-control-lg" name="phone"
                            placeholder="phone number" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" name="email"
                            placeholder="registered email" required>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control form-control-lg" name="password"
                                placeholder="your password" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="password" class="form-control form-control-lg" name="password2"
                                placeholder="repeat password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="role" class="form-control form-control-lg">
                                <option>Assign role</option>
                                <option>Manager</option>
                                <option>Sales Rep</option>
                                <option>Store Keeper</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg" name="create_admin">
                            Create admin
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </body>
    <!--Main footer-->
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>         
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
    <script>
        feather.replace();
    </script>
</html>

