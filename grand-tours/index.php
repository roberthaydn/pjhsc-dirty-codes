<?php 

require_once './frontend-ui/header.php';
require_once './frontend-ui/footer.php';
require_once './frontend-ui/hero.php';

    //Header Initialization
    Header::Create(
        //Create links and display an items for the main menu
        //to separate the link and item, you must add "|"...
        //ex.
        // link               item(display text)
        // active|https://google.com|google 
        //MAIN MENU
        array(
            'active|index.php|HOME', 
            'inactive|#service|Service',
            'inactive|#station|Station',
            'inactive|#drivers|Drivers',
            'inactive|reservation.php|Log In'            
        ),

        //USER INFO
        array(
            'inactive|#!| '
        )
    );

    //Hero Image Init
    Hero::Create();
?>
    <style>
        .header-user-info {display:none;}
    </style>

<!--
<section class="section-info-1">
    <div class="container">
        <div class="row">
            <div class="col-4 col-md-1">
                <img src="img/imgs/svg/icon-1.svg" class="img-fluid icon-1 mt-4 mb-4 float-right wow pulse" data-wow-delay="0.5s"/>
            </div>
            <div class="col-8 col-md-4">
                <div class="info-wrapper mt-4 mb-4 wow pulse" data-wow-delay="0.5s">
                    <h2>Robusta cream sugar</h2>
                    <p>Cup, ut half and half foam chicory body robusta cappuccino that caffeine.</p>
                </div>
            </div>
            <div class="col-4 col-md-1">
                <img src="img/imgs/svg/icon-2.svg" class="img-fluid icon-2 mt-4 mb-4 float-right wow pulse" data-wow-delay="0.5s"/>
            </div>
            <div class="col-8 col-md-4">
                <div class="info-wrapper mt-4 mb-4 wow pulse" data-wow-delay="0.5s">
                    <h2>Breve french press froth</h2>
                    <p>Crema white dark shop filter aged sweet a saucer cappuccino qui sugar acerbic.</p>
                </div>
            </div>
            <div class="col-12 col-md-2">
                <div class="button-wrapper mt-4 mb-4 wow pulse" data-wow-delay="0.5s">
                    <a href="#!" class="button button-medium button-a waves-effect"> &nbsp;ROBUSTA&nbsp; </a>
                </div>
            </div>
        </div>
    </div>
</section>
-->


<section class="section-2" id="service">
    <div class="container">
        <div class="row"><div class="col-12 pad"></div></div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-6">
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <div class="big-fonts-wrapper">
                    <h2 class="font-a">Why choose GTours ?</h2>
                </div>

                <div class="list-wrapper">
                    <ul class="list-ul">
                        <li class="item-li wow fadeInUp" data-wow-delay="0.5s"><i class="fa fa-check fa-4"></i><span><b>Book</b> a trip right now.</span></li>
                        <li class="item-li wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-check fa-4"></i><span><b>Relax</b> & leave the driving to us!</span></li>
                        <li class="item-li wow fadeInUp" data-wow-delay="0.7s"><i class="fa fa-check fa-4"></i><span>Providing <b>quality</b> service at <b>unbeatable</b> rates.</span></li>
                        <li class="item-li wow fadeInUp" data-wow-delay="0.8s"><i class="fa fa-check fa-4"></i><span>There's no <b>Alas-Puno</b> in our watches.</span></li>
                        <li class="item-li wow fadeInUp" data-wow-delay="0.9s"><i class="fa fa-check fa-4"></i><span>We'll take you to your destination <b>on-time.</b></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row"><div class="col-12 pad"></div></div>
    </div>
</section>

<!--
<section class="section-3">
    <div class="container">
        <div class="row"><div class="col-12 pad"></div></div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="big-fonts-wrapper">
                    <h2 class="font-a">Crema Aroma</h2>
                    <p>Variety mocha saucer dripper saucer wings. Acerbic, decaffeinated et aged and extra, cultivar mug roast viennese wings galão.</p>
                </div>
                <div class="figure-wrapper wow pulse" data-wow-delay="1s">
                    <img src="img/imgs/svg/beans-coffee.svg" class="img-fluid"/>
                </div>
                <div class="medium-fonts-wrapper">
                    <h2 class="medium-font">Mug coffee java turkish cortado roast</h2>                 
                </div>
                <div class="button-wrapper">
                    <a href="#!" class="button button-medium button-a waves-effect wow pulse" data-wow-delay="0.5s">ESPRESSO</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="figure-wrapper-coffee wow pulse" data-wow-delay="3s">
                    <img src="img/imgs/png/coffee.png" class="img-fluid"/>
                </div>
            </div>
        </div>
        <div class="row"><div class="col-12 pad"></div></div>
    </div>
</section>
-->

