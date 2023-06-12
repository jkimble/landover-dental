<?php
    global $post;
    $title = get_field('page_title');
    $subtitle = get_field('page_subtitle');
    $btn_text = get_field('button_text');
    $btn_link = get_field('button_link');
    $content_hero = get_field('hero_image');
    $pType = get_post_type($post->ID);
    if (has_post_thumbnail($post->ID)):
        $hero_image = get_the_post_thumbnail_url($post->ID,'full') ?? $content_hero;
    endif;
?>

<section class="hero container-fluid <?php echo $pType; ?>_hero" id="<?php echo $post->post_name; ?>-hero"
    style="background-image:url('<?php if ($content_hero): echo esc_url($content_hero['url']); else: echo esc_url($hero_image); endif; ?>')">
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
            <?php if ($btn_link): ?>
                <div class="btnwrap">
                    <a class="btnmain hero-button" href="<?php echo esc_url($btn_link); ?>">
                        <?php 
                            if ($btn_text):
                                echo $btn_text;
                            else:
                                echo 'Contact Us Today';
                            endif;
                        ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>