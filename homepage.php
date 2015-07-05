<?php
/*
Template Name: Homepage
 */
?>

<?php get_header();?>

<div id="content-container" class="col-md-offset-1 col-md-10">
<div class="page-content homepage-content">
		<div class="col-md-12 latest-article">
			<?php $cat_id = 2;
$latest_cat_post = new WP_Query(array('posts_per_page' => 1, 'category__in' => array($cat_id)));
if ($latest_cat_post->have_posts()): while ($latest_cat_post->have_posts()): $latest_cat_post->the_post();?>

																																															<h1><a href="<?php the_permalink()?>">
																																															<?php the_title();?></a></h1>
																																															<p class="latest-post-date"><?php the_date();?></p>

																																															<?php the_content();?>

																																															<?php endwhile;endif;?>
		</div>

	<div class="container-fluid projects">
			<h3 class="grey">Projects</h3>

			<?php $cat_id = 8;
$latest_cat_post = new WP_Query(array('posts_per_page' => 3, 'category__in' => array($cat_id)));
if ($latest_cat_post->have_posts()): while ($latest_cat_post->have_posts()): $latest_cat_post->the_post();?>
				<div class="col-md-4 project-card">
														<h4><a href="<?php the_permalink()?>">
														<?php the_title();?></a></h4>
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a></div>

										<?php endwhile;endif;?>
</div>
</div>
</div>


<?php get_footer();?>
