
<?php get_header(); 

    while(have_posts()){
        the_post(); ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
<?php    }
 get_footer();
?>
helllo world.
