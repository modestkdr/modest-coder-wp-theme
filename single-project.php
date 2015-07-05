<?php
/*
Single Post Template: Project
Description: Post Template for Project
 */
?>

<?php get_header();?>

<div id="content-container" class="col-md-offset-1 col-md-10">
<?php if (have_posts()): while (have_posts()): the_post();?>
														<div class="row post-header">
															<div class="col-md-10">
																<h1 id="post-<?php the_ID();?>">
																	<?php the_title();?></h1></div>

														</div>
																	<div class="col-md-12">
																	<div class="post-content">
																		<?php the_content();?>
																	</div>

																	<?php endwhile;else: ?>

		</div>
<?php endif;?>


</div>

<?php get_footer();?>
