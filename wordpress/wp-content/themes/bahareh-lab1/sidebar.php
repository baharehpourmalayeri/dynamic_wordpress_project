<aside id="secondary" class="col-xs-12 col-md-3">
  <div id="sidebar">
    <ul>
      <h4>Sök efter:</h4>
      <li id="search-2" class="widget widget_search">
        <?php get_search_form(); ?>
      </li>
    </ul>
    <ul role="navigation">
      <li id="pages-2" class="widget widget_pages">
        <?php
        if (is_active_sidebar('main-sidebar')) {
          dynamic_sidebar('main-sidebar');
        }
        ?>
      </li>
      <li id="archives-2" class="widget widget_archive">
        <h2 class="widgettitle">Arkiv</h2>
        <ul>
          <?php
          if (have_posts()) :
            $current_month = '';
            while (have_posts()) : the_post();
              $post_date = get_the_date('F Y');


              if ($post_date !== $current_month) :
                $current_month = $post_date;
                echo '<li><a href="#">' . $post_date . '</a></li>';
              endif;
            endwhile;
          else :
            echo '<li>Inga arkiv hittades.</li>';
          endif;
          ?>
        </ul>
      </li>

      <li id="categories-2" class="widget widget_categories">
        <h2 class="widgettitle">Kategorier</h2>
        <ul>
          <?php
          $categories = get_categories();
          foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category) . '">' . esc_html($category->name) . '</a> (' . $category->count . ')</li>';
          }
          ?>
        </ul>
      </li>
    </ul>
  </div>
  </div>
</aside>
