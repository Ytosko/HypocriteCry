<!DOCTYPE html>
<html>
<head>
    <title>Sing up</title>

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

$user= $_POST["email"];
$pass= $_POST["pass"];

$conn = new mysqli($servername, $username1, $password, $dbname);



if (empty($user)) {
    array_push($errors, "Username is required");
}

if (empty($pass)) {
    array_push($errors, "password is required");
}



if (count($errors)==0) {
    $sql = "SELECT * from users where (email='$user' or password='$pass')";
    $res=mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($row["email"]==$user && $row["password"]==$pass) {
            session_start();
            $_SESSION['username'] = $row["username"];
            $_SESSION['Proffession'] = $row["profession"];
            $_SESSION['index'] = $row["id"];
            $_SESSION['skills'] = $row["skills"];
            $_SESSION['email'] = $row["email"];
            $_SESSION['phone'] = $row["phone"];
            echo "<script type='text/javascript'>alert('Register successfully');</script>";
            header("Location: /profile.php");
        } else {
            echo "<script type='text/javascript'>
     swal({
    position: 'top-end',
    type: 'success',
    title: 'Invalid email/password!',
    showConfirmButton: false
    }).then(function() {
    window.location = '/login.html';
    });
     </script>";
        }
    }
}

?>
</body>
</html>
