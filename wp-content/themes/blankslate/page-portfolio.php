<?php 
// Template Name: Portfolio
?>
<!-- This is the static view for portfolio posts -->

<?php get_header()?>

<h1>This is the Portfolio page</h1>

<!-- This is where I would loop over all posts using a custom query where post type is equal to portfolio -->
<!-- here I would write a query that would say :  look for the post type named Portfolio. If there are posts, display the html like so... h1 etc... -->

<!-- // The Query -->
<?php 
    // these are arguments that we are passing through the wp query. The value pairs (slug) are called and then the name of the post type that we named it is put there. The category name is over on the left that we defined as check options. We do this so we can pull out and/or ignore some of the category items with if statements. The get field is written into the plugin
    // the -1 means infinity (i.e. as many as there are)
    // don't forget var_dump and die

    $args = array(
        "post_type" => "portfolio",
        "category_name" => get_field('portfolio_display_category'),
        "posts_per_page" => -1,
    );

    //query = is portfolio items (all of them). So this is saying, if there are posts, while there are posts, grab one post/open one post, we're going to pass over the html these fields

    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

<!-- here we are adding some HTML for each item and then getting the link from the already built in permalink that is provided on wordpress  -->
    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        
<?php endwhile; wp_reset_postdata(); endif; ?>


<?php get_footer()?>
