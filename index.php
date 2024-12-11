<?php get_header() ?>
<main>
    <section class="main" id="home">
        <h1><?php echo __('Keep your dreams aroused with a cup of coffee.', 'i-web') ?></h1>
        <p><?php echo __('The coffee ideas shared by these generators are not cool at all, as they are not a human being.', 'i-web') ?></p>
        <a href="#"><?php echo __('Buy Now', 'i-web') ?></a>
    </section>
    <section class="shop" id="best_offer">
        <h2><?php echo __('That is Our Best Offer', 'i-web') ?></h2>
        <p><?php echo __('A coffee shop will help you to tell the audience what your business.', 'i-web') ?></p>
        <div class="wrap-products">
            <div class="product">
                <img src="<?php echo LINK_THEME ?>/assets/images/product-1.png" alt="product">
                <p class="price"><?php echo __('$ 5.99', 'i-web') ?></p>
                <h3><?php echo __('Brazilian coffee beans', 'i-web') ?></h3>
                <p class="description"><?php echo __('Coffee that’s always you handle your own the way you like.', 'i-web') ?></p>
            </div>
            <div class="product">
                <img src="<?php echo LINK_THEME ?>/assets/images/product-2.png" alt="product">
                <p class="price"><?php echo __('$ 4.99', 'i-web') ?></p>
                <h3><?php echo __('Vietnam coffee beans', 'i-web') ?></h3>
                <p class="description"><?php echo __('Coffee that’s always you handle your own the way you like.', 'i-web') ?></p>
            </div>
            <div class="product">
                <img src="<?php echo LINK_THEME ?>/assets/images/product-3.png" alt="product">
                <p class="price"><?php echo __('$ 3.99', 'i-web') ?></p>
                <h3><?php echo __('Indonesian coffee beans', 'i-web') ?></h3>
                <p class="description"><?php echo __('Coffee that’s always you handle your own the way you like.', 'i-web') ?></p>
            </div>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <h2><?php echo __('Our Gallery', 'i-web') ?></h2>
        <p><?php echo __('The coffee shop name generator is a great tool for those that are deliberating what to call their new
            coffee.', 'i-web') ?></p>
        <div class="wrap-photos">
            <div class="photo photo-1">
                <p><?php echo __('Coffee', 'i-web') ?></p>
            </div>
            <div class="photo photo-2">
                <p><?php echo __('Coffee', 'i-web') ?></p>
            </div>
            <div class="photo photo-3">
                <p><?php echo __('Coffee', 'i-web') ?></p>
            </div>
            <div class="photo photo-4">
                <p><?php echo __('Coffee', 'i-web') ?></p>
            </div>
            <div class="photo photo-5">
                <p><?php echo __('Coffee', 'i-web') ?></p>
            </div>
            <div class="photo photo-6">
                <p><?php echo __('Coffee', 'i-web') ?></p>
            </div>
        </div>
        <a href="#"><?php echo __('LOAD MORE', 'i-web') ?></a>
    </section>
    <section class="social" id="follow">
        <h3><?php echo __('Follow US', 'i-web') ?></h3>
        <h2><?php echo __('Have an inquiry?', 'i-web') ?></h2>
        <h2><?php echo __('Text or call and ask Something.', 'i-web') ?></h2>
        <a href="tel:+8801742527137" class="phone"><?php echo __('+8801742-527137', 'i-web') ?></a>
        <a href="mailto:mdmaksedur17@gmail.com" class="mail"><?php echo __('mdmaksedur17@gmail.com', 'i-web') ?></a>
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
    <section class="blog" id="about">
        <h2><?php echo __('Update News', 'i-web') ?></h2>
        <p><?php echo __('A cup of brewed coffee represents a contribution of up to 1.8 grams of fiber of the recommended.', 'i-web') ?></p>
        <div class="wrap-posts">
            <div class="post">
                <img src="<?php echo LINK_THEME ?>/assets/images/post-1.png" alt="post">
                <div class="post-content">
                    <h3><?php echo __('coffee beans', 'i-web') ?></h3>
                    <p><?php echo __('These advertising mottos are targeted to the 56% of coffee drinking consumers.', 'i-web') ?></p>
                    <a href="#"><?php echo __('Learn More', 'i-web') ?></a>
                </div>
            </div>
            <div class="post">
                <img src="<?php echo LINK_THEME ?>/assets/images/post-2.png" alt="post">
                <div class="post-content">
                    <h3><?php echo __('coffee beans', 'i-web') ?></h3>
                    <p><?php echo __('These advertising mottos are targeted to the 56% of coffee drinking consumers.', 'i-web') ?></p>
                    <a href="#"><?php echo __('Learn More', 'i-web') ?></a>
                </div>
            </div>
            <div class="post">
                <img src="<?php echo LINK_THEME ?>/assets/images/post-3.png" alt="post">
                <div class="post-content">
                    <h3><?php echo __('coffee beans', 'i-web') ?></h3>
                    <p><?php echo __('These advertising mottos are targeted to the 56% of coffee drinking consumers.', 'i-web') ?></p>
                    <a href="#"><?php echo __('Learn More', 'i-web') ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact wrapper" id="contact">
        <h2><span><?php echo __('Ко', 'i-web') ?></span><?php echo __('нтактна форма', 'i-web') ?></h2>
        <p><?php echo __('Залишіть заявку та отримайте індивідуальний план просування!', 'i-web') ?></p>
        <div class="contact-content">
            <div class="content-form">
                <?php echo do_shortcode( '[contact-form-7 id="8fc0ff1" title="Contact form"]' ) ?>
            </div>
            <div class="contact-info">
                <h3><?php echo __('Наші контакти', 'i-web') ?></h3>
                <div class="content-info">
                    <div class="details-info">
                        <div class="phone-info">
                            <img src="<?php echo LINK_THEME ?>/assets/images/contact-phone.svg" alt="phone">
                            <a href="tel:+380930000000">
                                <?php echo __('+38 (093) 000-00-00', 'i-web') ?>
                            </a>
                        </div>
                        <div class="mail-info">
                            <img src="<?php echo LINK_THEME ?>/assets/images/contact-mail.svg" alt="mail">
                            <a href="mailto:coffee@gmail.com">
                                <?php echo __('coffee@gmail.com', 'i-web') ?>
                            </a>
                        </div>
                        <div class="address-info">
                            <img src="<?php echo LINK_THEME ?>/assets/images/contact-address.svg" alt="address">
                            <a href="#" target="_blank">
                                <?php echo __('м. Київ, вул. Тестова 6', 'i-web') ?>
                            </a>
                        </div>
                    </div>
                    <div class="social-info">
                        <div class="facebook-info">
                            <img src="<?php echo LINK_THEME ?>/assets/images/contact-facebook.svg" alt="facebook">
                            <a href="#" target="_blank"><?php echo __( 'facebook', 'i-web' ) ?></a>
                        </div>
                        <div class="instagram-info">
                            <img src="<?php echo LINK_THEME ?>/assets/images/contact-instagram.svg" alt="instagram">
                            <a href="#" target="_blank"><?php echo __( 'instagram', 'i-web' ) ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>