<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>

    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>

</head>
<body>

 <?php
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "hypcry";

$errors= array();

error_reporting(0);

$user= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["subject"];
$prof= $_POST["message"];

$conn = new mysqli($servername, $username1, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (empty($user)) {
    array_push($errors, "Username is required");
    $msg = "Name is required";
}

if (empty($email)) {
    array_push($errors, "Email is required");
    $msg = "Email is required";
}
if (empty($phone)) {
    array_push($errors, "Subject is required");
    $msg = "Subject is required";
}

if (empty($prof)) {
    array_push($errors, "Message is required");
    $msg = "Message is required";
}


if (count($errors)==0) {
    $sql = "INSERT INTO contact (name, email, subject, message)
VALUES ('$user', '$email', '$phone', '$prof')";
}

if ($conn->query($sql) === true) {
    echo "<script type='text/javascript'>
 swal({
position: 'top-end',
type: 'success',
title: 'Your feedback has submitted successfully!',
showConfirmButton: false
}).then(function() {
window.location = '/contact.html';
});
 </script>";
} else {
    echo "<script type='text/javascript'>
   swal({
position: 'top-end',
type: 'success',
title: 'Some error occurd. Reason : " . $msg . "',
showConfirmButton: false
}).then(function() {
window.location = '/contact.html';
});
   </script>";
}


?>
</body>
</html>
