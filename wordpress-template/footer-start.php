
<?php if (get_theme_mod('cookies_text','') && !isset($_COOKIE['cpa_action'])) : ?>
    <!-- Cookies Policy banner -->
    <div class="cookies" id="cookiesPolicy">
        <div class="cookies-inner">
            <div class="cookies-title"><?= get_theme_mod('cookies_title','')?></div>
            <p><?= get_theme_mod('cookies_text',''); ?></p>
            <div class="cookies-btn">
                <a href="javascript:void(0)" onclick="cpAgree()" class="btn default-btn">I accept cookies</a>
            </div>
            <div class="close-cookies">
                <a href="javascript:void(0)" onclick="$('#cookiesPolicy').hide('slow')"><i class="icon icon_close"></i></a>
            </div>
        </div>
    </div>
    <!-- End. Cookies Policy banner  -->
<?php endif;?>

<!-- Javascript
        ================================================== -->

<script type="text/javascript">
function cpAgree() {
    var date = new Date(new Date().getTime() + 1000 * 60 * 60 * 24 *30);
    document.cookie = "cpa_action=true; path=/; expires=" + date.toUTCString();
    $('#cookiesPolicy').hide('slow');
}
var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<script src="<?= get_template_directory_uri()?>/start-landing/js/animate.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>-->
<script src="<?= get_template_directory_uri()?>/start-landing/js/main.js"></script>
</body>
</html>