<?php
    global $post;
    $cta = get_field('slant_cta_fields');
    if ($cta):
?>
<section class="slant-cta <?php echo $post->post_title; ?>-slant-cta container-fluid">
    <div class="row content__contain">
        <div class="col-sm-6 col-xs-12 textcol">
            <div class="textwrap">
                <h2 class="slant_cta_head"><?php echo $cta['section_heading']; ?></h2>
                <p class="slant_cta_text"><?php echo $cta['section_text']; ?></p>
            </div>
        </div>
        <?php if ($cta['section_image']): ?>
        <div class="col-sm-6 col-xs-12 imgcol">
            <div class="imgwrap">
                <img class="slant_cta_img" src="<?php echo esc_url($cta['section_image']['url']); ?>">
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>