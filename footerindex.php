 <!-- JS -->
    <script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery-migrate-3.3.2.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/scripts.js"></script>

    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_2");
            } else {
                revapi1 = tpj("#rev_slider_1_2").show().revolution({
                    sliderType:"standard",
                    sliderLayout:"auto",
                    dottedOverlay:"none",
                    delay: 3500,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction:"horizontal",
                        mouseScrollNavigation:"off",
                        onHoverStop:"on",
                        touch: {
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction:"horizontal",
                            drag_block_vertical: false
                        }
                    },
                    gridwidth: 1920,
                    gridheight: 900,
                    lazyType:"none",
                    shadow: 0,
                    spinner:"sipnner3",
                    stopLoop:"off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle:"off",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:"off",
                    }
                });
            }
        });
        /*]]>*/
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