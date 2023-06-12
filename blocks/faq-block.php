<?php
    global $post;
    $title = get_field('faq_section_title');
    $content = get_field('faq_section_content');
?>
<?php if (have_rows('faq_rows')): ?>
<section class="row center-xs" id="faq_section">
    <div class="col-xs-12 intro_copy">
        <h2><?php echo $title ? $title : "Frequently Asked Questions"; ?></h2>
        <?php echo $content ? $content : ''; ?>
    </div>
    <div class="col-xs-12 faq_main_wrap">
        <?php
            if (have_rows('faq_rows')):
                while (have_rows('faq_rows')):
                    the_row();
                    $rowQ = get_sub_field('question');
                    $rowA = get_sub_field('answer'); ?>
                    <div class="row start-xs faq_row">
                        <div class="col-xs-12 faq_question">
                            <h4 class="font-icon"><?php echo $rowQ; ?></h4>
                        </div>
                        <div class="col-xs-12 faq_answer">
                            <?php echo $rowA; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
        ?>
    </div>
</section>
<?php endif; ?>