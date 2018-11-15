<?php

// Template Name: About Page

?>

<h1> <?php the_title(); ?></h1>

<p>
    <?php the_field('intro_blurb'); ?>
    <!-- the field is somthing that is part of our plug in. Then we are adding the slug -->
</p>

<img src="<?php the_field('hero_image')?>" alt="home_image">
