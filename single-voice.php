<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
  }
}

get_header();

$related_voice_id_list = array();
for ($i = 1; $i <= 2; $i++) {
  $related_voice_id = get_post_meta($post->ID, 'related_voice_' . $i, true);
  array_push($related_voice_id_list, $related_voice_id);
}

$args_voice = array(
  'post_type' => 'voice',
  'include' => $related_voice_id_list,
  'orderby' => 'date',
  'order' => 'ASC'
);
$voice_list = get_posts($args_voice);

?>
<div class="main-header voice-header">
  <div class="main-header-inner">
    <h1>
      <p class="main-header-en">Voice</ｐ>
      <p class="main-header-jp">お客様の声</p>
    </h1>
  </div>
</div>
<div class="voice voice-detail">
  <div class="inner">
    <div class="voice-title">
      <p class="voice-title-quote-left"><img src="<?php echo get_theme_file_uri('/assets/img/pc/voice/quote-mark-left.png'); ?>"></p>
      <h1><?php the_title(); ?></h1>
      <p class="voice-title-quote-right"><img src="<?php echo get_theme_file_uri('/assets/img/pc/voice/quote-mark-right.png'); ?>"></p>
    </div>
  </div>
  <div class="voice-detail-content">
    <?php the_content(); ?>
  </div>
  <div class="inner">
    <?php
    if ($tags = get_the_terms($post->ID, 'voice_tag')) : ?>
      <!-- <div class="voice-tag-block">
        <div class="voice-tag-area">
          <ul class="voice-tag-area-list">
            <?php
            $tag_counter = 0;
            foreach ($tags as $tag) :
            ?>
              <li class="voice-tag-area-list-item">
                <a href="<?php echo esc_url(get_term_link($tag, 'voice_tag')); ?>"><?php echo $tag->name; ?><?php if ($tag_counter > 0) {echo ',';} ?></a>
              </li>
            <?php
              $tag_counter++;
            endforeach;
            ?>
          </ul>
        </div>
      </div> -->
    <?php endif; ?>
    <!-- おすすめのインタビュー記事 -->
    <div class="voice-recommend">
      <p class="main-title-jp">おすすめのインタビュー記事</p>
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
            if ($tags = get_the_terms($voice->ID, 'voice_tag')) :
            ?>
              <!-- <div class="voice-tag-area">
                <ul class="voice-tag-area-list">
                  <?php
                  $tag_counter = 0;
                  foreach ($tags as $tag) :
                  ?>
                    <li class="voice-tag-area-list-item">
                      <a href="<?php echo esc_url(get_term_link($voice_tag, 'voice_tag')); ?>"><?php echo $tag->name; ?></a><?php if ($tag_counter > 0) {echo ',';} ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div> -->
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- /おすすめのインタビュー記事 -->
  <?php
  get_footer();
