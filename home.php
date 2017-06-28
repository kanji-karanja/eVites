  <?php
  session_start();
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title> eVITER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/icon-font/pe-icon-7.css" rel="stylesheet">
    <script type="text/javascript" src="js/wow.js"></script>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    @import url(https://fonts.googleapis.com/css?family=Ubuntu|Courgette);
    @import url(http://weloveiconfonts.com/api/?family=entypo);    

    @font-face{
      font-family: UL;
      src: url('fonts/Ubuntu Light');
    }
    @green: #2ecc71;
    @green-dark: #27ae60;
    @facebook: #3b5998;
    @twitter: #56b4ef;
    @googleplus: #dd4b39;


    #navul a{
      font-family: Arizonia;
      font-size: 25px;
    }
    #content {
      background: #f9f9f9;
      background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
      background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
      -webkit-box-shadow: 0 1px 0 #fff inset;
      -moz-box-shadow: 0 1px 0 #fff inset;
      -ms-box-shadow: 0 1px 0 #fff inset;
      -o-box-shadow: 0 1px 0 #fff inset;
      box-shadow: 0 1px 0 #fff inset;
      border: 1px solid #c4c6ca;
      margin: 0 auto;
      padding: 25px 0 0;
      position: relative;
      text-align: center;
      text-shadow: 0 1px 0 #fff;
      width: 400px;
    }
    #content h1 {
      color: #7E7E7E;
      font: bold 25px Helvetica, Arial, sans-serif;
      letter-spacing: -0.05em;
      line-height: 20px;
      margin: 10px 0 30px;
    }
    #content h1:before,
    #content h1:after {
      content: "";
      height: 1px;
      position: absolute;
      top: 10px;
      width: 27%;
    }
    #content h1:after {
      background: rgb(126,126,126);
      background: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
      background: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      background: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      background: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      background: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      right: 0;
    }
    #content h1:before {
      background: rgb(126,126,126);
      background: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
      background: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      background: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      background: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      background: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
      left: 0;
    }
    #content:after,
    #content:before {
      background: #f9f9f9;
      background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
      background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
      border: 1px solid #c4c6ca;
      content: "";
      display: block;
      height: 100%;
      left: -1px;
      position: absolute;
      width: 100%;
    }
    #content:after {
      -webkit-transform: rotate(2deg);
      -moz-transform: rotate(2deg);
      -ms-transform: rotate(2deg);
      -o-transform: rotate(2deg);
      transform: rotate(2deg);
      top: 0;
      z-index: -1;
    }
    #content:before {
      -webkit-transform: rotate(-3deg);
      -moz-transform: rotate(-3deg);
      -ms-transform: rotate(-3deg);
      -o-transform: rotate(-3deg);
      transform: rotate(-3deg);
      top: 0;
      z-index: -2;
    }
    #content form { margin: 0 20px; position: relative }
    #content form input[type="text"],
    #content form input[type="password"] {
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      -ms-border-radius: 3px;
      -o-border-radius: 3px;
      border-radius: 3px;
      -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
      -moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
      -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
      -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
      box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -ms-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
      background: #eae7e7 url(https://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
      border: 1px solid #c8c8c8;
      color: #777;
      font: 13px Helvetica, Arial, sans-serif;
      margin: 0 0 10px;
      padding: 15px 10px 15px 40px;
      width: 80%;
    }
    #content form input[type="text"]:focus,
    #content form input[type="password"]:focus {
      -webkit-box-shadow: 0 0 2px #ed1c24 inset;
      -moz-box-shadow: 0 0 2px #ed1c24 inset;
      -ms-box-shadow: 0 0 2px #ed1c24 inset;
      -o-box-shadow: 0 0 2px #ed1c24 inset;
      box-shadow: 0 0 2px #ed1c24 inset;
      background-color: #fff;
      border: 1px solid #ed1c24;
      outline: none;
    }
    #username { background-position: 10px 10px !important }
    #password { background-position: 10px -53px !important }
    #content form input[type="submit"] {
      background: rgb(254,231,154);
      background: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
      background: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
      background: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
      background: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
      background: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      -ms-border-radius: 30px;
      -o-border-radius: 30px;
      border-radius: 30px;
      -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
      -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
      -ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
      -o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
      box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
      border: 1px solid #D69E31;
      color: #85592e;
      cursor: pointer;
      float: left;
      font: bold 15px Helvetica, Arial, sans-serif;
      height: 35px;
      margin: 20px 0 35px 15px;
      position: relative;
      text-shadow: 0 1px 0 rgba(255,255,255,0.5);
      width: 120px;
    }
    #content form input[type="submit"]:hover {
      background: rgb(254,193,81);
      background: -moz-linear-gradient(top,  rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
      background: -webkit-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
      background: -o-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
      background: -ms-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
      background: linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
    }
    #content form div a {
      color: #004a80;
      float: right;
      font-size: 12px;
      margin: 30px 15px 0 0;
      text-decoration: underline;
    }
    #content .button {
      background: rgb(247,249,250);
      background: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
      background: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
      background: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
      background: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
      background: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 );
      -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
      -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
      -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
      -o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
      box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
      -webkit-border-radius: 0 0 5px 5px;
      -moz-border-radius: 0 0 5px 5px;
      -o-border-radius: 0 0 5px 5px;
      -ms-border-radius: 0 0 5px 5px;
      border-radius: 0 0 5px 5px;
      border-top: 1px solid #CFD5D9;
      padding: 15px 0;
    }
    #content .button a {
      background: url(https://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;
      color: #7E7E7E;
      font-size: 17px;
      padding: 2px 0 2px 40px;
      text-decoration: none;
      -webkit-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease;
    }
    footer{
      transition: 3s;
    }
    @font-face{
      font-family: Arizonia;
      src: url('fonts/Arizonia-Regular.ttf');
    }
    @font-face{
      font-family: CD;
      src: url('fonts/CaviarDreams.ttf');

    }
    @font-face{
      font-family: CDB;
      src: url('fonts/Caviar_Dreams_Bold.ttf');
    }
    @-webkit-keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    .fadeIn {
      -webkit-animation-name: fadeIn;
      animation-name: fadeIn;
    }
    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        -ms-transform: translateY(-20px);
        transform: translateY(-20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
      }
    }

    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
    }

    .contact-form {
      margin-bottom: 50px;
    }
    .input-field {
      margin-bottom: 10px;
    }

    .form-control {
      border: 1px solid #ececec;
      border-radius: 0;
      box-shadow: none;
      color: #818181;
      font-size: 16px;
      height: 50px;
    }

    textarea.form-control {
      width: 100%;
      height: 150px;
    }

    #submit{
      color: white;
      text-shadow : 0 0 2px black;
      background-color:#C80000; 
      font-family: CD;

    }
    #submit:hover {
      color: green;
    }

    #submit:before {
      background-color: #0A85BB;
    }

    #submit.btn-effect:after {
      background: #2E2E2E;
    }

    .contact-details h3 {
      border-bottom: 5px solid #F26F70;
      font-weight: 700;
      margin-bottom: 15px;
      padding-bottom: 15px;
      text-transform: uppercase;
    }

    .contact-details p {
      line-height: 30px;
    }

    .contact-details p i {
      margin-right: 10px;
    }

    .contact-details span {
      display: block;
      margin-left: 24px;
    }
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      padding-top: 100px; 
      left: 0;
      top: 0;
      width: 98%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0,0.4); 
    }


    .modal-content {
      position: relative;
      background-image:url('images/bgmodal.png');
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 100%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    animatetop{
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
    }

    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }


    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: white;
      color: white;
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
      padding: 2px 16px;
      background-color: #A9A09F;
      color: white;
    }
    #logo
    {

      height: 100%; 
      vertical-align: middle;

    }
    @-webkit-keyframes fadeInLeft {
      0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }
    }

    @keyframes fadeInLeft {
      0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
      }
    }

    .fadeInLeft {
      -webkit-animation-name: fadeInLeft;
      animation-name: fadeInLeft;
    }
    @-webkit-keyframes fadeInRight {
      0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }
    }

    @keyframes fadeInRight {
      0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
      }
    }

    .fadeInRight {
      -webkit-animation-name: fadeInRight;
      animation-name: fadeInRight;
    }
    .selected {
      color: green;
      background-color: green;
    }
    .mySlides {display:none}

    /* Slideshow container */
    .slideshow-container {
      position: relative;
      height: 600px;
      padding: 0px;
      margin: 0px;
      top: 0px;
      list-style-type: none;
      transition: margin-Right 0.3s;
      bottom: 0px;

    }

    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }


    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }


    .dot {
      height: 13px;
      width: 13px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }

    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
    }
    #mySidenav{
      margin-top: 5%;
    }

    }
    </style>

  </head>
  <body>
    <!--
    <a id="home"></a>
    <a id="about"></a>
    <a id="contact"></a>
    <a id="eVite"></a>
  -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href=""><img id="profile" src="images/blankprofile.png" > 
        <a href="#" class="menu"><?php echo $_SESSION["name_of_user"]; ?></a>
        <!--a href="#" class="menu">Profile</a-->
        <a href="#" class="menu">Timeline</a>
        <a href="#" class="menu">Payment</a>
        <a href="index.php" class="menu")>Log out</a>

      </div>
      <div id="nav-top">

        <ul id ="navul">

          <li style="float: left; width: 15px;height: 15px;margin-top: -30px"> <a href="#"><img alt="profile image" src="images/logo/eViter.png"> </a></li >
            <li><a href="#home" ><i class="fa fa-home" style="margin-right: 5px;"></i><span> <span>Home</a>
            </li>
            <li><a href="#about">Profile</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#eVite">Send eVite</a></li>
            <li><a id = "snav" href = "#" onclick="openNav()">&#9776; </a></li>
          </ul>

        </div>

        <div class = "panel" id="home">

          <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="images/backslide.png" style="width:100%">
              <div class="text" style="color:#EC87A1; font-family: CDB; font-size: 55px; background-color: #FEF8EC;">Kid's Parties</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="images/invite1.png" style="width:100%">
              <div class="text" style="color:#BC994E; font-family: CDB; font-size: 34px;">Our online invites </div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="images/congrats.png" style="width:100%">
              <div class="text" style="color:black; font-family: CDB; font-size: 34px;float:left;"></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>
          <br>

          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>


          <div class="panel">
           <div class="row" >
            <div class="col-md-12 text-center aboutheader">
              <h1 class="section-header " style="font-family: CDB;" id="about">About Our eVite<span class="underline animated" data-animation="fullWidth"></span></h1>

            </div>
          </div>

          <div class="row">

            <div class="col-md-5 col-sm-12 contentabout" style="color: grey;font-family:CD;font-size: 20px">
              <p>We povide a platform for you to share your events to your friends and family.</p>
              <p>You can send your invites at the touch of a button
              </div>


              <div class="col-md-7 hidden-xs hidden-sm">

                <div class="img-full animated" ><img src="images/imac2.png" height="10%" width="100%" alt=""></div>

              </div>
            </div>

          </div>

          <div class = "panel" id="contact">
           <div class="row"> 
             <div class="col-md-12 text-center ">
              <p><h1 class="text-center section-header2" style="font-family: CDB;">Talk to Us</h1></p>
            </div>
          </div>
          <div class="row">
            <div class="text-center wow animated fadeInDown">
              <p class="message" style="color:grey;font-family:CDB;font-size: 18px;">Leave a Message</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 contact-form wow animated fadeInLeft">
              <form action="#" method="post">
                <div class="input-field">
                  <input type="text" name="name" class="form-control" placeholder="Your Name...">
                </div>
                <div class="input-field">
                  <input type="email" name="email" class="form-control" placeholder="Your Email...">
                </div>
                <div class="input-field">
                  <input type="text" name="subject" class="form-control" placeholder="Subject...">
                </div>
                <div class="input-field">
                  <textarea name="message" class="form-control" placeholder="Write something.." onkeyup="adjust_textarea(this)"></textarea>
                </div>
                <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
              </form>
            </div>
            <div class="col-md-5 wow animated fadeInRight">
              <address class="contact-details">
                <h3>Contact Us</h3>           
                <p style="color:grey;"><i class="fa fa-pencil"></i>eViter <span>50, Ole Sangale Road,Madaraka</span> <span>Nairobi</span></p><br>
                <p style="color:grey;"> <i class="fa fa-phone"></i>+91 94884 87853</p>
                <p style="color:grey;"><i class="fa fa-envelope"></i>eViter@gmail.com</p>
              </address>
            </div>
          </div>
          <script type="text/javascript">

          function adjust_textarea(h) {
            h.style.height = "45px";
            h.style.height = (h.scrollHeight)+"px";
          }
          </script>




        </div>

        <div class = "panel" id="eVite">

         <section class="testimonials wrapper">
          <div class="text-center title animated wow fadeIn">
            <h2 style="font-family: CD;">Featured eVites and Designs</h2>
            <hr class="separator" style="width: 180px;display: block;width: 40px;height: 1px;background-color: #ebebeb;margin:0 auto;padding: 0;">
          </div>

          <ul class="clearfix">
            <li class="animated wow fadeInDown">
              <p>
                <img src="images/card3.jpg">
                <span class="triangle"></span>
              </p>
              <div class="client">
                <img src="img/client1.jpg" class="avatar"/>
                <div class="client_details">
                  <h4><a href="#">Graduation </a></h4>
                  <h5><a href="#">Premium</a></h5>
                </div>
              </div>
            </li>

            <li class="animated wow fadeInDown"  data-wow-delay=".2s">
              <p>
                <img src="images/card2.jpg">
                <span class="triangle"></span>
              </p>
              <div class="client">
                <img src="img/client2.jpg" class="avatar"/>
                <div class="client_details">
                  <h4>Anniversary Cards</h4>
                  <h5>Premium</h5>
                </div>
              </div>
            </li>

            <li class="animated wow fadeInDown"  data-wow-delay=".4s">
              <p>
                <img src="images/card7.jpg">
                <span class="triangle"></span>
              </p>
              <div class="client">
                <img src="img/client3.jpg" class="avatar"/>
                <div class="client_details">
                  <h4>Birthday Cards</h4>
                  <h5>Free</h5>
                </div>
              </div>
            </li>
          </ul>
        </section>


      </div>
      <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mySlides").style.marginRight = "250px";
        document.getElementById("navul").style.width = "100&";

      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySlides").style.marginRight = "0px";
        document.getElementById("navul").style.width = "0%";

      }
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
       }
       slideIndex++;
       if (slideIndex> slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); 
      }
      </script>





      <div id="myModal" class="modal">


        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>

          </div>
          <div class="modal-body">

            <div class="aa">
              <h2 >Log In</h2>
              <form action="" method="post">
                <input type="text" placeholder=" Enter your username..." name="username"> <br><br>
                <input type="password" placeholder="Enter your password..." name="password"> <br><br>
                <input type="submit" value="Log in" name="login"> 

              </form>
              <?php
              if(isset($_POST['login'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $conn = new mysqli("localhost","root","","eVites");
                if($conn->connect_error){
                  die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  echo 'Logging in';
                  session_start();
                  while($row = $result->fetch_assoc()) {
                    $_SESSION["name_of_user"] =  $row["User_Name"];
                  }
                }
                else
                {
                  echo 'No such username or password exists. Please try again.';
                }
              }
              ?>
              <a href="#" class="button">Register</a>          
            </div>








          </div>


        </div>






      </div>

      <script>
  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn = document.getElementById("sign");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
  <footer>

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p>Copyright © eViter| Design</p>
        <hr>
        <ul class="social-icon">
          <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
          <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
          <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
        </ul>
      </div>
    </div>

  </footer>
</body>

</html>