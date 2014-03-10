<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<main class="main  l-main  clearfix  lc">
		<article class="l-content  lc">


		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<h1 class="post-title  m-center"><?php the_title(); ?></h1>
				<?php the_content(); ?>			
			<?php endwhile; ?>
		<?php else : ?>

			<h1 class="post-title  m-center">Not Found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

		</article>

	</main>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>