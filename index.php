<?php 
get_header();
?>

<!-- THE INDEX PHP PAGE IS ASSIGNED TO THE BLOG PAGE!!!! Blog container for all of our posts-->
<!-- if we have posts show them -->  
<div id="hero_blogs">
<img src="<?php echo get_template_directory_uri() ;?>/images/" alt="dining room">
</div>

<!--
<div id="hero_blog">
<img class="img_hero" src="<?php echo get_template_directory_uri() ;?>/images/" alt="owl dining room">
</div> -->
<!-- end hero -->

<div id="wrapper">
<main id="main" class="blog_main">
<?php if(have_posts()) : ?>
<!-- show the posts by using a while loop-->

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
Search Results:
</h2>
<p>Sorry, we could not find anything matching your search terms. Would you like to search again, using different keywords?
</p>
<?php get_search_form();  ?>
<?php endif; ?>
</main>

<?php get_sidebar() ; ?>




</div>
<!-- close wrapper-->


<?php
get_footer();
?>