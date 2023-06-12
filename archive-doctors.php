<?php
global $post;
get_header();
$archive_content = get_field('doctors_archive', 'option');
$top_head = $archive_content['doctor_row_title'];
$top_content = $archive_content['doctor_row_content'];
get_template_part( 'blocks/archive-hero' ); ?>
<div class="container-fluid archive" id="doc__arc">
    <?php get_template_part( 'blocks/breadcrumb-row' ); ?>
    <div class="row center-xs doc__top">
        <?php if ($top_head): ?>
            <div class="col-xs-12">
                <h2><?php echo $top_head; ?></h2>
                <?php if ($top_content): ?>
                    <p><?php echo $top_content; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row center-xs doc__main">
        <?php
            $args = array(
                'post_type' => 'doctors',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'menu_order',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    $img = get_field('doctor_portrait', $post->ID);
                    $ed = get_field('education', $post->ID);
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 doc_col">
                        <div class="docwrap">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <img src="<?php echo $img['url']; ?>">
                                <h3><?php echo get_the_title(); ?></h3>
                            </a>
                        </div>
                    </div>
                    <?php wp_reset_postdata();
                endwhile;
            endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>