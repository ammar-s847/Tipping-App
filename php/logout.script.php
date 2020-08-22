<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['logout-submit'])) {
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    header("Location: ../index.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}

?>