<?php

// Template Name: CSS Art

get_header();

// Advanced Custom Fields

$css_art_image    =     get_field('css_art_image');
$codepen_link   =       get_field('codepen_link');

?>


<header>
    <div id="jumbotron" class="jumbotron">
        <div class="container text-center">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
</header>


<section>
    <div class="container">
        <div class="row justify-content-center" id="primary">
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>

            

            <main id="content" class="col-md-4 justify-content-center" role="main">

                <?php $loop = new WP_Query(array(
                    'post_type' => 'css_art',
                    'orderby' => 'post_id',
                    'order' => 'ASC'
                )); ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>


                    <a href="<?php the_field('codepen_link'); ?>" target="blank"><img src="<?php the_field('css_art_image'); ?>" alt="Pure CSS Art Image" class="img-fluid center"></a>
                    <hr class="styled">

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>

            </main>
        </div><!-- primary -->
    </div><!-- container -->
</section>





<?php
get_footer();
