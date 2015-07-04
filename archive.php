<?php get_header();?>

<div id="content-container" class="post-list col-md-offset-1 col-md-10">

<?php if (is_category('Projects') && have_posts()): ?>
	projects
<?php endif;?>

<?php if (have_posts() && !is_category('Projects')): ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php while (have_posts()): the_post();?>
						<article>
							<div class="col-md-3">

															</div>
															<div class="col-md-9">
																<h2 id="post-<?php the_ID();?>"><a href="<?php the_permalink()?>" rel="bookmark"><?php the_title();?></a></h2>
																<p class="post-list-date"><?php echo get_the_date();?></p>
																		<div class="main">
																			<?php the_content(' ... read more');?>
																		</div>
															</div>
						</article>



																		<?php endwhile;else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif;?>

<div class="navigation group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries')?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;')?></div>
</div>

</div>

<?php get_footer();?>
