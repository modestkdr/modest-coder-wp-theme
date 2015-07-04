<?php get_header();?>

<div id="content-container" class="col-md-offset-1 col-md-10">
<?php if (have_posts()): while (have_posts()): the_post();?>
									<div class="row post-header">
										<div class="col-md-10">
											<h1 id="post-<?php the_ID();?>">
												<?php the_title();?></h1></div>
										<div class="col-md-2">
											<p class="post-date"><?php echo get_the_date();?></p>
										</div>
									</div>
												<div class="col-md-10">
												<div class="post-content">
													<?php the_content('Read the rest of this entry &raquo;');?>
												</div>

												<div class="navigation group">
												    <div class="alignleft"><?php previous_post_link('&laquo; %link')?></div>
												    <div class="alignright"><?php next_post_link('%link &raquo;')?></div>
												</div>
												<?php endwhile;else: ?>

		<div class="warning">
			<p>Sorry, but you are looking for something that isn't here.</p>
		</div>
		</div>
<?php endif;?>

</div>

<?php get_footer();?>
