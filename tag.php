<?php

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$posts_per_page = intval(get_option('posts_per_page'));
$offset = ($paged - 1) * $posts_per_page;

$tag = get_queried_object();

$args_column = array(
	'posts_per_page' => $posts_per_page,
	'offset' => $offset,
	'post_type' => 'post',
	'orderby' => 'date',
	'order' => 'DESC',
	'tag_id' => $tag->term_id,
);
$column_list = get_posts( $args_column );
set_query_var( 'column_table_list', $column_list );

get_header();
?>

  <div class="main-header column-header">
    <div class="main-header-inner">
      <p class="main-header-en">Column</p>
      <p class="main-header-jp">お役立ちコラム</p>
    </div>
  </div> 
  
  <div class="main-map pc-only">
    <p class="main-map-item"><a href="<?php echo get_site_url(); ?>/">TOP</a></p>
    <p class="main-map-item"><a href="<?php echo get_site_url(); ?>/column/">お役立ちコラムTOP</a></p>
    <p class="main-map-item"><?php echo $tag->name; ?></p>
  </div>
  
  <?php get_template_part( 'template-parts/column_table' ); ?>

  <div class="column-pagenation">
  <?php the_posts_pagination(
    array(
      'mid_size'      => 2,
      'prev_next'     => true,
      'prev_text'     => '<',
      'next_text'     => '>',
      'type'          => 'list',
    )
  ); ?>
  </div>
  
<?php

get_footer();
