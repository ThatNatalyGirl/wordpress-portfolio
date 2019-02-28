<?php

// Template Name: Work Page

?>

<?php get_header()?>

<?php echo get_template_part('includes/content', 'intro')?>

<h1> <?php the_title(); ?></h1>

<p>
    <?php the_field('intro_blurb'); ?>
    <!-- the field is somthing that is part of our plug in. Then we are adding the slug -->
</p>

<img src="<?php the_field('hero_image')?>" alt="home_image">

<?php //get_footer()?>
