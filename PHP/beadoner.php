<!DOCTYPE html>
<html>
<head>
    <title>Become a donor</title>

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

//error_reporting(0);

$prof= $_POST["bldgroup"];
$msg = ". Reason : All ok";

session_start();
$user= $_SESSION['username'];
$phone= $_SESSION['phone'];

$conn = new mysqli($servername, $username1, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (empty($user)) {
    array_push($errors, "Username is required");
    $msg = ". Reason : Name is required";
}

if (empty($phone)) {
    array_push($errors, "Phone number is required");
    $msg = ". Reason : Phone number is required";
}

if (empty($prof)) {
    array_push($errors, "Blood Group is required");
    $msg = ". Reason : Blood Group is required";
}

$sql1= "SELECT * from blood where (name='$user' or phone='$phone')";

      $res=mysqli_query($conn, $sql1);

      if (mysqli_num_rows($res) > 0  && count($errors)==0) {
          $row = mysqli_fetch_assoc($res);
          if ($user==$row['name'] && $phone == $row['phone'] && count($errors)==0) {
              $id = $row['id'];
              $sql = "UPDATE blood SET bgroup = '$prof'  WHERE id = '$id'";
          }
      } elseif (mysqli_num_rows($res) == 0 && count($errors)==0) {
          $sql = "INSERT INTO blood (name, phone, bgroup)
    VALUES ('$user', '$phone', '$prof')";
      }

if ($conn->query($sql) === true) {
    $_SESSION['Bloodgrpoup'] = $prof;
    echo "<script type='text/javascript'>
 swal({
position: 'top-end',
type: 'success',
title: 'Your are now a donor!',
showConfirmButton: false
}).then(function() {
window.location = '/profile.php';
});
 </script>";
} else {
    echo "<script type='text/javascript'>
   swal({
position: 'top-end',
type: 'success',
title: 'Some error occurd" . $msg . "',
showConfirmButton: false
}).then(function() {
window.location = '/setblood.php';
});
   </script>";
}


?>
</body>
</html>
