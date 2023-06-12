<?php
global $post;
get_header();
$archive_content = get_field('procedures_archive', 'option');
$top_head = $archive_content['procedure_row_title'];
$top_content = $archive_content['procedure_row_content'];
get_template_part( 'blocks/archive-hero' ); ?>
<div class="container-fluid archive" id="procedure__arc">
    <?php get_template_part( 'blocks/breadcrumb-row' ); ?>
    <div class="row center-xs procedure__top">
        <?php if ($top_head): ?>
            <div class="col-xs-12">
                <h2><?php echo $top_head; ?></h2>
                <?php if ($top_content): ?>
                    <p><?php echo $top_content; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row procedure__main">
        <div class="col-md-4 col-sm-12 col-xs-12 filt">
            <input type="text" id="arc_filter" name="arc_filter" placeholder="Narrow your search...">
        </div>
        <?php
            $args = array(
                'post_type' => 'procedures',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="col-xs-12 procedure_col">
                        <a class="textlink_alt proc_title" href="<?php echo get_the_permalink(); ?>">
                            <?php echo get_the_title(); ?>
                        </a>
                        <p class="exc">
                            <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
                        </p>
                        <a class="btnmain_sm" href="<?php echo get_the_permalink(); ?>">Read More</a>
                    </div>
                    <?php wp_reset_postdata();
                endwhile;
            endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>