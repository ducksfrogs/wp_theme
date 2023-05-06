<?php


get_header(  );

?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg')?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome to our blog</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
        <div class="page-banner__intro">
        <p>Keep up with out lataset news.</p>
        </div>
    </div>
    
<div class="container">
  <?php
  while(have_posts(  )){
    the_post(  ); ?>
  <div class="post-item">
    <h2 class="headline headline--medium headline--post--title"><a href="<?php the_permalink(  ); ?>"><?php the_title(  ); ?></a></h2>
    <div class="metabox">
      <p>Posted by <?php the_author_posts_link(  ); ?> on 6.8.17 in News</p>
    </div>
    <div class="generic-content">
      <?php the_excerpt(  ); ?>
      <p><a class="btn btn--blue" href="<?php the_permalink(  ); ?>">conti</a></p>
    </div>
  </div>
</div>
<?php }

get_footer( );

?>