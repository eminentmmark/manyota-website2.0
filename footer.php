  </div> 

  <!-- JS -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.3.2.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/scripts.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>
    <script src="js/email.js"></script>

    <script>
        function google_maps_563b4db76320b() {
            var latlng = new google.maps.LatLng(-33.8710, 151.2039);
            var draggable = true;
            var myOptions = {
                zoom: 13,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                   "featureType":"all",
                   "elementType":"all",
                   "stylers": [{
                       "saturation":"-100"
                    }, {
                       "lightness":"41"
                    }]
                }],
                draggable: draggable,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area-563b4db76320b"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                icon:"images/home_constructor_pin.png",
                map: map
            });
        }


        jQuery(document).ready(function($) {
            google_maps_563b4db76320b();
        });
    </script>

    <script>
        jQuery(window).on('load', function () {
            var retina = window.devicePixelRatio> 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src","images/retina-constructor.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src","images/retina-constructor.png").width(stickyLogoW).height(stickyLogoH);
            }
        });
    </script>

</body>
</html>