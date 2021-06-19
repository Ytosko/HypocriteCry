<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Profile</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/crow.css">
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

          </div>
        </div>
      </nav>
    </header>

     <div class="container emp-profile">
            <div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://image.freepik.com/free-vector/machine-warrior-e-sports-logo-design-machine-warrior-gaming-mascot-twitch-profile_74154-43.jpg" alt=""/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php
                                        session_start();
                                        $name = $_SESSION['username'];
                                        echo $name;
                                        ?>
                                    </h5>
                                    <h6>
                                        <?php
                                        $ini = $_SESSION['Proffession'];
                                        echo $ini;
                                        ?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span><?php
                                    $ini = $_SESSION['index'];
                                    echo $ini;
                                    ?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Blood donation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <form action="/edit.html" class="inline">
                      <button class="profile-edit-btn" type="submit">Edit Account</button>
                    </form>
                        <form method="POST" action="PHP/logout.php">
                          <button class="profile-edit-btn" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>SKILLS</p>
                            <a href="javascript:void(0);"><?php
                            $skills = $_SESSION['skills'];
                            echo $skills;
                            ?></a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $name = $_SESSION['username'];
                                                echo $name;
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $ini = $_SESSION['username'];
                                                echo $ini;
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $ini = $_SESSION['email'];
                                                echo $ini;
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $ini = $_SESSION['phone'];
                                                echo $ini;
                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $ini = $_SESSION['Proffession'];
                                                echo $ini;
                                                ?></p>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <label>Your blood group : </label>
                                        </div>
                                          <div class="col-md-6">
                                            <p><?php
                                            $servername = "localhost";
                                            $username1 = "root";
                                            $password = "";
                                            $dbname = "hypcry";
                                            $conn = new mysqli($servername, $username1, $password, $dbname);
                                            $user = $_SESSION['username'];
                                            $phone = $_SESSION['phone'];
                                            $sql1= "SELECT * from blood where (name='$user' or phone='$phone')";
                                                  $res=mysqli_query($conn, $sql1);
                                                  if (mysqli_num_rows($res) > 0) {
                                                      $row = mysqli_fetch_assoc($res);
                                                      if ($user==$row['name'] && $phone == $row['phone']) {
                                                          $_SESSION['Bloodgrpoup'] = $row['bgroup'];
                                                      }
                                                  }
                                            $conn -> close();
                                            if (!isset($_SESSION['Bloodgrpoup']) || empty($_SESSION['Bloodgrpoup'])) {
                                                echo "Not set yet";
                                            } else {
                                                $ini = $_SESSION['Bloodgrpoup'];
                                                echo $ini;
                                            }
                                            ?></p>
                                            </div>
                                          </div>
                                          <br/>
                                          <br/>
                                      <div class="row">
                                      <form class="" action = "setblood.php" method = "post">
                                      <li><button class= "buto">Update blood group information</button></li>
                                    </form>
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


        <script language = "text/Javascript">
          cleared[0] = cleared[1] = cleared[2] = 0;
          function clearField(t){
          if(! cleared[t.id]){
              cleared[t.id] = 1;
              t.value='';
              t.style.color='#fff';
              }
          }
        </script>

      </body>
    </html>
