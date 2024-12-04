<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <a class="logo" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>


            <div class="col-sm-6 hidden-xs">
                <form class="searchform" action="<?php echo home_url('/'); ?>" method="get">
                    <div>
                        <label class="screen-reader-text" for="s"><?php echo 'Sök efter:'; ?></label> <!-- Skriver text -->
                        <input type="text" name="s" id="s" value="" /> <!-- Vi lämnar fältet tomt, eftersom get_search_query() inte är tillgänglig -->
                        <input type="submit" value="Sök" />
                    </div>
                </form>
            </div>

            <div class="col-xs-4 text-right visible-xs">
                <div class="mobile-menu-wrap">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-bars menu-icon"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-search">
    <form class="searchform" action="<?php echo home_url('/'); ?>" method="get">
        <div>
            <label class="screen-reader-text" for="s"><?php echo 'Sök efter:'; ?></label>
            <input type="text" name="s" id="s" value="" />
            <input type="submit" value="Sök" />
        </div>
    </form>
</div>

<nav id="nav">
    <div class="container">
        <div class="row">
            <?php
            wp_nav_menu(array(
                'container_class' => 'col-xs-12',
                'menu_id' => 'menu-huvudmeny'
            ));
            ?>
        </div>
    </div>
</nav>
