<?php

$args = array(
	'posts_per_page'=> 3,
	'post_type' => 'news',
	'orderby' => 'date',
	'order' => 'DESC'
);
$news_list = get_posts( $args );

?>
  <div class="front-mainvisual">
    <p class="front-mainvisual-bg">
      <img class="front-mainvisual-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/main-visual.png'); ?>" />
      <img class="front-mainvisual-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/main-visual.png'); ?>" />
    </p>
    <div class="front-mainvisual-content">
      <p class="front-mainvisual-nakano">中野製薬<span class="small">の</span></p>
      <div class="front-mainvisual-english">
        <p class="front-mainvisual-odm">ODM</p>
        <p class="front-mainvisual-line">
          <img class="front-mainvisual-line-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/main-visual-line.png'); ?>" />
          <img class="front-mainvisual-line-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/main-visual-line.png'); ?>" />
        </p>
        <p class="front-mainvisual-oem">OEM</p>
      </div>
      <p class="front-mainvisual-text">製品の企画開発からアフターフォローまで<br/>充実したサポート体制でカスタマーサクセス<br class="sp-only" />へと導きます。</p>
      <?php if(is_front_page()): ?>
      <p class="main-button front-mainvisual-button"><a class="full-link" href="<?php echo get_site_url(); ?>/beginners/">初めてオリジナル商品の<br class="sp-only">開発をお考えの企業様</a></p>
      <?php else: ?>
      <div class="front-mainvisual-beginner">
        <p class="front-mainvisual-beginner-mark">
          <img class="front-mainvisual-beginner-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/main-visual-beginner-mark.png'); ?>" />
          <img class="front-mainvisual-beginner-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/main-visual-beginner-mark.svg'); ?>" />
        </p>
        <p class="front-mainvisual-beginner-text">初めてオリジナル商品の開発を<br class="sp-only" />お考えの<br class="pc-only" />企業様向けページです。</p>
      </div>
      <?php endif; ?>
      <div class="front-news-area">
        <div class="front-news-title">NEWS</div>
        <div class="front-news-content">
          <?php foreach($news_list as $news): ?>
          <div class="front-news-item">
            <div class="front-news-info">
              <p class="front-news-date"><?php echo date('Y.m.d', strtotime($news->post_date)); ?></p>
              <!-- <p class="front-news-news">NEWS</p> -->
            </div>
            <div class="front-news-topic"><?php echo $news->post_title; ?></div>
            <!-- <div class="front-news-topic"><a href="<?php //echo get_site_url(); ?>/news/<?php //echo $news->ID; ?>"><?php //echo $news->post_title; ?></a></div> -->
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>