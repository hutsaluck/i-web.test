<footer>
    <?php wp_footer() ?>
    <div class="wrap-info">
        <section>
            <img src="<?php echo LINK_THEME ?>/assets/images/logo.svg" alt="logo" class="logo">
            <p><?php echo __('Creating a catchy tagline coffee shop business growth', 'i-web') ?>.</p>
            <a href="tel:+8801742527137" class="phone"><?php echo __('+8801742-52713', 'i-web') ?>7</a>
        </section>
        <section>
            <h2><?php echo __('CATEGORIES', 'i-web') ?></h2>
            <ul>
                <li><a href="#"><?php echo __('Ashley Szekeres Art', 'i-web') ?></a></li>
                <li><a href="#"><?php echo __('Merchandise', 'i-web') ?></a></li>
                <li><a href="#"><?php echo __('Gift Certificates', 'i-web') ?></a></li>
            </ul>
        </section>
        <section>
            <h2><?php echo __('INFORMATION', 'i-web') ?></h2>
            <ul>
                <li><a href="#"><?php echo __('Coffee Beans', 'i-web') ?></a></li>
                <li><a href="#"><?php echo __('Contact Us', 'i-web') ?></a></li>
                <li><a href="#"><?php echo __('Blog', 'i-web') ?></a></li>
            </ul>
        </section>
        <section>
            <h2><?php echo __('FOLLOW US', 'i-web') ?></h2>
            <div class="wrap-social-links">
                <a href="#">
                    <img src="<?php echo LINK_THEME ?>/assets/images/twitter.svg" alt="twitter">
                </a>
                <a href="#">
                    <img src="<?php echo LINK_THEME ?>/assets/images/facebook.svg" alt="facebook">
                </a>
                <a href="#">
                    <img src="<?php echo LINK_THEME ?>/assets/images/instagram.svg" alt="instagram">
                </a>
                <a href="#">
                    <img src="<?php echo LINK_THEME ?>/assets/images/linkedin.svg" alt="linkedin">
                </a>
            </div>
        </section>
    </div>
    <p class="copyright"><?php printf(__('Copyright © %1$d Coffee, All rights reserved.', 'i-web'), date('Y')); ?></p>
</footer>
</body>
</html>