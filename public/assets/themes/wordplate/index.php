<?php get_header(); ?>

<div class="container"><?php 

    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <div class="row">
                <div class="col-sm-12 content">
                    <?php the_content(); ?>
                </div>
            </div><?php

        }
    } ?>

</div>

<?php get_footer(); ?>