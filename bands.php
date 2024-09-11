<?php 
get_header();
/* Template Name: Bands Page */
?>
<!-- In the above php you MUST add the comment with template name!!!!!-->
<!-- THE INDEX PHP PAGE IS ASSIGNED TO THE BLOG PAGE!!!!-->
<!-- if we have posts show them -->  

<div id="wrapper">
<main id="bands_main">
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

<aside>
This my bands aside
</aside>




</div>
<!-- close wrapper-->


<?php
get_footer();
?>