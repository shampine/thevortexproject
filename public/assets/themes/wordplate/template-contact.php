<?php
/**
 * Template for contact form
 *
 * Template Name: Contact
 */

get_header(); ?>

<div class="container"><?php 

    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php the_content(); ?>

                    <form role="form" id="register">
                        <input type="text" class="hidden" name="email_2">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" name="email" required>
                        </div>
                        <div id="error"></div>
                        <button type="submit" class="btn btn-default">Send</button>
                    </form>
                </div>
            </div><?php

        }
    } ?>

</div><?php

get_footer(); ?>