<!--<section class="section-4">
    <div class="container">
        <div class="row"><div class="col-12 pad"></div></div>
        <div class="row">
            <div class="col-12">
                <div class="medium-fonts-wrapper">
                    <h2 class="medium-font text-center">Cream Frappuccino Mazagran</h2>
                    <p class="text-center">Cream sweet saucer cappuccino foam crema half sweet plunger pot grounds. Ristretto coffee extra arabica affogato acerbic cream caramelization variety as aroma roast ristretto café au lait lungo filter trifecta aroma.</p>
                </div>
            </div>
        </div> -->

        <!-- row 1 -->
        <!--<div class="row">
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="1">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-1.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Qui Brewed</h2>
                            <p>Aroma roast ristretto. Bar aroma at cup affogato.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="2">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-2.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Sugar Affogato</h2>
                            <p>Carajillo rich americano redeye siphon galão body robust.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="3">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-3.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Crema Turkish</h2>
                            <p>Filter variety flavour cup kopi-luwak chicory café au lait cream.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="4">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-4.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Arabica Siphon</h2>
                            <p>Tair trade, organic eu brewed crema whipped coffee grinder.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="5">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-5.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Panna Viennese</h2>
                            <p>Seasonal so to go qui sed frappuccino dark.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="6">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-6.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Irish Cup</h2>
                            <p>Mug roast et, aged milk percolator brewed cortado.</p>
                        </div>
                    </div>
                </a>
            </div> -->
            <!--<div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="7">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-7.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Crema Sweet</h2>
                            <p>Latte wings java beans aroma carajillo barista americano.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="8">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-8.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Coffee Variety</h2>
                            <p>Aroma roast ristretto. Bar aroma at cup affogato.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="9">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-9.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Java Grinder</h2>
                            <p>Dripper mocha arabica roast aftertaste id acerbic sugar extra.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="10">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-10.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">Whipped Doppio</h2>
                            <p>Fair trade at so aged dripper seasonal robusta. Grinder.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#!">
                    <div class="card-custom waves-effect wow fadeInUp" data-wow-delay="0.5s" data-id="11">
                        <div class="item-wrapper">
                            <img src="img/imgs/svg/item-11.svg" class="img-fluid"/>
                        </div>
                        <div class="card-txt">
                            <h2 class="font-a">French Press</h2>
                            <p>Bar robust extra roast seasonal kopi-luwak arabica.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row"><div class="col-12 pad"></div></div>
    </div>
</section>
-->
<section class="section-5" id="station">
    <div class="container">
        <div class="row"><div class="col-12 pad"></div></div>
        <div class="row">
            <div class="col-12">
                <div class="medium-fonts-wrapper">
                    <h2 class="medium-font text-center">Our Station and Address</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-wrapper">    
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img/imgs/jpg/slide-1.jpg" class="img-fluid"/></div>
                            <div class="swiper-slide"><img src="img/imgs/jpg/slide-2.jpg" class="img-fluid"/></div>
                            <div class="swiper-slide"><img src="img/imgs/jpg/slide-3.jpg" class="img-fluid"/></div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"><div class="col-12 pad"></div></div>
    </div>
</section>

<section class="section-6" id="drivers">
    <div class="container">
        <div class="row"><div class="col-12 pad"></div></div>
        <div class="row">
            <div class="col-12">
                <div class="medium-fonts-wrapper">
                    <h2 class="medium-font text-center">Our Driver's</h2>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">   
                <div class="slider-comments-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="media mt-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/imgs/jpg/profile-1.png" class="img-fluid img-profile"/> 
                                <div class="media-body ml-4">                                       
                                 <p class="comment"><b>Plate #</b> : HVU 111</p> 
                                    <p class="name"><b>Driver</b> : Abapo, Christ Joseph R.</p>   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="media mt-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/imgs/jpg/profile-1.png" class="img-fluid img-profile"/> 
                                <div class="media-body ml-4">                                       
                                    <p class="comment"><b>Plate #</b> : HVU 162</p>
                                    <p class="name"><b>Driver</b> : Abordo Jr., Lucio D.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="media mt-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/imgs/jpg/profile-1.png" class="img-fluid img-profile"/> 
                                <div class="media-body ml-4">                                       
                                    <p class="comment"><b>Plate # </b> : HVS 701 </p>
                                    <p class="name"><b>Driver </b> : Abrilla, Micheal A.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="media mt-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/imgs/jpg/profile-1.png" class="img-fluid img-profile"/> 
                                <div class="media-body ml-4">                                       
                                    <p class="comment"><b>Plate # </b> : ABF 2813</p>
                                    <p class="name"><b>Driver</b> : Adarayan, Vicente J.</p>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of slider comments wrapper -->
            </div>
        </div>

        <div class="row"><div class="col-12 pad"></div></div>
    </div>
</section>

<!--
<section class="section-info-2">
    <div class="container">
        <div class="row">
            <div class="col-4 col-md-1">
                <img src="img/imgs/svg/icon-3.svg" class="img-fluid icon-1 mt-4 mb-4 float-right wow pulse" data-wow-delay="0.5s"/>
            </div>
            <div class="col-8 col-md-4">
                <div class="info-wrapper mt-4 mb-4 wow pulse" data-wow-delay="0.5s">
                    <h2>Robusta cream sugar</h2>
                    <p>Cup, ut half and half foam chicory body robusta cappuccino that caffeine.</p>
                </div>
            </div>
            <div class="col-4 col-md-1">
                <img src="img/imgs/svg/icon-4.svg" class="img-fluid icon-2 mt-4 mb-4 float-right wow pulse" data-wow-delay="0.5s"/>
            </div>
            <div class="col-8 col-md-4">
                <div class="info-wrapper mt-4 mb-4 wow pulse" data-wow-delay="0.5s">
                    <h2>Breve french press froth</h2>
                    <p>Crema white dark shop filter aged sweet a saucer cappuccino qui sugar acerbic.</p>
                </div>
            </div>
            <div class="col-12 col-md-2">
                <div class="button-wrapper mt-4 mb-4 wow pulse" data-wow-delay="0.5s">
                    <a href="#!" class="button button-medium button-a waves-light"> &nbsp;ROBUSTA&nbsp; </a>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<?php
    //Footer Init
    Footer::Create();
?>
