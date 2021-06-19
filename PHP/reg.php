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

$user= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$prof= $_POST["proff"];
$skills= $_POST["skill"];
$pass1= $_POST["pass1"];
$pass2= $_POST["pass2"];

$conn = new mysqli($servername, $username1, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (empty($user)) {
    array_push($errors, "Username is required");
    $msg = "Username is required";
}

if (empty($email)) {
    array_push($errors, "Email is required");
    $msg = "Email is required";
}
if (empty($phone)) {
    array_push($errors, "Phone number is required");
    $msg = "Phone number is required";
}

if (empty($prof)) {
    array_push($errors, "Profession is required");
    $msg = "Profession is required";
}

if (empty($skills)) {
    array_push($errors, "Skills are required");
    $msg = "Skills are required";
}

if (empty($pass1)) {
    array_push($errors, "Password is required");
    $msg = "Password is required";
}

if ($pass1 != $pass2) {
    array_push($errors, "Passwords are not matched");
    $msg = "Passwords are not matched";
}
$sql1= "SELECT * from users where (username='$user' or email='$email')";

      $res=mysqli_query($conn, $sql1);

      if (mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_assoc($res);
          if ($email==$row['email']) {
              echo "<script type='text/javascript'>
              swal({
      position: 'top-end',
      type: 'success',
      title: 'Email already exists',
      showConfirmButton: false
    }).then(function() {
    window.location = '/reg.html';
});
              </script>";
              exit;
          } elseif ($user==$row['username']) {
              echo "<script type='text/javascript'>
      swal({
position: 'top-end',
type: 'success',
title: 'Username already exists',
showConfirmButton: false
}).then(function() {
window.location = '/reg.html';
});
      </script>";
              exit;
          }
      }

if (count($errors)==0) {
    $sql = "INSERT INTO users (username, email, phone, profession, skills, password)
VALUES ('$user', '$email', '$phone', '$prof', '$skills', '$pass1')";
}

if ($conn->query($sql) === true) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['Proffession'] = $prof;
    $_SESSION['index'] = "Re-login to get your rank";
    $_SESSION['skills'] = $skills;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    echo "<script type='text/javascript'>alert('Register successfully');</script>";
    header("Location: /profile.php");
} else {
    echo "<script type='text/javascript'>
   swal({
position: 'top-end',
type: 'success',
title: 'Some error occurd. Reason : " . $msg . "',
showConfirmButton: false
}).then(function() {
window.location = '/reg.html';
});
   </script>";
}


?>
</body>
</html>
