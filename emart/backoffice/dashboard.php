<?php
include 'includes/functions.php';

if(!isset($_SESSION['staff_id'])){
    header('Location: login.php');
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

            <?php 
            echo successInfo();
            echo failureInfo();
            ?>
            
            <div class="container">
                <div class="row">
                    <h1>
                        <i class="fa fa-chart-bar"></i>Dashboard
                    </h1>
                </div>
            </div>
        </section>
        <!--Button section-->
        <section class="p-3 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#order-modal">
                            <i class="fa fa-plus-circle"></i>Orders placed
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-success" data-toggle="modal" data-target="#gross-modal">
                            <i class="fa fa-plus-circle"></i>Gross sales
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#total-modal">
                            <i class="fa fa-plus-circle"></i>Total product
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#unsold-modal">
                            <i class="fa fa-plus-circle"></i>Products not sold
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!--Order Modal-->
        <div class="modal" id="order-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content animated jackInTheBox">
                    <div class="modal-header bg-primary text-white">
                        <h3>Orders placed</h3>
                        <button class="close" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body bg-light">
                        <form>
                            <div class="form-group">
                                <label class="form-check-label">Item</label>
                                <input type="text" class="form-control" placeholder="Item">
                            </div>
                            <div class="form-group">
                                <label class="form-check-label">Orders</label>
                                <select class="form-control">
                                    <option value="">Select Payment system</option>
                                    <option value="">Cash on Delivery</option>
                                    <option value="">Cash on Sales</option>
                                    <option value="">Shipping and billing</option>
                                    <option value="">Transfer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-check-label">State-Region</label>
                                <select class="form-control">
                                    <option value="">Select Region</option>
                                    <option value="">North</option>
                                    <option value="">South</option>
                                    <option value="">East</option>
                                    <option value="">West</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-check-label">Image upload</label>
                                <input type="file" class="form-control-file">
                                <small>MAX size : 3MB</small>
                            </div>
                            <div class="form-group">
                                <label class="form-check-label">Comment</label>
                                <textarea name="editor1" rows="4" class="form-control" placeholder="Description"></textarea>
                            </div>
                            <div>
                                <a></a>
                                    <input type="submit" class="btn btn-primary" value="Orders placed">
                                <a href="#" data-dismiss="modal" class="btn btn-dark">close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Gross Modal-->
        <div class="modal" id="gross-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content animated flipInX">
                    <div class="modal-header bg-success text-white">
                        <h3>Gross sales</h3>
                        <button class="close" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body bg-light">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Gross sales">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control">
                            </div>
                            <div>
                                <a href="gross_sales.html">
                                    <input type="submit" class="btn btn-success" value="Gross sales">
                                </a>
                                <a href="#" data-dismiss="modal" class="btn btn-dark">close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Total modal-->
        <div class="modal" id="total-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content animated flipInY">
                    <div class="modal-header bg-warning text-white">
                        <h3>Total products</h3>
                        <button class="close" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body bg-light">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Product Quantity">
                            </div>
                            <div>
                                <a href="total_pro.html">
                                    <input type="submit" class="btn btn-warning" value="Total Product">
                                </a>
                                <a href="#" data-dismiss="modal" class="btn btn-dark">close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Products_unsold modal-->
        <div class="modal" id="unsold-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content animated flipInY">
                    <div class="modal-header bg-danger text-white">
                        <h3>Products not sold</h3>
                        <button class="close" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i>
                        </button>
                    </div>
                    <div class="modal-body bg-light">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Product Quantity">
                            </div>
                            <div>
                                <a href="prod_not-sold.html">
                                    <input type="submit" class="btn btn-danger" value="Products_unsold">
                                </a>
                                <a href="#" data-dismiss="modal" class="btn btn-dark">close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Main content section-->
        <section class="p-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                <h3>Products Sold by Quantity</h3>
                            </div>
                            <div class="card-body bg-light">
                                <table class="table table-hover text-center">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Products Name</th>
                                            <th>Amount</th>
                                            <th>Total Quantity</th>
                                            <th>Product Total</th>
                                            <th>Total Amount Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>bags</td>
                                            <td>$5600</td>
                                            <td>126</td>
                                            <td>345</td>
                                            <td>$34657</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                <h3>Products Sold by Total</h3>
                            </div>
                            <div class="card-body bg-light">
                                <table class="table table-hover text-center">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Products Name</th>
                                            <th>Amount</th>
                                            <th>Total Quantity</th>
                                            <th>Product Total</th>
                                            <th>Total Amount Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>bags</td>
                                            <td>$5600</td>
                                            <td>126</td>
                                            <td>345</td>
                                            <td>$34657</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <!--Main footer-->
    <footer class="p-3 bg-dark text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Copyright &copy; 2020 , Blueshark.com</h3>
                    <h6>All Rights Reserved</h6>
                    <h6>Developed & Maintained by</h6>
                        <a class="text-warning" href="https://www.earlycode.com" target="_blank">Gloria SAG</a>
                </div>
            </div>
        </div>
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
    </footer>
</html>