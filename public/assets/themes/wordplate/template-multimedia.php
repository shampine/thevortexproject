<?php
/**
 * Template for multimedia
 *
 * Template Name: Multimedia
 */

get_header(); ?>

<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<div class="container"><?php 

    if (have_posts()) {
        while (have_posts()) {
            the_post();

            $gallery = get_field('gallery', $post->post_id); ?>

            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>
            </div><?php

            if (sizeof($gallery > 0)) { ?>

                <div class="row row-photo"><?php
                    $count = 0;

                    foreach($gallery as $gal) {

                        $photo   = $gal['photo']['sizes'];
                        $alt     = $gal['photo']['alt'];
                        $caption = $gal['photo']['caption'];

                        ?>

                        <div class="col-sm-3">
                            <div class="photo aligncenter js-photo" data-photo-id="<?php echo $count; ?>">
                                <img src="<?php echo $photo['thumbnail']; ?>" alt="<?php echo $alt; ?>">
                            </div>
                        </div><?php

                        $gals["$count"] = $gal['photo'];
                        $count++;

                        if ($count % 4 === 0 && $count < sizeof($gallery)) {
                            echo '</div><div class="row row-photo">';
                        }
                    }

                    wp_localize_script('main', 'gallery', $gals); ?>
                </div><?php

            } else { ?>

                <div class="row">
                    <div class="col-sm-6 col-sm-offset3">
                        <p>Sorry, no media was found.</p>
                    </div>
                </div><?php

            }

        }
    } ?>

</div><?php

get_footer(); ?>