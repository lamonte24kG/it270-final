<?php 
get_header();
?>

<!-- THE INDEX PHP PAGE IS ASSIGNED TO THE BLOG PAGE!!!! Blog container for all of our posts-->
<!-- if we have posts show them -->  

<div id="wrapper">
<!-- add wrong page image -->  

<main id="main">
<h2 >Uh Oh</h2>
<p>It looks like nothing was found in this location! Maybe try a different search</p>
<?php get_search_form() ; ?>
<h3>Or, please feek free to browse our pages </h3>
<?php wp_list_pages() ; ?>
</main>

<aside>
this is my 404.php page!
</aside>

</div>
<!-- close wrapper-->


<?php
get_footer();
?>