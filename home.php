<?php
/*
*    Template Name: Home Page
*/
get_header();
global $post;
?>
<main class="page-<?php echo $post->post_name; ?>" id="homepage">
    <?php
        get_template_part( 'blocks/hero-main' );
        get_template_part( 'blocks/slant-cta' );
        get_template_part( 'blocks/procedure-grid' );
    ?>
    <section class="content-wrap">
        <?php
            if (have_posts()):
                while (have_posts()): the_post();
                    the_content(); 
                endwhile;
            endif; ?>
    </section>
</main>
<?php get_footer(); ?>