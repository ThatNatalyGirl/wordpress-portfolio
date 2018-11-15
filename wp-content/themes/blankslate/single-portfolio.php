<?php get_header()?>

<section id="single-project">
    <?php if(get_field('project-image')) { ?>
        <div class="project-image">
            <img src="<?php the_field('project_image')?>" alt="">
        </div>
    <?php } else { ?>
        <p>Please check back to see a full listing :D</p>
    <?php } ?>        
    <!-- here we're saying, if there is an image show it, if not don't and tell them to come back and see. The if statement is wrapping the div so that it only applies if there is an image...The get_field thing is like query selector. This is all something that is built into ACF advance custom fields so that it makes our lives easier. below it is doing the same thing  -->

    <?php if(get_field('project-blurb')) { ?>   
        <div class="project-blurb">
            <p><?php the_field('project_blurb'); the_title()?></p>
        </div>
    <?php } ?>    
</section>

<?php get_footer()?>