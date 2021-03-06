<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAL School</title>
  <link rel="stylesheet" type="text/css" href="Css_Files/startsite.css">
  <link rel="stylesheet" type="text/css" href="Css_Files/design.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Css_Files/design.css">
  <style>
    html, body{
      height: 100%;
    }

    body{
      background-color: black;
      background-image: url("Images/elementary-school-788902_1920.jpg");
      background-size: 100% 100%;
      background-repeat: no-repeat;
      background-position: left top;
    }

    #pal{
      top: 30px!important;
    }

    p {
      color: white;
      font-size: 12px;
    }

    h3 {
      color: white;
    }

    footer {
      position: absolute;
      bottom: 10px;
      left: 47%;
      top: 95%;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <nav class="navbar">
        <h2 class="Title">PAL School</h2>
<?php
  if(isset($_SESSION['u_id'])){
    echo '
          <ul class="navbar_list">
            <li><a href="startsite.php" style="text-decoration: none">Startseite</a></li>
            <li><a href="create_account.php" style="text-decoration: none">Registrieren</a></li>
            <li><a  href="anmeldung.php" style="text-decoration: none">Anmelden</a></li>
            <li><a href="ueberuns.php" style="text-decoration: none">Über uns</a></li>
            <li><a href="interface.php" style="text-decoration: none">Interface</a></li>
          </ul>
          </nav>
          <form action="fun_exe/LogOut_function.php" method="POST">
                  <p class="loggedIn text-right">Angemeldet als: ';
          echo $_SESSION['u_mail'];
          // echo "<br>";
          echo    '<button type="submit" name="logout" formmethod="POST" class="logout text-right">Abmelden</button>

          </form>';
}else{
echo '
        <ul class="navbar_list">
          <li><a href="startsite.php" style="text-decoration: none">Startseite</a></li>
          <li><a href="create_account.php" style="text-decoration: none">Registrieren</a></li>
          <li><a  href="anmeldung.php" style="text-decoration: none">Anmelden</a></li>
          <li><a href="ueberuns.php" style="text-decoration: none">Über uns</a></li>
        </ul>
      </nav>';
}
?>

    </div>
  </div>
</div>

  <div class="container">
    <div class="row">

      <div class="col-sm-12">
        <p id="pal" style="top: 24px">PAL</p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="wrapper fadeInDown">
        <div id="formContent">
          <h3> Über uns </h3>
          <br>
          <p>
            PAL School ist ein gemeinsames Projekt von uns, PAL: Unser Kürzel für Patrick Eiden, Amin Harig und Laura Both.
          Unser Ziel ist es, eine leistungsfähige Plattform zur Erstellung und Verwaltung einer eigenen Homepage bereitzustellen, und dies unter dem Zeichen größtmöglicher Benutzerfreundlichkeit und Einfachheit. PAL School ist dabei an Grundschulen gerichtet und für ihre Bedürfnisse spezialisiert.
          </p>
        </div>
        </div>
      </div>
    </div>

  </div>
</div>

    <footer>

      <!-- Copyright -->
      <div class="footer">
        <p>© 2019 Copyright</p>
      </div>
      <!-- Copyright -->

  </footer>
</body>
</html>
