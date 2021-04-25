<?php get_header(); ?>

<section id="main-content">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<article class="post resume">
				<header class="post-title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<small class="meta"><?php the_time(get_option('date_format')); ?>&bull; <?php the_category(', '); ?></small>
				</header>
				<div class="post-content">
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir leyendo &rarr;', 'apk'); ?></a>
				</div>
			</article> <!-- article -->

		<?php endwhile;
	else : ?>

		<article class="post resume">
			<header class="post-title">
				<h2><?php _e('No hay contenidos disponibles', 'apk'); ?></h2>
			</header>
			<div class="post-content">
				<p><?php _e('No hay contenidos que correspondan con esta pagina, por favor realiza una busqueda para encontrar lo que deseas ver:', 'apk'); ?></p>
				<?php get_search_form(); ?>
			</div>
		</article> <!-- article -->


	<?php endif; ?>

	<div class="posts-nav cf">
		<a href="">&larr; Previos</a>
		<a href="">Recientes &rarr;</a>
	</div>


</section><!-- /#main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>