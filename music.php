<?php 
get_header();
/* Template Name: Music Page */
?>
<!-- In the above php you MUST add the comment with template name!!!!!-->
<!-- THE INDEX PHP PAGE IS ASSIGNED TO THE BLOG PAGE!!!!-->
<!-- if we have posts show them -->  

<div id="hero_bands">
<img src="<?php echo get_template_directory_uri() ;?>/images/home-header1-scaled.jpg" alt="bands_main">
</div>



<div id="wrapper">
<main id="music_main">
<?php if(have_posts()) : ?>
<!-- show the posts by using a while loop-->
<?php while(have_posts()) : the_post() ;?>
<?php the_content() ;?>
<?php endwhile ; ?>
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>
</main>

<!-- <aside id="music_aside">
This my music aside
</aside> --> 




</div>
<!-- close wrapper-->


<?php
get_footer();
?>