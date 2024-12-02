<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div><?php the_content(); ?></div>
    <?php endwhile;
else : ?>
    <p>Inget innehåll hittades på denna sida.</p>
<?php endif;
get_footer();
?>
