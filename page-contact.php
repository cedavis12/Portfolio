<?php

// Template Name: Contact

get_header();
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
            <div class="row d-flex" id="primary">
                <div id="content" class="col-sm-12">
                    <?php while(have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>





<?php
get_footer();
