<?php
/*
*    Template Name: Contact Page
*/
get_header();
global $post;
$map = get_field('google_map_embed');
$map_head = get_field('map_column_heading');
$map_content = get_field('map_column_content');
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<main class="container-fluid" id="contact-page">
    <div class="row page-row center-xs">
        <div class="col-sm-6 col-xs-12 info-half page-col">
            <div class="formdisclaim">
                <h3><strong>NEVER </strong>submit any medical history or medical information on this website.</h3>
            </div>
            <div class="col-wrap">
                <div class="content-wrap">
                    <?php
                        if (have_posts()):
                            while (have_posts()): the_post();
                                the_content(); 
                            endwhile;
                        endif; ?>
                </div>
                <div class="form-wrap">
                    <?php echo do_shortcode('[contact-form-7 id="180" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 map-half page-col">
            <div class="col-wrap">
                <div class="content-wrap">
                    <h3 class="map-head"><?php echo $map_head; ?></h3>
                    <?php if ($map_content): ?>
                        <p class="map-content"><?php echo $map_content; ?></p>
                    <?php endif; ?>
                </div>
                <iframe src="<?php echo $map; ?>" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact-info">
                    <div class="inforow">
                        <i class="fas fa-phone"></i><a class="textlink icon-link" href="tel:301-322-8900">301-322-8900</a>
                    </div>
                    <div class="inforow">
                    <i class="fas fa-building"></i>
                    <address itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                        <a class="textlink icon-link" href="https://goo.gl/maps/81Gs7UhYXwUJwriJ6" target="__blank">
                            <span itemprop="streetAddress">932 Largo Center Dr</span> 
                            <span itemprop="postalCode">Largo</span>, <span itemprop="addressRegion">MD</span> 20774
                        </a>
                    </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>