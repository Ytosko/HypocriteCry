<!DOCTYPE html>
<html>
<head>
    <title>Update profile</title>

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


$user= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$prof= $_POST["proff"];
$skills= $_POST["skills"];
$pass1= $_POST["npass1"];
$pass2= $_POST["npass2"];
$currente = $_POST["cemail"];
$currentp = $_POST["cpass"];

$conn = new mysqli($servername, $username1, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (empty($user)) {
    $user = $_SESSION['username'];
}

if (empty($email)) {
    $email = $_SESSION['email'];
}
if (empty($phone)) {
    $phone = $_SESSION['phone'];
}

if (empty($prof)) {
    $prof = $_SESSION['Proffession'];
}

if (empty($skills)) {
    $skills = $_SESSION['skills'];
}
if (empty($currente)) {
    array_push($errors, "You must enter your current email to procced");
    $msg = "Reason : You must enter your current email to procced";
}
if (empty($currentp)) {
    array_push($errors, "You must enter your current password to procced");
    $msg = "Reason : You must enter your current password to procced";
}
if (empty($pass1)) {
    $pass1 = $currentp;
}
if (empty($pass2)) {
    $pass2 = $currentp;
}
if ($pass1 != $pass2) {
    array_push($errors, "Passwords are not matched");
    $msg = "Reason : Passwords are not matched";
}

$sql1= "SELECT * from users where (email='$email' or password='$currentp')";

      $res=mysqli_query($conn, $sql1);

      if (mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_assoc($res);
          if ($email==$row['email'] && $currentp == $row['password'] && count($errors)==0) {
              $id = $row['id'];
              $sql = "UPDATE users SET username = '$user', email = '$email' , phone = '$phone', profession = '$prof', skills = '$skills', password = '$pass1'  WHERE id = '$id'";
          } else {
              echo "<script type='text/javascript'>
           swal({
        position: 'top-end',
        type: 'success',
        title: 'You have entered wrong credentials!',
        showConfirmButton: false
        }).then(function() {
        window.location = '/edit.html';
        });
           </script>";
          }
      }

if ($conn->query($sql) === true) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['Proffession'] = $prof;
    $_SESSION['index'] = "Re-login to get your rank";
    $_SESSION['skills'] = $skills;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    header("Location: /profile.php");
} else {
    echo "<script type='text/javascript'>
   swal({
position: 'top-end',
type: 'success',
title: 'Some error occurd. " . $msg . "',
showConfirmButton: false
}).then(function() {
window.location = '/edit.html';
});
   </script>";
}


?>
</body>
</html>
