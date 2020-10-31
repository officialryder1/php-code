<?php
include 'includes/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add product | eMart</title>
        <!--Bootstrap css files-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <script src="https://unpkg.com/feather-icons"></script>
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
                    
                    <h1 style="color:#000;">Add new product</h1>

                    <form action="add_product_processor.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="product_name"
                            placeholder="product name" >
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="int" class="form-control form-control-lg" name="price"
                                placeholder="product price" >
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="int" class="form-control form-control-lg" name="quantity"
                                placeholder="quantity" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Product description</label>
                            <textarea class="form-control" name="description" id="description" rows=10>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="specification">Product specification</label>
                            <textarea class="form-control" name="specification" id="specification" rows=10>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="url"
                            placeholder="create custom url" >
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="header_img">Header image</label>
                                <input type="file" class="form-control form-control-lg" name="header_img" 
                                id="header_img" >
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="body_img">Body image</label>
                                <input type="file" class="form-control form-control-lg" name="body_img"
                                 id="body_img" >
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="category" class="form-control form-control-lg">
                                <option>Choose category ...</option>
                                <option>Fashion</option>
                                <option>Electronics</option>
                                <option>Stationaries</option>
                                <option>Phones</option>
                                <option>Computers</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" name="create_product">
                            Create product
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

