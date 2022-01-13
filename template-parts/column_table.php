<?php

$column_list = get_query_var( 'column_table_list' );

?>

  <div class="column-table">
    <div class="column-table-line">
    <?php foreach($column_list as $index => $column): ?>
    <?php if($index > 0 && $index % 2 == 0): ?>
    </div><div class="column-table-line">
    <?php endif; ?>
      <div class="column-table-item">
        <div class="column-table-top">
        <?php
        $today = date("Y-m-d");
        $posted = date('Y-m-d', strtotime($column->post_date));
        $day = day_diff($today, $posted);
        ?>
        <?php if ($day <= 7) : ?>
          <p class="column-table-mark">NEW</p>
        <?php endif; ?>
          <p class="column-table-no">Column : <?php echo $column->post_name; ?> / <?php echo date('Y.m.d', strtotime($column->post_date)); ?></p>
        </div>
        <p class="column-table-title"><?php echo $column->post_title; ?></p>
        <div class="column-table-info">
          <div class="column-table-thumb">
            <img src="<?php echo get_the_post_thumbnail_url($column->ID, 'large'); ?>" />
          </div>
          <div class="column-table-content">
            <p class="column-table-text"><?php echo get_post_meta($column->ID, 'short_content', true); ?></p>
            <p class="column-table-button pc-only"><a class="full-link" href="<?php echo get_site_url(); ?>/column/column<?php echo $column->post_name; ?>/">READ</a></p>
          </div>
        </div>
        <p class="column-table-button sp-only"><a class="full-link" href="<?php echo get_site_url(); ?>/column/column<?php echo $column->post_name; ?>/">READ</a></p>
        <div class="column-table-tag">
          <?php 
          $tag_counter = 0;
          foreach (wp_get_post_tags($column->ID) as $tag): 
          ?>
            <?php if($tag_counter > 0) { echo ','; } ?>
            <a href="<?php echo get_site_url(); ?>/column/tag/<?php echo $tag->slug; ?>/"><?php echo $tag->name; ?></a>
          <?php 
            $tag_counter++;
          endforeach;
          ?>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
  