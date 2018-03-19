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
        .title-bg {
            background-image:url('images/bg-color-transparent.png');
        }
        .add-to-cart {
            padding:14px !important;
        }
        body {
          background-color:#fffde7;
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
            <li class="page-scroll"><a href="#foods" class="black-text accent-1">Foods</a></li>
            <li class="page-scroll"><a href="#drinks" class="black-text accent-1">Drinks</a></li>  
            <li class="page-scroll"><a href="#desserts" class="black-text accent-1">Desserts</a></li>
            <li class="divider"></li>
            <li><a href="#!" class="black-text accent-1">Reservation</a></li>
          </ul>
          <nav class="z-depth-1 transparent navbar-bg">
              <div class="nav-wrapper">
                <div class="container">   
                  <a href="<?=$_SERVER['PHP_SELF'];?>" class="brand-logo left"><img src="images/logo.jpg" alt="logo" width="142" height="45"/></a>
                  <ul id="nav-mobile" class="right">
                    <li><a class="waves-effect" href="#!"><i class="material-icons white-text">shopping_cart</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown-food"><i class="material-icons">more_vert</i></a></li>
                  </ul>
                </div>
              </div>
          </nav>        
      </div>
    </div>

    <div class="container" style="margin-top:-32px;">
        <div class="row">   
            <div class="col s12">
                <div class="card white">
                    <div id="foods" class="center"><h4 style="padding:10px;">Foods</h4></div>
                </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/a1.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Pasta Chickpeas</span></div>
                </div>
                <div class="card-content">
                    <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 245.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                    </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Meat Loaf<i class="material-icons right">close</i></span>
                   <p>Sweet roll candy canes chupa chups brownie cheesecake lollipop brownie powder marzipan. Wafer dragée pastry cookie.</p>
                   <h5 class="light">₱ 245.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <a href="#modal1" class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </a>  
                    </div>
                </div>
              </div>             
            </div>

            <!-- modal 1 -->
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <div class="col s12 l12 m12">
                       <h5>Pasta Chickpeas</h5>
                       <h5 class="light">₱ 245.00</h5>
                       <img src="./images/foods/a1.jpg" class="responsive-img"/>
                       <p>Toffee sweet sweet jelly beans gummies halvah cake. Candy canes halvah halvah icing pie. Marzipan caramels chocolate cake cookie sesame snaps.</p> 
                    </div>
                </div>     
                <div class="modal-footer">
                   <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="padding-left:5px;padding-right:5px;">Cancel</a>
                   <a href="#!" class="modal-action modal-close waves-effect waves-light amber accent-2 black-text btn-flat toasted" style="padding-left:5px;padding-right:5px;">Add to Cart</a>
                </div>
            </div>
            <!--end of first box -->

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/a2.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Pork</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 250.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Meat Loaf<i class="material-icons right">close</i></span>
                   <p>Toffee sweet sweet jelly beans gummies halvah cake. Candy canes halvah halvah icing pie. Marzipan caramels chocolate cake cookie sesame snaps.</p>
                   <h5 class="light">₱ 250.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <a href="#modal2" class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </a>  
                    </div>
                </div>
              </div>          
            </div> 

            <!-- modal 2 -->
            <div id="modal2" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <div class="col s12 l12 m12">
                       <h5>Meat Loaf</h5>
                       <h5 class="light">₱ 250.00</h5>
                       <img src="./images/foods/a2.jpg" class="responsive-img"/>
                       <p>Toffee sweet sweet jelly beans gummies halvah cake. Candy canes halvah halvah icing pie. Marzipan caramels chocolate cake cookie sesame snaps.</p> 
                    </div>
                </div>     
                <div class="modal-footer">
                   <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="padding-left:5px;padding-right:5px;">Cancel</a>
                   <a href="#!" class="modal-action modal-close waves-effect waves-light amber accent-2 black-text btn-flat toasted" style="padding-left:5px;padding-right:5px;">Add to Cart</a>
                </div>
            </div>


            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/a3.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Special Pasta</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 180.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Meat Loaf<i class="material-icons right">close</i></span>
                   <p>Biscuit danish cake macaroon marzipan brownie sesame snaps chocolate cake sweet roll. Powder pie.</p>
                   <h5 class="light">₱ 180.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <button class="btn waves-effect waves-light amber accent-2 black-text disabled" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </button>  
                    </div>
                </div>
              </div>
            </div> 

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/a4.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Spaghetti</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 90.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Meat Loaf<i class="material-icons right">close</i></span>
                   <p>Biscuit danish cake macaroon marzipan brownie sesame snaps chocolate cake sweet roll. Powder pie.</p>
                   <h5 class="light">₱ 90.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <button class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </button>  
                    </div>
                </div>
              </div>
            </div>

            <div class="col s12">
                <div class="card white">
                    <div id="drinks" class="center"><h4 style="padding:10px;">Drinks</h4></div>
                </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/b1.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Coffe Creamy Latte</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 145.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Meat Loaf<i class="material-icons right">close</i></span>
                   <p>Biscuit danish cake macaroon marzipan brownie sesame snaps chocolate cake sweet roll. Powder pie.</p>
                   <h5 class="light">₱ 145.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <button class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </button>  
                    </div>
                </div>
              </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/b2.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Orange Juice</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 75.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Meat Loaf<i class="material-icons right">close</i></span>
                   <p>Biscuit danish cake macaroon marzipan brownie sesame snaps chocolate cake sweet roll. Powder pie.</p>
                   <h5 class="light">₱ 75.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <button class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </button>  
                    </div>
                </div>
              </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/b3.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Lemon Juice</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 50.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Meat Loaf<i class="material-icons right">close</i></span>
                   <p>Biscuit danish cake macaroon marzipan brownie sesame snaps chocolate cake sweet roll. Powder pie.</p>
                   <h5 class="light">₱ 50.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <button class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </button>  
                    </div>
                </div>
              </div>
            </div>

            <div class="col s12">
                <div class="card white">
                    <div id="desserts" class="center"><h4 style="padding:10px;">Desserts</h4></div>
                </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/c1.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Chocolate cream</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 320.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Chocolate cream<i class="material-icons right">close</i></span>
                   <p>Biscuit danish cake macaroon marzipan brownie sesame snaps chocolate cake sweet roll. Powder pie.</p>
                   <h5 class="light">₱ 320.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <button class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </button>  
                    </div>
                </div>
              </div>
            </div>

            <div class="col l4 m6 s12">
              <div class="card small white">
                <div class="card-image">
                   <img src="./images/foods/c2.jpg" class="activator responsive-img"/>
                   <div><span class="card-title title-bg" style="font-size:18px;">Cake Berries</span></div>
                </div>
                <div class="card-content">
                  <div class="" style="margin-top:-15px;">
                      <h5 class="light left">₱ 490.00</h5>
                      <span class="card-title activator grey-text text-darken-4 right"><i class="material-icons">subject</i></span> 
                  </div>                 
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Berries<i class="material-icons right">close</i></span>
                   <p>Biscuit danish cake macaroon marzipan brownie sesame snaps chocolate cake sweet roll. Powder pie.</p>
                   <h5 class="light">₱ 490.00</h5>
                </div>
                <div class="card-action add-to-cart">
                    <div class="center">
                      <button class="btn waves-effect waves-light amber accent-2 black-text" type="submit" name="action">
                        Order
                        <!--<i class="material-icons right">shopping_cart</i>-->
                      </button>  
                    </div>
                </div>
              </div>
            </div>

            <Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br>
      </div>
    </div>

    <!-- side nav -->
      <ul id="slide-out" class="side-nav">
        <li>
            <div class="userView">
              <div class="background">
                <img src="images/side-nav-header-bg.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/profile-pic.jpg" style="border:3px solid white"></a>
              <a href="#!name"><span class="white-text name">Hayley Williams</span></a>
              <a href="#!email"><span class="white-text email">hayley143@gmail.com</span></a>
            </div>
        </li>

        <li><a href="#!"><i class="material-icons black-text">account_box</i>Account Settings</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Balance: <strong class="blue-text">₱ 890.00</strong></a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Activity</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons black-text">shopping_cart</i>Order Cart</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons black-text">assignment</i>Reservation</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons black-text">settings_power</i>Log Out</a></li>
      </ul>

      <div class="fixed-action-btn toolbar">
            <a class="button-collapse btn-floating btn-large z-depth-4" data-activates="slide-out">
              <i class="large material-icons grey darken-4 white-text waves-effect waves-block waves-light">account_box</i>
            </a>
      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/bin/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bin/materialize.min.js"></script> 
      <!-- Plugin JavaScript -->
      <script type="text/javascript" src="js/bin/easing.js"></script>
      <!-- Theme JavaScript -->
      <script type="text/javascript" src="js/bin/freelancer.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {               
            //initialize dropdown
            $(".dropdown-button").dropdown();

            //toast
            $('.toasted').click(function() {
             // Materialize.toast(message, displayLength, className, completeCallback);
             //Materialize.toast('I am a toast!', 4000) // 4000 is the duration of the toast
             Materialize.toast('<span class="light-green-text accent-1"><strong>Added to Cart!</span></strong>', 2500, 'rounded') // 'rounded' is the class I'm applying to the toast
            }); 

            // SideNav
            // Initialize collapse button
            // $(".button-collapse").sideNav();
            // Initialize collapsible (uncomment the line below if you use the dropdown variation)
            //$('.collapsible').collapsible(); 
            $('.button-collapse').sideNav({
                  menuWidth: 245, // Default is 240
                  edge: 'left', // Choose the horizontal origin
                  closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                  draggable: true // Choose whether you can drag to open on touch screens
            });

            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal({
                  dismissible: true, // Modal can be dismissed by clicking outside of the modal
                  opacity: .8, // Opacity of modal background
                  in_duration: 300, // Transition in duration
                  out_duration: 200, // Transition out duration
                  starting_top: '4%', // Starting top style attribute
                  ending_top: '10%', // Ending top style attribute
                  ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    //alert("Ready");
                    console.log(modal, trigger);
                  },
                  complete: function() { /*alert('Closed');*/ } // Callback for Modal close
                }
            );
        });        
        </script>
    </body>
  </html>
