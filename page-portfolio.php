<?php

// Template Name: Portfolio

get_header();



?>

<header>
    <div id="jumbotron" class="jumbotron">
        <div class="container text-center">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
</header>

<!--PROJECTS-->
<section>
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <h1 class="section-title"><?php the_content(); ?></h1>
        <?php endwhile; ?>


        <?php $loop = new WP_Query(array(
            'post_type' => 'portfolio_project',
            'orderby'   =>  'post_id',
            'order'     =>  'ASC'
        )); ?>


        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?php the_field('project_url'); ?>" target="blank">
                        <img src="<?php the_field('project_image'); ?>" alt="screenshot of project" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6">
                    <h3><a class="project-title" href="<?php the_field('project_url'); ?>" target="blank"><?php echo get_the_title(); ?></a></h3>
                    <?php the_content(); ?>
                    <hr class="styled">
                    <ul class="list-group list-group-horizontal-sm">
                        <?php the_field('technologies'); ?>
                    </ul>
                    <br>
                    <p class="lead">
                        Check out the Githup repo:
                        <a href="<?php the_field('github_url'); ?>" target="_blank" class="badge">
                            <i class="fab fa-github"></i>
                        </a>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</section>


<?php
get_footer();
