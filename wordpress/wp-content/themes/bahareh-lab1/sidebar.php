<aside id="sidebar" class="col-xs-12 col-md-3">

  <div class="widget">
    <h4>Sök efter:</h4>
    <?php get_search_form(); ?>
  </div>

  <div class="widget">
    <h2>Sidor</h2>
    <?php
    wp_nav_menu([
      'theme_location' => 'sidebar',
      'container' => false,
      'menu_class' => 'widget widget_pages',
    ]);
    ?>
  </div>

  <div class="widget">
    <h2>Arkiv</h2>
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
  </div>

  <div class="widget">
    <h2>Kategorier</h2>
    <ul>
      <?php
    
      $category_counts = array();

      if (have_posts()) :
        while (have_posts()) : the_post();
          $categories = get_the_category_list(', ');
          if ($categories) :
            $category_ids = get_the_category();
            foreach ($category_ids as $category) :
              $category_counts[$category->term_id] = isset($category_counts[$category->term_id]) ? $category_counts[$category->term_id] + 1 : 1;
            endforeach;
          endif;
        endwhile;

        foreach ($category_counts as $category_id => $count) :
          $category = get_category($category_id);
          echo '<li><a href="' . home_url('/category/' . $category->slug) . '">' . esc_html($category->name) . ' (' . $count . ')</a></li>';
        endforeach;
      endif;
      ?>
    </ul>
  </div>

</aside>
