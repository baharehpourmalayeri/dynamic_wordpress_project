<?php

/**
 * Footer Template with Widgets
 */
?>
<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4><?php echo esc_html__('Kort om oss', 'your-theme'); ?></h4>
                <div>
                    <?php
                    $undersida_page = get_page_by_path('Undersida');

                    if ($undersida_page) {
                        $content = apply_filters('the_content', $undersida_page->post_content);
                        $excerpt = wp_trim_words($content, 32, '');
                        $excerpt = str_replace('ex.', 'ex.<br/>', $excerpt);
                        echo '<p>' . wp_kses_post($excerpt) . '</p>';
                    }
                    ?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4><?php echo esc_html__('Kontaktuppgifter', 'your-theme'); ?></h4>
                <div>
                    <?php if (is_active_sidebar('footer-contact')) : ?>
                        <?php dynamic_sidebar('footer-contact'); ?>
                    <?php else: ?>
                        <p><?php echo esc_html__('The Company', 'your-theme'); ?><br />
                            <?php echo esc_html__('Gatgatan 1', 'your-theme'); ?><br />
                            <?php echo esc_html__('123 45 Någonstans', 'your-theme'); ?></p>
                        <p><?php echo esc_html__('Tel: 0123456789', 'your-theme'); ?><br />
                            <?php echo esc_html__('E-post: ', 'your-theme'); ?><a href="mailto:info@thecompany.com">info@thecompany.com</a></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4><?php echo esc_html__('Social media', 'your-theme'); ?></h4>
                <div>
                    <?php if (is_active_sidebar('footer-social')) : ?>
                        <?php dynamic_sidebar('footer-social'); ?>
                    <?php else: ?>
                        <ul class="social">
                            <li><i class="fa fa-facebook"></i> <a href="#">Facebook</a></li>
                            <li><i class="fa fa-twitter"></i> <a href="#">Twitter</a></li>
                            <li><i class="fa fa-instagram"></i> <a href="#">Instagram</a></li>
                            <li><i class="fa fa-linkedin"></i> <a href="#">LinkedIn</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo esc_html__('Grupp X', 'your-theme'); ?></p>
            </div>
        </div>
    </div>
</footer>
