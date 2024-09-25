<?php
require_once('/opt/lampp/htdocs/eCommarce/Model/user.php');
require_once('/opt/lampp/htdocs/eCommarce/Model/product.php');

if (session_status() == PHP_SESSION_NONE)
    session_start();

function customer ()
{
    $product = new product();
    $_SESSION['productList'] = $product->retriveProduct();
    header('location: ../View/customerPortal.php');
}

function saller ()
{
    $product = new product();
    $_SESSION['productList'] = $product->retriveProduct();
    header('location: ../View/sallerPortal.php');
}

if (empty($_GET['userName']) or empty($_GET['password'])) 
{
    $_SESSION['logInError'] = "Please Fill Up";
    header('location: ../View/logIn.php');
}
else
{
    $user = new user($_GET['userName'], $_GET['password']);
    if ($user->search())
    {
        $_SESSION['user'] = $user;
        if ($user->type == 'customer')
            customer();
        else
            saller();
    }
    else
    {
        $_SESSION['logInError'] = "Invalid User";
        header('location: ../View/logIn.php');
    }
}
