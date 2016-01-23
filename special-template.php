<?php

/*
Template Name: Special Layout
*/

    get_header();

    if(have_posts()):
        while(have_posts()): the_post(); ?>

        <article class="post page">
            <h2><?php the_title() ?></h2>

            <div class="info-box">
                <h4>Disclaimer Title</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur quis felis turpis. Morbi commodo, mauris quis pretium facilisis,
                    tortor neque dignissim ex, ac pellentesque quam ipsum vitae augue. Aliquam ac tortor nisi.
                </p>
            </div>

            <?php the_content() ?>
        </article>

    <?php endwhile;

        else: echo '<p>There are no posts!  Boo Boo!</p>';

    endif;

    get_footer();

?>