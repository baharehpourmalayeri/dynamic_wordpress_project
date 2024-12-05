<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<?php wp_body_open(); ?>
</head>

<body>
	<div id="wrap">
		<?php get_header() ?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Kategori: <?php single_cat_title() ?> </h1>
							<?php
							if (have_posts()) :
								while (have_posts()) : the_post(); ?>
									<article>
										<img src="<?php the_post_thumbnail_url('785x523'); ?>" />
										<h2 class="title">
											<a href="<?php the_permalink(); ?>"><?php echo get_the_title() ?></a>
										</h2>
										<ul class="meta">
											<li>
												<i class="fa fa-calendar"></i><?php echo the_date() ?>
											</li>
											<li>
												<i class="fa fa-user"></i> <?php echo get_the_author_posts_link() ?>
											</li>
											<li>
												<i class="fa fa-tag"></i><?php echo the_category(', ') ?>
											</li>
										</ul>
										<p>
											<?php echo the_excerpt() ?>
										</p>
									</article>
								<?php endwhile;
							else : ?>
								<p>Inget innehåll hittades på denna sida.</p>
							<?php endif;
							?>
							<nav class="navigation pagination" aria-label="Sidonumrering för inlägg">
								<h2 class="screen-reader-text">Sidonumrering för inlägg</h2>
								<span aria-current="page" class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</main>

		<?php get_footer() ?>

	</div>

</body>

</html>
