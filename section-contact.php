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
                lat:46.227638,
                lng:2.213749000000007
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFdB_1vB3mE2oEFHHZ1je7e0tUAZxUlt4&callback=initialize">
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
                <address>23 bd de la marne<br>67000 Strasbourg</address>
                <p class="telephone">+33 624 720 496</p>
                <p class="email">hello@healthfactory.io</p>
                <ul class="social">
                    <li><a href="https://www.facebook.com/HealthFactoryIO/" class="fb" target="_blank">Facebook</a></li>
                    <li><a href="http://twitter.com/_healthfactory" class="tw" target="_blank">Twitter</a></li>
                    <li><a href="https://www.youtube.com/channel/UC3cp1CMc4tzNMuBaLvJOitw" class="yt" target="_blank">YouTube</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col_2">
                <h4 class="contact"><?php echo L::contact_title_2; ?></h4>
                <div class="form_wrap">
                <form action="" method="">
                    <input name="prenom" type="text" placeholder="<?php echo L::contact_input_1; ?>" />
                    <input name="nom" type="text" placeholder="<?php echo L::contact_input_2; ?>" />
                    <input name="email" type="email" placeholder="<?php echo L::contact_input_3; ?>" />
                    <textarea rows="4" name="message" placeholder="<?php echo L::contact_input_4; ?>"></textarea>

                    <a class="btn" data-text="<?php echo L::contact_input_submit; ?>" href="#" onclick="$(this).closest('form').submit()">
                        <span><?php echo L::contact_input_submit; ?></span>
                    </a>
                </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
