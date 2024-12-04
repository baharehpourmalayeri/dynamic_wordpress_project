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
                        <h1><?php echo get_the_title() ?></h1>
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <div><?php the_content(); ?></div>
                            <?php endwhile;
                        else : ?>
                            <p>Inget innehåll hittades på denna sida.</p>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </section>
        </main>

        <?php get_footer() ?>

    </div>

</body>

</html>
