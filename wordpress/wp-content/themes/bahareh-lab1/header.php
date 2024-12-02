<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <a class="logo" href=""><?php echo get_bloginfo('name') ?></a>
            </div>
            <div class="col-sm-6 hidden-xs">
                <form class="searchform">
                    <div>
                        <label class="screen-reader-text">Sök efter:</label>
                        <input type="text" />
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
    <form class="searchform">
        <div>
            <label class="screen-reader-text">Sök efter:</label>
            <input type="text" />
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
