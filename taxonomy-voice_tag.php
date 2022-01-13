<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = intval(get_option('posts_per_page'));
$offset = ($paged - 1) * $posts_per_page;

$type = get_query_var( 'voice_tag' );
$args_voice = array(
  'posts_per_page' => $posts_per_page,
  'offset' => $offset,
  'post_type' => 'voice',
  'orderby' => 'date',
  'order' => 'ASC',
  'tax_query' => array(
    array(
    'taxonomy' => 'voice_tag',
    'field' => 'slug',
    'terms' => $type,
    ),
    ),
);
$voice_list = get_posts($args_voice);

get_header();
?>

<div class="main-header voice-header">
  <div class="main-header-inner">
    <h1>
      <p class="main-header-en">Voice</ｐ>
      <p class="main-header-jp">お客様の声</p>
    </h1>
  </div>
</div>

<div class="main-map pc-only">
  <p class="main-map-item"><a href="<?php echo get_site_url(); ?>/">TOP</a></p>
  <p class="main-map-item">お客様の声</p>
</div>

<div class="voice">
  <div class="inner">
    <!-- お客様の声 -->
    <div class="front-voice-line voice-line">
      <?php foreach ($voice_list as $index => $voice) : ?>
        <div class="front-voice-item">
          <div class="voice-list-header">
            <p class="new-tag">NEW</p>
            <p class="front-voice-user-no">Voice : <?php echo $voice->post_name; ?> / <?php echo date('Y.m.d', strtotime($voice->post_date)); ?></p>
          </div>
          <p class="voice-line-title-sp sp-only"><?php echo nl2br(get_post_meta($voice->ID, 'company', true)); ?></p>
          <div class="front-voice-info">
            <div class="front-voice-photo">
              <img class="front-voice-photo-img" src="<?php echo get_the_post_thumbnail_url($voice->ID); ?>" />
            </div>
            <div class="front-voice-user-info voice-info">
              <p class="front-voice-user-company pc-only"><?php echo nl2br(get_post_meta($voice->ID, 'company', true)); ?></p>
              <div class="front-voice-user-position">
                <p class="text"><?php echo nl2br(get_post_meta($voice->ID, 'position', true)); ?></p>
              </div>
              <p class="front-voice-user-name"><?php echo get_post_meta($voice->ID, 'name', true); ?>さま</p>
            </div>
          </div>
          <div class="front-voice-title">
            <p class="front-voice-title-quote left">“</p>
            <p class="front-voice-title-text"><?php echo $voice->post_title; ?></p>
            <p class="front-voice-title-quote right">”</p>
          </div>
          <div class="front-voice-content">
            <p class="front-voice-content-text"><?php echo nl2br(get_post_meta($voice->ID, 'message', true)); ?></p>
            <p class="front-voice-content-button"><a class="full-link" href="<?php echo get_site_url(); ?>/voice/voice<?php echo $voice->post_name; ?>/">READ</a></p>
          </div>
          <?php
					if ($voice_tags = get_the_terms($voice->ID, 'voice_tag')) :
					?>
						<div class="voice-tag-area">
							<ul class="voice-tag-area-list">
								<?php
								$tag_counter = 0;
								foreach ($voice_tags as $voice_tag) :
								?>
									<li class="voice-tag-area-list-item">
										<a href="<?php echo esc_url(get_term_link($voice_tag, 'voice_tag')); ?>"><?php echo $voice_tag->name; ?></a><?php if ($tag_counter > 0) {echo ',';} ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
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
</div>

<?php

get_footer();
