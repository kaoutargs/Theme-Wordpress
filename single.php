<?php get_header()?>
<?php // checks if there are any posts that match the query
if (have_posts()) :

  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();

    // the code between the while loop will be repeated for each post
    ?>

<?php echo the_post_thumbnail(); ?>

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>



<?php the_content(); ?>


<?php

// Stop the loop when all posts are displayed
endwhile;

// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>

<?php get_footer(); ?>
