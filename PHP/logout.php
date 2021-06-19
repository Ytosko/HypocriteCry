<!DOCTYPE html>
<html>
<head>
    <title>Log out</title>

    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>

</head>
<body>

<?php
error_reporting(0);
session_start();
$_SESSION = array();
unset($_SESSION);
session_destroy();
echo "<script type='text/javascript'>
swal({
position: 'top-end',
type: 'success',
title: 'Logged out successfully',
showConfirmButton: false
}).then(function() {
window.location = '/index.html';
});
</script>";
 ?>
</body>
</html>
