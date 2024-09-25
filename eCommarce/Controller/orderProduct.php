<?php
require_once('/opt/lampp/htdocs/eCommarce/Model/Order.php');
require_once('/opt/lampp/htdocs/eCommarce/Model/product.php');
require_once('/opt/lampp/htdocs/eCommarce/Model/user.php');


if (session_status() == PHP_SESSION_NONE)
    session_start();

// $order = new order($_SESSION['productList'][$_GET['index']]->model, $_SESSION['user']->id);
// print_r($_SESSION['productList'][$_GET['index']]);
// print_r($_SESSION['user']);

inserOrder($_GET['model'], $_GET['id']);
unset($_SESSION['productList'][$_GET['index']]);
header('location: ../View/customerPortal.php');
?>