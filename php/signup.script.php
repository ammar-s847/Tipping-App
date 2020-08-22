<?php

if (isset($_POST['bus-signup-submit'])) {
    include 'config.php';

    $name = trim(mysqli_real_escape_string($conn, $_POST['bus-signup-name']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['bus-signup-email']));
    $location = trim(mysqli_real_escape_string($conn, $_POST['bus-signup-location']));
    $pass = mysqli_real_escape_string($conn, $_POST['bus-signup-password']);
    $conf_pass = $_POST['bus-signup-password-conf'];

    if (empty($name) || empty($email) || empty($location) || empty($pass) || empty($conf_pass)) {
        header('Location: ../registerAsBus.php?status=empty');
        exit();
    } else {
        if ($pass != $conf_pass) {
            header('Location: ../registerAsBus.php?status=password');
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('Location: ../registerAsBus.php?status=email');
                exit();
            } else {
                $emailCheck = "SELECT email FROM restaurants WHERE email='$email'";
                $emailCheckResult = mysqli_query($conn, $emailCheck);
                $emailCheckResultCheck = mysqli_num_rows($emailCheckResult);
                if ($emailCheckResultCheck > 0) {
                    header('Location: ../registerAsBus.php?status=taken');
                    exit();
                } elseif ($emailCheckResultCheck == 0) {
                    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
                    $user_id = uniqid('', true);
                    $insertUser = "INSERT INTO restaurants (res_id, res_name, pwd, email, res_address) VALUES ('$user_id', '$name', '$hashedPassword', '$email', '$location')";
                    if (mysqli_query($conn, $insertUser)) {
                        header('Location: ../registerAsBus.php?status=signup-success');
                        exit();
                    } else {
                        header('Location: ../registerAsBus.php?status=error');
                        exit();
                        /*printf(mysqli_error($conn));*/
                    }
                }
            }
        }
    }
} elseif (isset($_POST['user-signup-submit'])) {
    include 'config.php';

    $name = trim(mysqli_real_escape_string($conn, $_POST['user-signup-name']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['user-signup-email']));
    $pass = mysqli_real_escape_string($conn, $_POST['user-signup-password']);
    $conf_pass = $_POST['user-signup-password-conf'];

    if (empty($name) || empty($email) || empty($pass) || empty($conf_pass)) {
        header('Location: ../registerAsUser.php?status=empty');
        exit();
    } else {
        if ($pass != $conf_pass) {
            header('Location: ../registerAsUser.php?status=password');
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('Location: ../registerAsUser.php?status=email');
                exit();
            } else {
                $emailCheck = "SELECT email FROM users WHERE email='$email'";
                $emailCheckResult = mysqli_query($conn, $emailCheck);
                $emailCheckResultCheck = mysqli_num_rows($emailCheckResult);
                if ($emailCheckResultCheck > 0) {
                    header('Location: ../registerAsUser.php?status=taken');
                    exit();
                } elseif ($emailCheckResultCheck == 0) {
                    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
                    $user_id = uniqid('', true);
                    $insertUser = "INSERT INTO users (id, name, pwd, email) VALUES ('$user_id', '$name', '$hashedPassword', '$email')";
                    if (mysqli_query($conn, $insertUser)) {
                        header('Location: ../registerAsUser.php?status=signup-success');
                        exit();
                    } else {
                        header('Location: ../registerAsUser.php?status=error');
                        exit();
                        /*printf(mysqli_error($conn));*/
                    }
                }
            }
        }
    }
} else {
    header('Location: ../index.php');
    exit();
}

?>