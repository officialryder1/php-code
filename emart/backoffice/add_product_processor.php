<?php
require_once 'includes/db.con.php';
include 'includes/functions.php';

if(isset($_POST['create_product'])){
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $desc = $_POST['description'];
    $spec = $_POST['specification'];
    $url = $_POST['url'];

    //image processing
    $header_img_name = $_FILES['header_img']['name'];
    $header_img_tmp = $_FILES['header_img']['tmp_name'];
    $header_img_size = $_FILES['header_img']['size'];
    $header_img_ext = end(explode('.',$header_img_name));

    $body_img_name = $_FILES['body_img']['name'];
    $body_img_tmp = $_FILES['body_img']['tmp_name'];
    $body_img_size = $_FILES['body_img']['size'];
    $body_img_ext = end(explode('.',$body_img_name));

    $ext = array('jpg','jpeg','png','svg','JPG','JPEG','PNG','SVG');

    if($_FILES['body_img']['error'] == 1 || $_FILES['header_img']['error'] == 1){
        $_SESSION['failureInfo'] = 'There was an error uploading your image(s)';
        header('Location: add-product.php');
    }
    elseif(!in_array($header_img_ext,$ext) || !in_array($body_img_ext,$ext)){
        $_SESSION['failureInfo'] = 'Upload an image and try again';
        header('Location: add-product.php');
    }
    else {
        $header_img_dir = "image/$header_img_name";
        $body_img_dir = "image/$body_img_name";
    }
    //image processing --- end

    $cat = $_POST['category'];

    // INSERT INTO DATABASE TABLE --- Start
    $sql = "INSERT INTO products (name,price,description,quantity,specifications,url,
    header_img,body_img,category)
    VALUES(?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'sisisssss',
    $product_name,$price,$quantity,$desc,$spec,$url,$header_img_dir,$body_img_dir,$cat);
    $exeute = mysqli_stmt_execute($stmt);

    if($exeute){
        move_uploaded_file($header_img_tmp,$header_img_dir);
        move_uploaded_file($body_img_tmp,$body_img_dir);

        $file = fopen('../'.$url,'w');
        fwrite($file,"<?php \$dir = \$_SERVER['SCRIPT_NAME'];\$product_url = end(explode('/',\$dir));include 'product_sample_page.php';?>");
        fclose($file);

        $_SESSION['successInfo'] = 'Product has been added successfully';
        header('Location: add-product.php');
    }
    // INSERT INTO DATABASE TABLE --- Start
}
?>