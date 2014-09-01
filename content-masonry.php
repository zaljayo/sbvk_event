<?php
/**
 * Template Name: Masonry Blog
 *
 * Blog Template
 *
 */
 ?>
<?php include_once( 'header.php' ); ?>
<!-- Start the Loop. -->
<div id="container2">
<?php

$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=10'.'&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>
<div class="brick">
<div class="brick_header">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Click to view: <?php the_title_attribute(); ?>">
<?php the_title(); ?></a>
</div>
<div class="brick_featured_image">
<?php if ( has_post_thumbnail() ) {
 $size=75;
 ?>
 <a href="<?php the_permalink() ?>" rel="bookmark" title="Click to view: <?php the_title_attribute(); ?>">
<?php the_post_thumbnail( $size );  }  ?>
</a>
</div>
<?php the_excerpt(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="read_more_link">Read More</a>
</div>
<?php endwhile;
 twentytwelve_content_nav( 'nav-below' );
?>
<?php $wp_query = null; $wp_query = $temp;?>
<!-- stop The Loop. -->
</div><!-- container -->
<?php get_footer(); ?>