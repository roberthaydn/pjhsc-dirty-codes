<?php 
class Header {

    private $_menuItem;

    public static function Create($menuItemArr, $menuUserInfo) { return new Header($menuItemArr, $menuUserInfo); }   
    public function __clone() {}
    public function __construct($menuItemArr, $menuUserInfo) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>vsGrandTours</title>
    <!-- CDN LINKS -->
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- CDN LINKS -->
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="css/toastr.min.css">
    <!-- Pretty Checkbox -->
    <!-- CDN LINK -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">-->

    <style type="text/css">
        .header, .m-header {
            position:relative;
            z-index:999;
            border-bottom:1px solid #fff2e9;
        }
    </style>
</head>

<body>
    <header id="scroll-top" class="header">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="logo-wrapper">
                        <div class="text-left">
                            <img src="img/imgs/logo/logo-Gtours.png" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <!-- Menu --><!-- smooth-scroll -->
                    <div class="navi-menu-wrapper ">
                        <ul class="navi-menu-ul">
                            <?php                               
                                foreach($menuItemArr as $Item_Link) { 
                                    $Item_Link_Exploded = explode("|", $Item_Link);
                                    echo '<li class="navi-menu-item"><a href="'.$Item_Link_Exploded[1].'" class="'.strtolower($Item_Link_Exploded[0]).'">'.strtoupper($Item_Link_Exploded[2]).'</a></li>';      
                                }                
                            ?>          
                        </ul>
                    </div> <!-- End of Menu --> 
                </div>
                <!--<div class="col-5 col-lg-6">
                    <div class="phone-wrapper float-right">
                        <h2><span><i class="fa fa-phone fa-3"></i></span> 202-554-3126</h2>
                     </div> 
                </div>
                <div class="col-3 col-lg-2">
                    <div class="social-icons-wrapper float-right">
                        <ul class="social-icons-ul">
                            <li class="item-li"><a href="#!"><i class="fa fa-facebook fa-3"></i></a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-twitter fa-3"></i></a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-google-plus fa-3"></i></a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-youtube fa-3"></i></a></li>
                        </ul>
                     </div>  
                </div>-->        
            </div>
            <!--<div class="row">
                <div class="col-12">
                    
                </div>
            </div>-->
        </div>   
    </header>

    <header class="m-header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="m-logo-wrapper text-left">
                         <img src="img/imgs/logo/logo-Gtours.png" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="m-navicon-wrapper text-right">
                        <a href="#!" class="navicon-icon"><i class="fa fa-align-left fa-4"></i></a>
                    </div>      
                </div>
            </div>
            
            <div class="m-nav">
                <div class="row">
                    <div class="col-12">
                        <!-- Menu -->                   
                        <div class="m-navi-menu-wrapper">
                            <ul class="m-navi-menu-ul text-center">
                                <?php
                                    foreach($menuItemArr as $Item_Link) { 
                                       $Item_Link_Exploded = explode("|", $Item_Link);
                                       echo '<li class="m-navi-menu-item"><a href="'.$Item_Link_Exploded[1].'" class="'.strtolower($Item_Link_Exploded[0]).'">'.strtoupper($Item_Link_Exploded[2]).'</a></li>';      
                                    }
                                ?>
                            </ul>
                        </div> <!-- End of Menu --> 
                    </div>
                    <div class="col-6">
                        <div class="m-phone-wrapper float-right">
                            <h2><span><i class="fa fa-phone fa-3"></i></span> 202-554-3126</h2>
                         </div> 
                    </div>
                    <div class="col-6">
                        <div class="m-social-icons-wrapper">
                            <ul class="m-social-icons-ul">
                                <li class="m-item-li"><a href="#!"><i class="fa fa-facebook fa-2"></i></a></li>
                                <li class="m-item-li"><a href="#!"><i class="fa fa-twitter fa-2"></i></a></li>
                                <li class="m-item-li"><a href="#!"><i class="fa fa-google-plus fa-2"></i></a></li>
                                <li class="m-item-li"><a href="#!"><i class="fa fa-youtube fa-2"></i></a></li>
                            </ul>
                         </div>  
                    </div>
                </div>
            </div>
        </div>   
    </header>   

    <header class="header-user-info">
        <div class="container">
            <div class="row">
                <div class="col-12">   
                    <ul>                
                        <?php
                            foreach($menuUserInfo as $Item_Link) { 
                               $Item_Link_Exploded = explode("|", $Item_Link);
                               echo '<li class="user-info"><a href="'.$Item_Link_Exploded[1].'" class="'.$Item_Link_Exploded[0].'">'.strtoupper($Item_Link_Exploded[2]).'</a></li>';      
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>

<?php }

} ?>
