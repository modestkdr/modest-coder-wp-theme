<?php
/*
Template Name: Page No Sidebar
 */
?>

<?php get_header();?>

<div id="content-container" class="col-md-offset-1 col-md-10">

<?php if (have_posts()): while (have_posts()): the_post();?>

												<div class="main">
													<?php the_content();?>
												</div>

												<?php endwhile;else: ?>

<?php endif;?>

</div>


<?php get_footer();?>
