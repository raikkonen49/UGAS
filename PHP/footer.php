
    <div class="row row-sm">
        <div class="small-12 columns text-center section-title" id="contacts">
            <span>Get in touch</span>
            Contact us
        </div>
        <div class="small-12 columns message-block">
            <?php echo do_shortcode('[contact-form-7 id="78" title="Footer form"]'); ?>
        </div>
    </div>

    <div class="bg-green">
        <div class="row row-sm">
            <div class="small-12 columns text-center footer">
                <div class="small-12 columns footer-logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/img/logo-white.png">
                </div>
                <div class="small-12 columns footer-contacts">
                    +370 639 33475
                    <span>info@ugas.lt</span>
                </div>
                <div class="small-12 columns copyright">
                    All right reserved, 2017
                </div>
                <div class="small-12 columns social">
                    <ul>
                        <li><a class="sprite sprite-facebook" href="#"></a></li>
                        <li><a class="sprite sprite-twitter" href="#"></a></li>
                        <li><a class="sprite sprite-instagram" href="#"></a></li>
                        <li><a class="sprite sprite-linkedin" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/motion-ui.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

    <?php wp_footer(); ?>

    </body>
</html>
