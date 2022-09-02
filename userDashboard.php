<html>

<body>
    <?php
    session_start();
    if ($_SESSION['role'] == 'user') {
        header("Location:view_user.php");
        die();
    } else {
        header("Location:login.html");
        die();
    }
    ?>
</body>

</html>