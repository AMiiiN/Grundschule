<?php include '../functions.php'; session_start(); ?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <title>PAL School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><style>

        .navbar2 {
      background-color: #AC3B61!important;
      padding: 10px;
      margin-bottom: 0px;
      height: 74px;
    }

    .Title {
      font-size: 27px;
      margin-top: 5px;
    }

    p {
      margin-bottom: 0px;
    }

    .glyphicon {
      color: white;
      font-size: 18px;
    }

    .carousel-inner{
      height: 600px;
    }

    p, a, h1{
    	font-family: "Open Sans",sans-serif;
    }

    a {
    	color: white;
    	font-size: 20px;
    }

    footer {
      background-color: #555;
      color: white;
      padding: 40px;
    }

    ul.nav a:hover {
      color: white !important;
      background-color: transparent !important;
    }


    img {
      height: 100%; 
      width: 100%;
    }
.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgb(101, 161, 223);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-2"></div>
    <div id="firstheader">
     <div class="Title col-sm-4">
    	<p class="name">Grundschule Üdersdorf</p> 
     </div> 
     <div class="col-sm-3 text-left">        
       <img class="logo" src="../Images/Logo_grundschule.jpg" alt="Smiley face"  height="170" width="170">       
     </div>  
   </div> 
 </div><div class="row text-center red">
  		<div class="col">
  			<nav class="navbar2">
  			      <ul>
              <li><a href="../userid19/frontpageUser19.php"><span class="glyphicon glyphicon-home"></span> Home</a></li><li><a  class="custome" href="../userid19/custome_id19.php"><span class="glyphicon glyphicon-star"></span>Not</a></li><li><a href="../userid19/calendar_id19.php"><span class="glyphicon glyphicon-calendar"></span> Events</a></li><li><a href="../userid19/gallery_id19.php"><span class="glyphicon glyphicon-picture"></span> Galerie</a></li><li class="dropdown">
                        <a href="javascript:void(0)"><span class="glyphicon glyphicon-picture"></span> Organisation</a>
                        <div class="dropdown-content"><a href="../userid19/workers_id19.php"><span class="glyphicon glyphicon-th"></span> Mitarbeiter</a><a href="../userid19/anfahrt_id19.php"><span class="glyphicon glyphicon-map-marker"></span> Anfahrt</a><a href="../userid19/impressum_id19.php"><span class="glyphicon glyphicon-road"></span> Impressum</a></div></li></ul>
            </nav>
          </div>
        </div><div class="custome_Christus"><h1>Christus jhhhhmm</h1>
</div><div class="custome_Jesus">Jesusmmm</div><div class="row">           <footer class="page-footer">              <div class="container-fluid">               <div class="row">                 <div class="col-sm-3">                 </div>                 <div class="col-sm-4">                    <p>Adresse:</br><span class="street">Pal-Straße</span></br> <span class="plz">66123</span></br><span class="ort">Palstadt</span></p>
                </div>
                <div class="col-sm-4">
                  <p><span class="tel">Tel:00000</span></br><span class="fax">Fax:00001</span></br> <span class="mail">E-Mail:Mustermail@muster.de</span></p> 
                </div>
              </div> 
            </div> 
          </footer>
        </div> 
      </div>
    </body>
</html>