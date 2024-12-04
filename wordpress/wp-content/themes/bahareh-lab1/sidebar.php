<aside id="sidebar" class="col-xs-12 col-md-3">
  <div class="widget">
    <h4>Sidor</h4>
    <ul>
      <?php
      wp_list_pages([
        'title_li' => '',
      ]);
      ?>
    </ul>
  </div>

  <div class="widget">
    <h4>Arkiv</h4>
    <ul>
      <?php
      wp_get_archives([
        'type' => 'monthly',
      ]);
      ?>
    </ul>
  </div>

  <div class="widget">
    <h4>Kategorier</h4>
    <ul>
      <?php
      wp_list_categories([
        'title_li' => '',
        'show_count' => true,
      ]);
      ?>
    </ul>
  </div>
</aside>
