<?php
    $heading = block_value('heading');
    $content = block_value('content');
    $bg_color = block_value('background-color') ?? '#05D2F8';
    $btn_link = block_value('button-link');
    $btn_text = block_value('button-text');
?>

<section id="simple-cta" class="container-fluid" style="background-color:<?php echo $bg_color; ?>">
    <div class="row center-xs">
        <div class="col-sm-5 col-xs-12 content-col">
            <?php if ($heading): ?>
                <h3 class="cta-head"><?php echo $heading; ?></h3>
            <?php endif; if ($content): ?>
                <p class="cta-copy"><?php echo strip_tags($content); ?></p>
            <?php endif; if ($btn_link): ?>
                <a class="cta-link" href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>