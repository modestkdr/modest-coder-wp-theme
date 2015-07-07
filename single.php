<?php get_header();?>

<div id="content-container" class="col-md-offset-1 col-md-10">
	<?php if (have_posts()): while (have_posts()): the_post();?>
				<div class="row post-header">
					<div class="col-md-10">
						<h1 id="post-<?php the_ID();?>">
							<?php the_title();?></h1></div>

							<div class="col-md-2">
								<p class="post-date"><?php echo get_the_date('M j, Y');?></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="post-content">
								<p>
									<a href="https://twitter.com/share" class="twitter-share-button"
									data-via="Srikanth_AD" data-dnt="true">Tweet</a></p>
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
			<div id="disqus_thread"></div>
			<script type="text/javascript">
				var disqus_shortname = 'srikanthad';
				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
			</script>

		</div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<?php get_footer();?>
