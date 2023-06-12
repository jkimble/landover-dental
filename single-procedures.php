<?php 
global $post;
get_header();
get_template_part( 'blocks/hero-main' ); ?>

<main class="page-<?php echo $post->post_name; ?> procedure__temp container-fluid">
    <?php get_template_part( 'blocks/breadcrumb-row' ); ?>
    <section class="content-wrap row">
        <div class="col-xs-12">
            <?php
                if (have_posts()):
                    while (have_posts()): the_post();
                        the_content(); 
                    endwhile;
                endif;
            ?>
        </div>
    </section>
    <?php get_template_part( 'blocks/faq-block' ); ?>
    <?php get_template_part( 'blocks/procedure', 'cta' ); ?>
</main>

<?php get_footer(); ?>