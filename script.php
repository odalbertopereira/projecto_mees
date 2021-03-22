<!-- Vendor -->

<script src="js/js/jquery-1.12.4.min.js"></script>
<script src="js/js/jquery.ajaxchimp.min.js"></script>
<script src="js/js/plugins.js"></script>
<script src="js/js/main.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>		
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>		
<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>		
<script src="js/views/view.home.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>
<!--funcoes de comunicação e actualizacao com o banco-->
<script src="js/funcoes.js"></script>

<!-- Examples -->
<script src="js/examples/examples.demos.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42715764-5', 'auto');
    ga('send', 'pageview');
</script>
<script src="master/analytics/analytics.js"></script>

<!-- Alertifyjs JS -->
<script src="css/alertifyjs/alertify.js" type="text/javascript"></script>
<!--script recaptcha-->
<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>-->

<script type = "text/javascript" >
    var onloadCallback = function () {
        alert("grecaptcha está pronto!");
    }
</script> 

<script>
    $(document).ready(function () {
        $(".moreBox").slice(0, 3).show();
        if ($(".blogBox:hidden").length != 0) {
            $("#loadMore").show();
        }
        $("#loadMore").on('click', function (e) {
            e.preventDefault();
            $(".moreBox:hidden").slice(0, 6).slideDown();
            if ($(".moreBox:hidden").length == 0) {
                $("#loadMore").fadeOut('slow');
            }
        });
    });
</script> 
<script>
    $(document).ready(function () {
        $(".moreBox1").slice(0, 9).show();
        if ($(".blogBox:hidden").length != 0) {
            $("#loadMore2").show();
        }
        $("#loadMore2").on('click', function (e) {
            e.preventDefault();
            $(".moreBox1:hidden").slice(0, 6).slideDown();
            if ($(".moreBox1:hidden").length == 0) {
                $("#loadMore2").fadeOut('slow');
            }
        });
    });
</script> 
<script src="js/myScript.js"></script>
</body>
<!-- Mirrored from preview.oklerthemes.com/porto/5.7.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2019 11:28:07 GMT -->
</html>