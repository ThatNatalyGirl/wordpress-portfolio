<?php get_header()?>

<section id="single-project">
    <?php if(get_field('project_title')): ?> 
        <h1><?php the_field('project_title')?></h1>
    <?php endif;?>

        <?php if(get_field('project_image')): ?> 
            <img src="<?php the_field('project_image')?>" alt="">
        <?php endif;?>

        <?php if(get_field('project_blurb')): ?> 
            <p><?php the_field('project_blurb')?></p>
        <?php endif;?>

</section>

<?php get_footer()?>