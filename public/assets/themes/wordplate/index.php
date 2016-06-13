<?php get_header(); ?>

<div class="container"><?php 

    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <?php the_content(); ?>
                </div>
            </div><?php

        }
    } ?>

</div>

<?php get_footer(); ?>