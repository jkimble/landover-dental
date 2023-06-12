<footer id="footer__main" class="container-fluid">
    <div class="row start-sm center-xs footer__row">
        <div class="col-sm col-xs-12 info-col">
            <a href="/">
                <img src="/wp-content/uploads/2022/12/Landover-Dental-Associates__crop.png" width="250" alt="<?php echo bloginfo('name'); ?>">
            </a>
            <div class="info">
                <address itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <a href="https://goo.gl/maps/81Gs7UhYXwUJwriJ6" target="__blank">
                        <span itemprop="streetAddress">932 Largo Center Dr</span> <br>
                        <span itemprop="postalCode">Largo</span>, <span itemprop="addressRegion">MD</span> 20774
                    </a>
                </address>
                <a itemprop="telephone" href="tel:301-322-8900">301-322-8900</a>
            </div>
        </div>
        <div class="col-sm col-xs-12 navcol">
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        </div>
        <div class="col-sm col-xs-12 mapcol">
            <h3>Visit our office today</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3105.0262513675643!2d-76.83449400000002!3d38.900515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb403c9c29fb9768!2sLandover%20Dental%20Associates!5e0!3m2!1sen!2sus!4v1673913593351!5m2!1sen!2sus" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row footer__row_copy">
        <div class="col-xs-12 center-xs">
            <p class="copy"><span><?php echo bloginfo('name') . ' &copy;' . date(' Y '); ?></span></p>
            <p>
                <span><a href="/medical-disclaimer/">Disclaimer</a></span> | 
                <span><a href="/privacy-policy/">Privacy Policy</a></span>
            </p>
        </div>
    </div>
</footer>
</body>
<?php wp_footer(); ?>