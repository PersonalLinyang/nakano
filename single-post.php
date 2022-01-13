<?php

if(have_posts()){
	while(have_posts()){
		the_post();
	}
}

$tags = get_the_tags();

$related_column_id_list = array();
for($i = 1; $i <= 2; $i++) {
	$related_column_id = get_post_meta($post->ID, 'related_column_' . $i, true);
	array_push($related_column_id_list, $related_column_id);
}

$args_column = array(
	'post_type' => 'post',
	'include' => $related_column_id_list,
	'orderby' => 'date',
	'order' => 'DESC'
);
$related_column_list = get_posts( $args_column );

set_query_var( 'column_table_list', $related_column_list );


get_header();

?>

  <div class="main-header column-header">
    <div class="main-header-inner">
      <p class="main-header-en">Column</p>
      <p class="main-header-jp">お役立ちコラム</p>
    </div>
  </div>
  
  <div class="column-detail-title">
    <div class="column-detail-title-bg">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  
  <div class="column-detail-content">
    <?php the_content(); ?>
  </div>
  
  <div class="column-detail-footer">
    <p class="column-detail-link"><a class="full-link" href="<?php echo get_site_url(); ?>/features/">ナカノ式ODM/OEMの強み</a></p>
    
    <?php if(count($tags)): ?>
    <div class="column-detail-tag-list">
    <?php 
    $tag_counter = 0;
    foreach ($tags as $tag): 
    ?>
      <?php if($tag_counter > 0) { echo ','; } ?>
      <a href="<?php echo get_site_url(); ?>/column/tag/<?php echo $tag->slug; ?>/"><?php echo $tag->name; ?></a>
    <?php 
      $tag_counter++;
    endforeach;
    ?>
    </div>
    <?php endif; ?>
    
    <?php if(count($related_column_list)): ?>
    <div class="column-detail-related">
      <p class="column-detail-related-title">おすすめ関連コラム</p>
      <?php get_template_part( 'template-parts/column_table' ); ?>
    </div>
    <?php endif; ?>
    
  </div>

<?php 

get_footer();
