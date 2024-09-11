<?php 
get_header();
?>

<!-- THE INDEX PHP PAGE IS ASSIGNED TO THE BLOG PAGE!!!! Blog container for all of our posts-->
<!-- if we have posts show them -->  

<div id="wrapper">
<!-- add picture here -->

<main id="main">
<?php if(have_posts()) : ?>
<!-- show the posts by using a while loop-->
<!-- add picture here -->
<h2>Search Results For: <?php echo get_search_query() ;?>
</h2>
<!-- add how many posts or pages were found -->
<p>Our findings for
<?php /* Search Count */
$allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></p>
<?php while(have_posts()) : the_post() ;?>
<article class="post">
<h2 class="title">
<a href="<?php the_permalink() ;?>">
<?php the_title() ;?>
</a>
</h2> 

<div class="meta">
<span><b>Posted By: </b><?php the_author() ;?></span>
<span><b>Posted On: </b><?php the_time('F j, Y g:i a') ;?></span>

</div>
<!-- close meta -->

<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink() ;?>">
<?php the_post_thumbnail(); ?>
</a>
<?php endif ?>

</div>
<!-- end thumbnail -->

<?php the_excerpt() ;?>
<span class="block">
<a href="<?php the_permalink() ;?>">Read more about <?php the_title(); ?> </a>
</span>




</article>
<?php endwhile ; ?>
<?php else : ?>
<h2>
No Content For:
<?php echo get_search_query() ;?>
</h2>
<p>Sorry, we could not find anything matching your search terms. Would you like to search again, using different keywords?
</p>
<?php get_search_form();  ?>
<?php endif; ?>
</main>

<?php get_sidebar(); ?>

</div>
<!-- close wrapper-->


<?php
get_footer();
?>