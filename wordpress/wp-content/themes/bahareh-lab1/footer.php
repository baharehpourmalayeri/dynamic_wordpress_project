<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4><?php echo 'Kort om oss'; ?></h4>
                <div>
                    <?php
                    if (is_active_sidebar('footer_widget_area')) {
                        dynamic_sidebar('footer_widget_area');
                    } else {
                        echo '<p>' . 'No content in footer widget.' . '</p>';
                    }
                    ?>
                </div>
            </div>


            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Kontaktuppgifter</h4>
                <div>
                    <?php
                    if (is_active_sidebar('footer_contact_us_widget')) {
                        dynamic_sidebar('footer_contact_us_widget');
                    } else {
                        echo '<p>' . 'No contact details available.' . '</p>';
                    }
                    ?>
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
                    <p>Copyright &copy; <?php echo 'Grupp X'; ?>, <?php echo date('Y'); ?> </p>
                </div>
            </div>
        </div>
</footer>
