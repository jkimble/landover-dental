<?php
/*
*    Template Name: Doctor Page Template
*/
get_header();
global $post;
$specialties = get_field('specialties');
$education = get_field('education');
$portrait = get_field('doctor_portrait');
$affiliate = get_field('affiliate_content');
get_template_part( 'blocks/hero-main' );
?>
<main class="container-fluid" id="dentist-page">
    <div class="row info-row">
        <div class="col-xs-12 info-col">
            <span class="breadcrumb"><?php echo do_shortcode('[wpseo_breadcrumb]'); ?></span>
        </div>
    </div>
    <div class="row center-xs content-row">
        <div class="col-sm-12 col-xs-12 doc-col">
            <img src="<?php echo $portrait['url']; ?>" width="400">
            <div class="textcontain">
                <?php echo $education; ?>
            </div>
            <?php if ($affiliate): ?>
                <div class="affiliate-content">
                    <h2 class="sponscontent">AFFILIATE CONTENT</h2>
                    <div class="sponcontent_contain">
                        <?php echo $affiliate; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-xs-5 bio-col">
        <?php
            if (have_posts()):
                while (have_posts()): the_post();
                    the_content(); 
                endwhile;
            endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>