<?php global $define_page; ?>

<section id="contact_map" class="section">

    <?php if ($define_page['class'] == 'home') { ?>
    <div class="center_page">
        <div class="titre">
            <h2>&nbsp;</h2>
        </div>
    </div>
    <?php } ?>
    <div id="map"></div>

    <script>

    function initialize() {

        var map;
        //var bounds = new google.maps.LatLngBounds();

        var markers = [
            ['Strasbourg', 48.57340529999999,7.752111300000024],
            ['Montréal', 45.5016889,-73.56725599999999],
            ['New-York', 40.7127837,-74.00594130000002]
        ];

        //map.fitBounds(bounds);

        var map = document.getElementById('map');
        var map = new google.maps.Map(map, {
            center: {
                lat:44.9763176,
                lng:-32.1239327
            },
            zoom: 3,
            disableDefaultUI: true,
        });

        map.setOptions({
            draggable: false,
            zoomControl: false,
            scrollwheel: false,
            disableDoubleClickZoom: true
        });

        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            //bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                icon: 'http://bm-studio.fr/hf2/img/marker.png',
                title: markers[i][0]
            });
        }


        /*for( i = 0; i < markers.length; i++ ) {
            addMarker(markers[i])
        }*/


        map.set('styles', [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"},{"gamma":"1.00"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#36393c"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#4c4c4c"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2f3134"},{"weight":"0.01"}]}]);
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq2L89c5GNfbf95yEZ-IIGz4ZfKI8uRf8&callback=initialize">
    </script>
  </body>

</section>

<section id="contact" class="section">
    <div class="center_page">
        <div class="titre">
            <h2><?php echo L::menu_6; ?></h2>
            <h3></h3>
        </div>
        <div class="content">
            <div class="col_2">
                <h4 class="contact"><?php echo L::contact_title_1; ?></h4>
                <p class="contact">Strasbourg |<span class="contact"> PH8, 8 place de l'hopital, 67000 Strasbourg, France</span></p>
                <p class="contact">Montréal |<span class="contact"> A-1514 AVE Docteur-Penfield, Montreal, Quebec, H3G 1B9, Canada</span></p>
                <p class="contact">New York |<span class="contact"> 32 W 131st street, New York, NY, 10037, USA</span></p>
                <h4 class="contact">Vous aimez notre vision, partagez-là</h4>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://www.facebook.com/HealthFactoryIO" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                <div class="fb-send" data-href="https://www.facebook.com/HealthFactoryIO" data-size="small" data-colorscheme="dark"></div>
                <br><br><br>
                <script>window.twttr = (function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
                  if (d.getElementById(id)) return t;
                  js = d.createElement(s);
                  js.id = id;
                  js.src = "https://platform.twitter.com/widgets.js";
                  fjs.parentNode.insertBefore(js, fjs);

                  t._e = [];
                  t.ready = function(f) {
                    t._e.push(f);
                  };

                  return t;
                }(document, "script", "twitter-wjs"));</script>
                <a class="twitter-follow-button" href="https://twitter.com/_healthfactory">Follow @_healthfactory</a>
                <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Health%20Factory%20leader%20de%20l'innovation%20en%20santé">Partager</a>
                <div class="clearfix"></div>
            </div>
            <div class="col_2">
                <h4 class="contact"><?php echo L::contact_title_2; ?></h4>
                <p class="contact"><a href="mailto:hello@healthfactory.io">hello@healthfactory.io</a></p>
                <div class="clearfix"></div>

                <h4 class="contact">Suivez-nous et prenez part à l'innovation !</h4>
                <ul class="social">
                    <li><a href="https://www.facebook.com/HealthFactoryIO/" class="icon icon-facebook" target="_blank"></a></li>
                    <li><a href="https://twitter.com/_healthfactory" class="icon icon-twitter" target="_blank"></a></li>
                    <li><a href="https://www.youtube.com/channel/UC3cp1CMc4tzNMuBaLvJOitw" class="icon icon-youtube" target="_blank"></a></li>
                    <li><a href="http://lnked.in/healthfactory" class="icon icon-linkedin" target="_blank"></a></li>
                </ul>
                <br><br>
                <h4 class="contact">Avec le soutien de la French Tech MEDTECH / BIOTECH</h4>
                <a href="http://www.lafrenchtech-alsace.eu/" target="_blank"><img src="img/french-tech-medtech.png" style="width: 100px;"></a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
