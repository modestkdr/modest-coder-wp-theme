<?php get_header();?>

<div id="content-container" class="post-list col-md-offset-1 col-md-10">

	<?php if (is_category('Projects') && have_posts()): ?>

		<?php $cat_id = 8;
$latest_cat_post = new WP_Query(array('posts_per_page' => 5, 'category__in' => array($cat_id)));
if ($latest_cat_post->have_posts()): while ($latest_cat_post->have_posts()): $latest_cat_post->the_post();?>
						<div class="project-card">
							<h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
							<?php the_content(' ... read more');?>
						</div>
					<?php endwhile;endif;?>

<?php endif;?>

<?php if (have_posts() && !is_category('Projects')): ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

	<?php while (have_posts()): the_post();?>
				<article>
					<div class="col-md-3 post-thumbnail-container">
						<?php the_post_thumbnail('attachment-thumbnail', array('class' => 'img-responsive'));?>
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
<?php endif;?>

<div class="navigation group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries')?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;')?></div>
</div>

</div>

<?php get_footer();?>
