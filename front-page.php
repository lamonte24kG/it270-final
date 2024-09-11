<?php 
get_header();
/* Template Name: Front Page */
?>
<!-- In the above php you MUST add the comment with template name!!!!!-->
<!-- THE INDEX PHP PAGE IS ASSIGNED TO THE BLOG PAGE!!!!-->
<!-- if we have posts show them -->  

<div id="hero">
<img src="<?php echo get_template_directory_uri() ;?>/images/0wlfront2.png" alt="owlmain">
</div>
<!-- end hero -->


<div id="wrapper">
    <div class="inner-wrapper">

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



</div>
<!-- close inner wrapper-->
</div>
<!-- close wrapper-->


<?php
get_footer();
?>