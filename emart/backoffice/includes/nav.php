<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="dashboard.php" class="navbar-brand text-warning">
            <i class="fa fa-snowflake"></i>eMart
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#blueshark">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="blueshark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="add-product.php">
                        <i class="fa fa-chart-bar text-muted"></i>Add product
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stock.php">
                        <i class="fa fa-list text-muted"></i>Stock
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gross_sales.html">
                        <i class="fa fa-sitemap text-muted"></i>Gross sales
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="total_pro.html">
                        <i class="fa fa-users text-muted"></i>Total products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_admin.php">
                        <i class="fa fa-users text-muted"></i>Create admin
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown">
                        <i class="fa fa-sign-in-alt text-muted"></i>
                        <?php echo $_SESSION['first_name'];?>
                    </a>
                    <div class="dropdown-menu p-2">
                        <a href="profile.html" class="dropdown-item">
                            <i class="fa fa-user-circle"></i>Profile
                        </a>
                        <a href="settings.html" class="dropdown-item">
                            <i class="fa fa-cogs"></i>Settings
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="fa fa-sign-out-alt text-muted"></i>LogOut
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>