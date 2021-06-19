<?php
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: /login.html");
} else {
    header("Location: /profile.php");
}
?>