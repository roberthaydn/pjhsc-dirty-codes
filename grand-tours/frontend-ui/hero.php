<?php 
class Hero {
    public static function Create() { return new Hero; }   
    public function __clone() {}
    public function __construct() {
?>
    <section class="section-1 hero">
        <div class="container">
            <div class="row"><div class="col-12 pad-hero"></div></div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="big-fonts-wrapper wow pulse" data-wow-delay="0.5s">
                        <h2 class="font-a">Welcome to</h2>
                        <h2 class="font-b"><div style="font-size:0.7em">vsGrandTours</div></h2>
                    </div>
                    <div class="caption-wrapper wow pulse" data-wow-delay="0.5s">
                        <!--<h2 class="font-a">Mug Cortado a</h2>-->
                        <p>We guarantee the <b> Best Service</b> across the Region.</p>
                    </div>
                    <div class="buttons-wrapper">
                        <!-- 

                        <a href="#!" class="button button-medium button-a wow fadeInLeft" data-wow-delay="0.5s">RISTRETTO</a>

                         -->
                        <a href="#!" class="button button-medium button-b wow fadeInLeft" data-wow-delay="0.5s">Read more ..
                            <img src="img/imgs/svg/playbutton.svg" class="img-fluid playbutton"/>
                        </a>
                    </div>
                    
                </div>
                <div class="col-12 col-lg-6">&nbsp;</div>
            </div>
            <div class="row"><div class="col-12 pad-hero"></div></div>
        </div>
    </section>

<?php }} ?>
