<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4><?php echo 'Kort om oss'; ?></h4>
                <div>
                    <p>
                        <?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.'; ?>
                    </p>
                    <p>
                        <?php echo 'Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.'; ?>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4><?php echo 'Kontaktuppgifter'; ?></h4>
                <div>
                    <p><strong><?php echo 'The Company'; ?></strong></p>
                    <p><?php echo 'Gatgatan 1'; ?></p>
                    <p><?php echo '123 45 Någonstans'; ?></p>
                    <p><?php echo 'Tel: 0123456789'; ?></p>
                    <p><?php echo 'E-post: '; ?><a href="mailto:info@thecompany.com"><?php echo 'info@thecompany.com'; ?></a></p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Social media</h4>
                <div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'social',
                        'container' => false,
                        'menu_class' => 'social',
                        'depth' => 1,
                        'walker' => new class extends Walker_Nav_Menu {
                            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
                            {
                                $icon_class = 'fa ' . $item->attr_title;
                                $output .= '<li class="' . implode(' ', $item->classes) . '"><i class="' . $icon_class . '"></i> <a href="' . $item->url . '">' . $item->title . '</a></li>';
                            }
                        },

                    ));
                    ?>
                </div>
            </div>

            <div class="row bottom">
                <div class="col-xs-12">
                    <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo 'Grupp X'; ?></p>
                </div>
            </div>
        </div>
</footer>
