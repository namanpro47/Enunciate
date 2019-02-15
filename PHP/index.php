<?php require('./parts/section/product.php');?>
<?php
    // Define the root folder and base URL for the application
    function baseURL(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            dirname($_SERVER['REQUEST_URI'])
        );
    }

    define('BASE_URL', baseURL());
    define('KB_ROOT', dirname(__FILE__));
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
    $pages = array(
        'home' => 'Home',
        'category' => 'Category - Grid/List',
        'detail' => 'Detail',
        'cart' => 'Shopping Cart',
        'checkout' => 'Checkout',
        'contact' => 'Contact Us',
        '404' => '404'
        );
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>KYBook</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

     <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/elegant-fonts.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    </head>
<body>

    <div class="wrapper">
        
        <?php require KB_ROOT.'/parts/section/my-cart-header.php';?>

        <?php require KB_ROOT.'/parts/section/header.php';?>

        <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';?>

        <div class="content">
            <?php require_once KB_ROOT.'/pages/'.$page.'.php'; ?>
            <a class="scrollup hidden-xs hidden-sm" href="#" style="display: none;"><img src="assets/images/top-scroll.png" alt="" ></a>
        </div>

        <div class="container">
            <?php require_once('parts/section/brands.php');?>       
        </div><!-- /.container -->

        <?php require KB_ROOT.'/parts/section/footer.php';?>
    </div><!-- /.wrapper -->



    <!-- JavaScripts placed at the end of the document so the pages load faster -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="assets/js/jquery-1.12.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/scripts.js"></script>


</body>
</html>