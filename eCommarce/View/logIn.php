<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
</head>

<body>
    <form action="../Controller/logInCheck.php">
        User Name: <input type="text" name="userName"> <br> <br>
        Password: <input type="password" name="password"> <br> <br>
        <?php
        if (session_status() == PHP_SESSION_NONE)
            session_start();

        if (isset($_SESSION['logInError'])) 
        {
            echo $_SESSION['logInError'] . "<br> <br>";
            unset($_SESSION['logInError']);
        }
        ?>
        <input type="submit">
    </form>
</body>

</html>