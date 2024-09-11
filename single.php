<?php 
get_header();
?>

<!-- THE INDEX PHP PAGE IS ASSIGNED TO THE BLOG PAGE!!!! Blog container for all of our posts-->
<!-- if we have posts show them -->  

<div id="hero">
<img src="<?php echo get_template_directory_uri() ;?>/images/owl-outside-view.jpg" alt="owlmain">
</div>
<!-- end hero -->

<div id="wrapper">
<main id="main" class="single_main">
<?php if(have_posts()) : ?>
<!-- show the posts by using a while loop-->
<?php while(have_posts()) : the_post() ;?>
<article class="post">
<h2 class="title">
<?php the_title() ;?>
</h2> 

<div class="meta">
<span><b>Posted By: </b><?php the_author() ;?></span>
<span><b>Posted On: </b><?php the_time('F j, Y g:i a') ;?></span>

</div>
<!-- close meta -->

<?php the_content() ;?>

</article>
<?php endwhile ; ?>
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>
<?php comments_template(); ?>
</main>

<?php get_sidebar(); ?>


</div>
<!-- close wrapper-->


<?php
get_footer();
?>