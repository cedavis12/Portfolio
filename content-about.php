<?php

// Advanced Custom Fields

$bio_label      =       get_field('bio_label');
$bio_tagline    =       get_field('bio_tagline');
$biography      =       get_field('biography');
$bio_image      =       get_field('bio_image');

?>

     <!--ABOUT-->
     <section>
        <div class="container" id="about">
            <h2 class="section-title"><?php echo $bio_label; ?></h2>
            <div class="row">
                <div class="col-md-8">
                    <img src="<?php echo $bio_image['url']; ?>" alt="<?php echo $bio_image['alt']; ?>" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-4">
                    <p class="lead"><?php echo $bio_tagline; ?></p>
                    <p><?php echo $biography;?></p>
                    
                    <div class="row">
                        <div class="col-4">
                            <a href="https://github.com/cedavis12" target="_blank" class="badge" id="profile-link">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://codepen.io/cedavis12/" target="_blank" class="badge">
                                <i class="fab fa-codepen"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.linkedin.com/in/cedavis12/" target="_blank" class="badge">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>