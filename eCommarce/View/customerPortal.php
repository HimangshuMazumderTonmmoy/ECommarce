<?php
require_once('/opt/lampp/htdocs/eCommarce/Model/product.php');
require_once('/opt/lampp/htdocs/eCommarce/Model/user.php');


if (session_status() == PHP_SESSION_NONE)
    session_start();

// print_r($_SESSION['productList']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saller Portal</title>
</head>
<body>
    <?php
    $i = 0;
    $id = $_SESSION['user']->id;
    for (; $i < count($_SESSION['productList']); $i++)
    {
        $_SESSION['productList'][$i] ->display();
    ?>
    <a href="../Controller/orderProduct.php?model=<?php echo $_SESSION['productList'][$i]->model ?>&id=<?php echo $id ?>">Order</a> <br> <br>
    <?php
    }
    ?>
</body>
</html>