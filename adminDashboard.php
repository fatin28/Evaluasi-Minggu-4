<html>

<body>
    <?php
    session_start();
    if ($_SESSION['role'] == 'admin') {
        // echo '<h1> Selamat Datang ' . $_SESSION['username'] . ' </h1><br>';
        // echo '<a href="logoutSession.php">Logout</a>';
        header("Location:view_admin.php");
        die();
    } else {
        header("Location:login.html");
        die();
    }
    ?>
</body>

</html>