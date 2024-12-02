<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labb 1</title>
    <?php wp_head() ?>

<?php wp_body_open() ?>
</head>
<body <?php body_class(); ?>>

<header>
    <?php wp_nav_menu(array('container' => 'nav')); ?>
</header>
