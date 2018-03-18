<?php 
class Footer {
    public static function Create() { return new Footer; }   
    public function __clone() {}
    public function __construct() {
?>
    <footer class="footer-main">
        <div class="container">
            <div class="row"><div class="col-12 footer-pad"></div></div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <!-- first flinks -->
                    <div class="title-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="title">MAIN MENU</h2>
                    </div>
                    <div class="list-ul-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="list-ul text-uppercase">
                            <li class="item-li"><a href="index.php">Home</a></li>
                            <li class="item-li"><a href="index.php#service">Services</a></li>
                            <li class="item-li"><a href="index.php#station">Station</a></li>
                            <li class="item-li"><a href="index.php#drivers">Drivers</a></li>
                            <li class="item-li"><a href="reservation.php">LOGIN</a></li>
                            <!--<li class="item-li"><a href="admin.php">Admin</a></li>-->
                        </ul>
                    </div>
                    <!-- first flinks -->
                </div>
                
                <!--<div class="col-12 col-sm-6 col-md-3">
                    second flinks -->
                    <!--<div class="title-wrapper wow fadeInUp" data-wow-delay="0.5s">                   
                        <h2 class="title">BLACK GRINDER ROAST</h2>
                    </div>
                    <div class="list-ul-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="list-ul text-uppercase">
                            <li class="item-li"><a href="#!">MAZAGRAN CULTIVAR</a></li>
                            <li class="item-li"><a href="#!">AMERICANO CAPPUCCINO</a></li>
                            <li class="item-li"><a href="#!">WHIPPED PUMPKIN SPICE</a></li>
                            <li class="item-li"><a href="#!">ACERBIC ROBUST</a></li>
                            <li class="item-li"><a href="#!">AU LAIT SAUCER</a></li>
                            <li class="item-li"><a href="#!">CULTIVAR MEDIUM TRIFECTA</a></li>
                            <li class="item-li"><a href="#!">EXTRACTION CREAM</a></li>
                            <li class="item-li"><a href="#!">REDEYE SINGLE ORIGIN</a></li>
                            <li class="item-li"><a href="#!">GROUNDS WINGS</a></li>
                            <li class="item-li"><a href="#!">STRONG EU SIPHON</a></li>
                        </ul>
                    </div>
                    second flinks 
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                     third flinks 
                    <div class="title-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="title">MACCHIATO SWEET MOCHA</h2>
                    </div>
                    <div class="list-ul-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="list-ul text-uppercase">
                            <li class="item-li"><a href="#!">AR CAPPUCCINO</a></li>
                            <li class="item-li"><a href="#!">CARAMELIZATION</a></li>
                            <li class="item-li"><a href="#!">PANNA BLACK WINGS</a></li>
                            <li class="item-li"><a href="#!">ORGANIC COFFEE SINGLE</a></li>
                            <li class="item-li"><a href="#!">MAZAGRAN</a></li>
                        </ul>
                    </div>
                third flinks 
                </div>
            -->
                <div class="col-12 col-sm-6 col-md-3">
                    <!-- fourth flinks -->
                    <div class="title-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="title">CONTACT US:</h2>
                    </div>
                    <div class="list-ul-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="list-ul text-uppercase">
                            <li class="item-li"><a href="#!"><i class="fa fa-phone"></i>&nbsp; PHONE: 202-554-3126</a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-send-o"></i>&nbsp; EMAIL: VSGRANDTOURS@GMAIL.COM</a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-map-marker"></i>&nbsp; San Bartholomew St., Catbalogan City, Samar </a></li>
                        </ul>
                    </div>
                    <!-- fourth flinks -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="social-icons-wrapper text-center wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="social-icons-ul">
                            <li class="item-li"><a href="#!"><i class="fa fa-facebook fa-4"></i></a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-twitter fa-4"></i></a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-google-plus fa-4"></i></a></li>
                            <li class="item-li"><a href="#!"><i class="fa fa-youtube fa-4"></i></a></li>
                        </ul>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-txt wow fadeInUp" data-wow-delay="0.5s">
                        <p class="text-center">Copyright © Information System 4-B</p>
                    </div>
                </div>
            </div>
            <div class="row"><div class="col-12 footer-pad"></div></div>
        </div>
    </footer>

    <div class="smooth-scroll">
      <a href="#scroll-top">
        <div class="back-to-top z-depth-1">
            <i class="fa fa-arrow-up fa-2"></i>
        </div>
      </a>     
    </div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Swiper -->
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <!-- Toastr -->
    <script type="text/javascript" src="js/toastr.min.js"></script>
    
    <!-- init -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*** Var Colors ***/
            var color_a = '#f57c00',
                color_b = '#ffe3c5',
                color_c = '#1c110b',
                color_d = '#5d5d5d',
                color_e = '#fff2e9';
         
        /*** Section 4 - Hover ***/
        /*function cardHover(card) {
            $(card).hover(function() {
                // change image1 to ex.image 1.1 on mouse hover
                //set data_id specific value
                var dataId = $(this).attr('data-id');  
                var num = '-' + dataId;
                //get original specific image attr 
                var img = $(this).find('img').attr('src');
                //remove last 4 characters of the image selected 
                var imgNoExtension = img.slice(0, -4);
                // change img - on focus 
                $(this).find('img').attr('src', imgNoExtension + num + '.svg');  

                // text-hover - on focus 
                $(this).find('h2.font-a, p').css({'color' : color_c}); 
            },
            function() {
                // change image1 to image 1.1 on mouse out
                //set data_id specific value
                var dataId = $(this).attr('data-id');  
                var imgOriginal = ''; 
                //set back to original value of the specific image attr
                var i;
                for(i=1; i<=11; i++)
                {
                    dataId==i ? imgOriginal = 'img/imgs/svg/item-'+ i +'.svg' : null;
                }   
                //set original image value 
                $(this).find('img').attr('src', imgOriginal);  
                // text-hover on mouse out
                $(this).find('h2.font-a').css({'color' : color_b});
                $(this).find('p').css({'color' : color_e});       
            });
        } 
        cardHover('.card-custom');
        */

        //cardHover('.card-custom');

        /*** Section 5 ***/
        function slider(swiperContainer) {
            /*** Swiper slide ***/
            var swiper = new Swiper(swiperContainer, {
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 1,
                paginationClickable: true,
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: 7000,
                autoplayDisableOnInteraction: true,
                loop: true
            });
        }
        slider('.swiper-container');

        /*** Header-m - Navicon toggle ***/
        function navicon(navicon, nav) {
            $(navicon).click(function() {
                $(nav).slideToggle('fast');
            });
        }
        navicon('.navicon-icon', '.m-nav');

        /*** back to top smooth-scroll ***/
        function scrollBackToTop(backToTop, scrollSmooth) {
            //scroll percentage
            $(window).scroll(function() {
                var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());               
                if(scrollPercent > 2) {
                   $(backToTop).css({'display' : 'block'}).addClass('animated fadeInDown');
                   $(backToTop).addClass('animated fadeInUp'); 
                } else {
                   $(backToTop).slideUp(300);
                }

                //console.log($(window).scrollTop());
                //console.log($(document).height());
                //console.log($(window).height());
            });
            //smooth
            $(scrollSmooth).on('click', 'a', function (event) {
                event.preventDefault();
                var elAttr = $(this).attr('href'),
                    offset = ($(this).data('offset') ? $(this).data('offset') : 0);
                $('body,html').animate({
                    scrollTop: $(elAttr).offset().top + offset
                }, 700);
            }); 
        }
        scrollBackToTop('.back-to-top', '.smooth-scroll');

       /* function scrollSmooth(scrollSmooth) {
            $(scrollSmooth).on('click', 'a', function (event) {
                event.preventDefault();
                var elAttr = $(this).attr('href'),
                    offset = ($(this).data('offset') ? $(this).data('offset') : 0);
                $('body,html').animate({
                    scrollTop: $(elAttr).offset().top + offset
                }, 700);
            }); 
        }*/
       // scrollSmooth('#service, #station, #drivers');

        /*** Init Animation ***/
        function removeAnimationIESafari() {
            //If the user is using Internet Explorer or Safari
            if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1) || (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1))
            {
                //remove animation
            } 
            else 
            {
                new WOW().init();
            }
        }
        removeAnimationIESafari();        

        function labelFocus() {
            $('label').on('click', function() {
                var label = $(this);
                var input = label.siblings('input')[0];

                label.addClass('active');
                input.focus();        
            }); 
        }
        labelFocus();

        });
    </script>
</body>
</html>

<?php }} ?>
