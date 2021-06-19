<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Search Result</title>

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: #0092FF;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: none;
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: bold;
  font-size: 16px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: bold;
  font-size: 16px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
    </style>
  </head>

  <body>


    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Hypocrate <em>Cry</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="functional-buttons">
            <ul>
              <form class="" action = "PHP/myacc.php" method = "post">
              <li><button class= "buto">My Account</button></li>
            </form>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>Search result</h2>
              <div id="search-section">
                <?php
                $servername = "localhost";
                $username1 = "root";
                $password = "";
                $dbname = "hypcry";

                $errors= array();

                $prof= $_POST["bldgroup"];


                $conn = new mysqli($servername, $username1, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                if (empty($prof)) {
                    array_push($errors, "Blood Group is required");
                    $msg = ". Reason : Blood Group is required";
                }
                $sql1= "SELECT * from blood where (bgroup='$prof')";
                $res=mysqli_query($conn, $sql1);
                if (mysqli_num_rows($res) > 0  && count($errors)==0) {
                    echo "<section><h1></h1><div class='tbl-header'><table cellpadding='0' cellspacing='0' border='0'><thead><table border='1'><tr><th>Name</th><th>Phone</th><th>Blood Group</th></tr></thead></table></div><div class='tbl-content'><table cellpadding='0' cellspacing='0' border='0'><tbody>";
                    while ($row = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['bgroup'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody></table></div></section>";
                }
                  mysqli_close($conn);
                 ?>
               <div class="advSearch_chkbox">
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>Hypocrate cry is a website which is developed By Shanta Khatun and it is developed for tracking a search reult of any keyword by google</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Developer contact</h2>
              </div>
              <ul class="footer-list">
                <li><a href="https://www.facebook.com/ShantaRHF">Shanta Rahman - FB</a></li>
                <li><a href="mailto:shanta.cse.bubt@gmail.com">Shanta Rahman - Gmail</a></li>
              </ul>
            </div>
          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              <ul class="footer-list">
                <li><a href="https://www.bubt.edu.bd/">BUBT</a></li>
                <li><a href="https://www.annex.bubt.edu.bd/">Annex</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="tel:01737387870">01737387870</a></li>
                <li>Email: <a href="mailto:shanta.cse.bubt@gmail.com">shanta.cse.bubt@gmail.com</a></li>
                <li>Support: <a href="mailto:shanta.cse.bubt@gmail.com">shanta.cse.bubt@gmail.com</a></li>
                <li>Website: <a href="mailto:shanta.cse.bubt@gmail.com">shanta.cse.bubt@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2020 Shanta Rahman
				- Designed by <a rel="nofollow" href="https://www.facebook.com/ShantaRHF">Shanta rahman</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>


  </body>
</html>
