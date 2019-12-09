<?php

//Advanced Custom Fields

$welcome_header =       get_field('welcome_header');
$welcome_tagline =      get_field('welcome_tagline');
$welcome_icon   =       get_field('welcome_icon');

?>

<header id="welcome-section" class="welcome-image">
        <div class="welcome-text">
            <h1><?php echo $welcome_header;?></h1>
            <h2><?php echo $welcome_tagline; ?></h2>

            <?php if(!empty($welcome_icon)) { ?>
                <a href="#about"><i class="down <?php echo $welcome_icon; ?>"></i></button></a>
            <?php } else { ?>
                <a href="#about"><i class="down fas fa-angle-double-down"></i></button></a>
            <?php } ?>
        </div>
    </header>