<?php
    global $post;
    $heading = get_field('section_heading');
    $copy = get_field('section_text');
    $grid = get_field('procedure_icon_grid');
    $seelink = get_field('see_more_link');
    if ($grid):
?>
<section id="procedure_grid" class="container-fluid">
    <div class="row toprow center-xs">
        <div class="col-sm-5 col-xs-12">
            <h2 class="procedure_grid__title"><?php echo $heading; ?></h2>
            <?php if ($copy): ?>
                <p class="procedure_grid__copy"><?php echo $copy; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="row grid_row center-xs">
    <?php
        if (have_rows('procedure_icon_grid')):
            while (have_rows('procedure_icon_grid')): the_row();
            $col_1_icon = get_sub_field('column_1_icon');
            $col_1_title = get_sub_field('column_1_title');
            $col_1_link = get_sub_field('column_1_link');
            $col_2_icon = get_sub_field('column_2_icon');
            $col_2_title = get_sub_field('column_2_title');
            $col_2_link = get_sub_field('column_2_link');
            $col_3_icon = get_sub_field('column_3_icon');
            $col_3_title = get_sub_field('column_3_title');
            $col_3_link = get_sub_field('column_3_link');
            ?>
            <div class="col-sm-4 col-xs-12 icon-col">
                <img src="<?php echo $col_1_icon['url']; ?>" width="75">
                <h3 class="icon-title"><?php echo $col_1_title; ?></h3>
                <a class="textlink icon-link" href="<?php echo $col_1_link['url']; ?>">See More</a>
            </div>
            <div class="col-sm-4 col-xs-12 icon-col">
                <img src="<?php echo $col_2_icon['url']; ?>" width="75">
                <h3 class="icon-title"><?php echo $col_2_title; ?></h3>
                <a class="textlink icon-link" href="<?php echo $col_2_link['url']; ?>">See More</a>
            </div>
            <div class="col-sm-4 col-xs-12 icon-col">
                <img src="<?php echo $col_3_icon['url']; ?>" width="75">
                <h3 class="icon-title"><?php echo $col_3_title; ?></h3>
                <a class="textlink icon-link" href="<?php echo $col_3_link['url']; ?>">See More</a>
            </div>
        <?php endwhile; endif; ?>

    </div>
    <?php if ($seelink): ?>
        <div class="row center-xs">
            <a class="textlink_alt" href="<?php echo $seelink['url']; ?>"><?php echo $seelink['title']; ?></a>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>