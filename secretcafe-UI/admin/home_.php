<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        /* navbar background-color */
        .navbar-bg {
          background-image:url('images/navbar-bg.jpg');
        }  
        /* adjust navbar height */
        nav {height: 45px;line-height: 45px;}
        nav i, nav [class^="mdi-"], nav [class*="mdi-"], nav i.material-icons {height: 45px;line-height: 45px;}
        nav .button-collapse i {height: 45px;line-height: 45px;}
        nav .brand-logo {font-size: 1.6rem;}
        @media only screen and (min-width: 601px){
        nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {height: 45px;line-height: 45px;}}
        
        /* font-size of dropdown */
        #dropdown-food a:link {
          font-size:0.9rem;
          font-weight:700;
        }
        #dropdown-food a:hover {
          background-color:#fff9c4;
        }
      </style>
    </head>
    <body>
    <div class="row">
      <div class="navbar-fixed">
          <!-- Dropdown Structure -->
          <ul id="dropdown-food" class="dropdown-content yellow lighten-5">
            <li><a href="#!" class="grey darken-4 accent-1 white-text">Sign In</a></li>
            <li class="divider"></li>
            <li><a href="#!" class="black-text accent-1">Foods</a></li>
            <li><a href="#!" class="black-text accent-1">Drinks</a></li>  
            <li><a href="#!" class="black-text accent-1">Desserts</a></li>
            <li class="divider"></li>
            <li><a href="#!" class="black-text accent-1">Reservation</a></li>
          </ul>
          <nav class="z-depth-1 transparent navbar-bg">
              <div class="nav-wrapper">
                <div class="container">   
                  <a href="#" class="brand-logo left"><img src="images/logo.jpg" alt="logo" width="142" height="45"/></a>
                  <ul id="nav-mobile" class="right">
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown-food"><i class="material-icons">more_vert</i></a></li>
                  </ul>
                </div>
              </div>
          </nav>        
      </div>
    </div> 
    </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/bin/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bin/materialize.min.js"></script> 
      <script type="text/javascript">
        $(document).ready(function() {
             $(".button-collapse").sideNav();
             $(".dropdown-button").dropdown();
        });
      </script>
    </body>
  </html>
