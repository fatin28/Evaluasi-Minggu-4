    <?php
    include 'koneksiModel.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "select * from user where username ='$username' and password='$password'";
    $result = mysqli_query($connect, $query);
    $fechResult = mysqli_fetch_assoc($result);
    $rowcount = mysqli_num_rows($result);

    if ($rowcount > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $fechResult['role'];
    }
    if ($_SESSION['role'] == 'admin') {
        echo "Anda berhasil login ";
        echo "<a href='adminDashboard.php'>Admin</a>";
    } elseif ($_SESSION['role'] == 'user') {
        echo "Anda berhasil login ";
        echo "<a href='userDashboard.php'>User Dasboard</a>";
    } else {
        echo "Anda gagal login ";
        echo " <a href='login.html'>Login Form</a>";
    }
    mysqli_close($connect);
