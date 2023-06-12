<?php
    global $post;
    $pt = get_post_type($post->ID);
    $archive_content = get_field($pt . '_archive', 'option');
    $title = $archive_content['optional_title'];
    $subtitle = $archive_content['optional_hero_content'];
    $content_hero = $archive_content['hero_image']['url'];
    $pType = get_post_type($post->ID);
?>

<section class="hero container-fluid" id="<?php echo get_the_archive_title(); ?>-hero"
    style="background-image:url('<?php if ($content_hero): echo esc_url($content_hero); else: echo '/wp-content/uploads/2023/01/chairalt.webp'; endif; ?>')">
    <div class="row center-xs hero-row">
        <div class="col-sm-8 col-xs-12 hero-content">
            <?php if ($title): ?>
                <h1 class="page__title"><?php echo $title; ?></h1>
                <?php elseif (is_archive()): ?>
                    <h1 class="page__title"><?php echo the_archive_title(); ?></h1>
            <?php else: ?>
                <h1 class="page__title"><?php echo $post->post_title; ?></h1>
            <?php endif; ?>
            <?php if ($subtitle): ?>
                <p class="hero__subtitles"><?php echo $subtitle; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>