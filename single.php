<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h1><span class="glyphicon glyphicon-education" aria-hidden="true"></span>milUniversity</h1>
		</div>
	</div>
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="blog-post">
				<h2 class="blog-post-title">
					<?php the_title(); ?>
				</h2>
				<p class="blog-post-meta">
					<?php the_time('F j, Y g:i a'); ?>
					by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
						<?php the_author(); ?>
					</a>
				</p>
				<?php if(has_post_thumbnail()) : ?>
					<div class="post-thumb">
						<?php the_post_thumbnail() ?>
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
				<hr>
				<?php comments_template(); ?>
			</div>
		<?php endwhile; ?>
	<?php else: ?>
		<p><?php __('No Post Found'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>


