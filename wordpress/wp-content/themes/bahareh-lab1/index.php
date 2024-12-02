<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div><?php the_post_thumbnail() ?></div>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile;
else : ?>
    <p>Inga inlägg hittades</p>
<?php endif;
get_footer();
?>
