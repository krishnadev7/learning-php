<?php
    if(isset($_POST['submit'])){
        require 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPassword'];

        if(empty($username) || empty($password) || empty($confirmPass)){
            header("location: ../register.php?error=emptyfields&username:".$username);
            exit();
        }elseif($password != $confirmPass){
            header("location: ../register.php?error=passwordsdonotmatch:".$username);
            exit();
        }else{
            $sql = "SELECT username FROM users WHERE username = ?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("location: ../register.php?error=sqlError:");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                $rowCount = mysqli_stmt_num_rows($stmt);

                if($rowCount > 0){
                    header("location: ../register.php?error=usernameTaken:");
                exit();

                }else{
                    $sql = "INSERT INTO users (username, password) VALUES  (?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("location: ../register.php?error=sqlError:");
                        exit();
                    }else{
                        $hashedPass = password_hash($password,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"ss",$username,$hashedPass);
                        mysqli_stmt_execute($stmt);
                        header("location: ../register.php?success=registered");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
