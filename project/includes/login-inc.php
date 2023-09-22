<?php
if (isset($_POST['submit'])) {
    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header('location: ../index.php?error=emptyfields:');
        exit();
    } else {
        $sql = 'SELECT username FROM users WHERE username = ?';
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlError:");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passCheck = password_verify($password, $row['password']);
                if ($passCheck == false) {
                    header("location: ../index.php?error=wrongPassword:");
                    exit();
                } elseif ($passCheck == true) {
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['username'];
                    header("location: ../index.php?success=loggedIn:");
                    exit();
                } else {
                    header("location: ../index.php?error=wrongPass:");
                    exit();
                }
            } else {
                header('location: ../index.php?error=nouser');
                exit();
            }
        }
    }
}
