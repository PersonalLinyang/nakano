<?php

$args_column = array(
	'posts_per_page'=> 4,
	'post_type' => 'post',
	'orderby' => 'date',
	'order' => 'DESC'
);
$column_list = get_posts( $args_column );
set_query_var( 'column_table_list', $column_list );

$args_voice = array(
	'posts_per_page'=> 2,
	'post_type' => 'voice',
	'orderby' => 'date',
	'order' => 'ASC'
);
$voice_list = get_posts( $args_voice );

?>

  <div class="front-about">
    <p class="main-title-en dark">ABOUT US</p>
    <p class="main-title-jp">中野製薬の<br class="sp-only" /><span class="en">ODM</span><span class="en light">/</span><span class="en">OEM</span>について</p>
    <p class="main-desc">創業当初より60年間、<br class="sp-only" />プロフェッショナル向け製品の開発を<br class="sp-only" />通して培ってきたノウハウと技術、<br/>美容のプロである美容師様に支持され続けてきた<br class="sp-only" />品質へのこだわりを強みとして、<br class="sp-only" />お客様のニーズに応えます。</p>
    <div class="front-about-content">
      <div class="front-about-bg">
        <img class="front-about-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-about-img.jpg'); ?>" />
        <img class="front-about-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-about-img.jpg'); ?>" />
      </div>
      <div class="front-about-text">
        <p class="front-about-left">製品開発の豊富なノウハウと技術</p>
        <p class="front-about-center"></p>
        <p class="front-about-right">フレキシブル・スピーディな対応</p>
      </div>
    </div>
    <p class="main-button"><a class="full-link" href="<?php echo get_site_url(); ?>/aboutus/">MORE</a></p>
  </div>
  
  <div class="front-features">
    <p class="main-title-en">FEATURES</p>
    <p class="main-title-jp">ナカノ式<span class="en">ODM</span><span class="en light">/</span><span class="en">OEM</span>の強み</p>
    <div class="front-features-content">
      <div class="front-features-line">
        <div class="front-features-item">
          <p class="front-features-point">POINT</p>
          <p class="front-features-number">01</p>
          <p class="front-features-text">お客さまを成功へ導く<br/>トータルサポート</p>
        </div>
        <div class="front-features-item">
          <p class="front-features-point">POINT</p>
          <p class="front-features-number">02</p>
          <p class="front-features-text">実績とノウハウをもとに<br/>先進技術を活かした製品開発</p>
        </div>
      </div>
      <div class="front-features-line">
        <div class="front-features-item">
          <p class="front-features-point">POINT</p>
          <p class="front-features-number">03</p>
          <p class="front-features-text">環境に配慮した活動と<br/>厳しい管理基準に基づく<br/>高品質な製品づくり</p>
        </div>
        <div class="front-features-item">
          <p class="front-features-point">POINT</p>
          <p class="front-features-number">04</p>
          <p class="front-features-text">海外ODM/OEMサポート</p>
        </div>
      </div>
    </div>
    <p class="main-button"><a class="full-link" href="<?php echo get_site_url(); ?>/features/">MORE</a></p>
  </div>
  
  <div class="front-cases">
    <p class="main-title-en">CASES/WORKS</p>
    <p class="main-title-jp">実例と実績</p>
    <div class="front-cases-content">
      <div class="front-cases-bg">
        <img class="front-cases-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-cases-img.png'); ?>" />
        <img class="front-cases-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-cases-img.png'); ?>" />
      </div>
      <div class="front-cases-line">
        <div class="front-cases-item left">
          <p class="front-cases-title-jp">ヘアケア</p>
          <p class="front-cases-title-en">HAIR CARE</p>
          <div class="front-cases-product">
            <div class="front-cases-product-item left">
              <p class="front-cases-product-bg">
                <img class="front-cases-product-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-cases-product-img-1.png'); ?>" />
                <img class="front-cases-product-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-cases-product-img-1.png'); ?>" />
              </p>
              <div class="front-cases-product-title">
                <p class="front-cases-product-title-company">C社</p>
                <p class="front-cases-product-title-number">約<span class="number">60,000</span>本</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">年商／</p>
                <p class="front-cases-product-info-content">20億円規模</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">流通先／</p>
                <p class="front-cases-product-info-content">EC、ドラッグストアなど</p>
              </div>
            </div>
            <div class="front-cases-product-item right">
              <p class="front-cases-product-bg">
                <img class="front-cases-product-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-cases-product-img-2.png'); ?>" />
                <img class="front-cases-product-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-cases-product-img-2.png'); ?>" />
              </p>
              <div class="front-cases-product-title">
                <p class="front-cases-product-title-company">H社</p>
                <p class="front-cases-product-title-number">約<span class="number">50,000</span>本</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">年商／</p>
                <p class="front-cases-product-info-content">790億円規模</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">流通先／</p>
                <p class="front-cases-product-info-content">業務用製品</p>
              </div>
            </div>
          </div>
        </div>
        <div class="front-cases-item right">
          <p class="front-cases-title-jp">スタイリング料</p>
          <p class="front-cases-title-en">STYLING</p>
          <div class="front-cases-product">
            <div class="front-cases-product-item left">
              <p class="front-cases-product-bg">
                <img class="front-cases-product-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-cases-product-img-1.png'); ?>" />
                <img class="front-cases-product-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-cases-product-img-1.png'); ?>" />
              </p>
              <div class="front-cases-product-title">
                <p class="front-cases-product-title-company">L社</p>
                <p class="front-cases-product-title-number">約<span class="number">10,000</span>本</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">年商／</p>
                <p class="front-cases-product-info-content">480億円規模</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">流通先／</p>
                <p class="front-cases-product-info-content">バラエティなど</p>
              </div>
            </div>
            <div class="front-cases-product-item right">
              <p class="front-cases-product-bg">
                <img class="front-cases-product-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-cases-product-img-2.png'); ?>" />
                <img class="front-cases-product-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-cases-product-img-2.png'); ?>" />
              </p>
              <div class="front-cases-product-title">
                <p class="front-cases-product-title-company">M社</p>
                <p class="front-cases-product-title-number">約<span class="number">1,000,000</span>本以上</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">年商／</p>
                <p class="front-cases-product-info-content">70億円規模</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">流通先／</p>
                <p class="front-cases-product-info-content">ドラッグストア<br/>バラエティなど</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="front-cases-comment">※2021年6月時点の累計</p>
    </div>
    <p class="main-button"><a class="full-link" href="<?php echo get_site_url(); ?>/aboutus/#works">MORE</a></p>
  </div>
  
  <div class="front-voice">
    <div class="front-voice-main-title">
      <img class="front-voice-main-title-quote left pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/quote-mark-left.png'); ?>" />
      <img class="front-voice-main-title-quote left sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/quote-mark-left.png'); ?>" />
      <p>ODM/OEMをご依頼された<br class="sp-only" />お客様の声</p>
      <img class="front-voice-main-title-quote right pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/quote-mark-right.png'); ?>" />
      <img class="front-voice-main-title-quote right sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/quote-mark-right.png'); ?>" />
    </div>
    <div class="front-voice-line">
      <?php foreach($voice_list as $index => $voice): ?>
      <?php if($index <= 2): ?>
      <?php 
        $top_display = get_post_meta($voice->ID, 'top_display', true);
        if($top_display[0]):
      ?>
      <div class="front-voice-item">
        <p class="front-voice-user-no">User Voice : <?php echo $voice->post_name; ?> / <?php echo date('Y.m.d', strtotime($voice->post_date)); ?></p>
        <div class="front-voice-info">
          <div class="front-voice-photo">
            <img src="<?php echo get_the_post_thumbnail_url($voice->ID); ?>" class="fit"/>
          </div>
          <div class="front-voice-user-info">
            <p class="front-voice-user-company"><?php echo nl2br(get_post_meta($voice->ID, 'company', true)); ?> 様</p>
            <div class="front-voice-user-position"><p class="text"><?php echo nl2br(get_post_meta($voice->ID, 'position', true)); ?></p></div>
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
      </div>
      <?php endif; ?>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
  
  <div class="front-product">
    <p class="front-product-title">ご提案可能な商材</p>
    <p class="front-product-desc">自社工場で生産しているナショナルブランド製品は<br/>1,300種以上。豊富な処方からご提案します。</p>
    <div class="front-product-list">
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-5.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-5.png'); ?>" />
        </div>
        <div class="front-product-name"><p>ヘアケア</p></div>
      </div>
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-2.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-2.png'); ?>" />
        </div>
        <div class="front-product-name"><p>スタイリング料</p></div>
      </div>
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-works-product-ikumouzai.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-works-product-ikumouzai.png'); ?>" />
        </div>
        <div class="front-product-name"><p>育毛剤</p></div>
      </div>
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-7.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-7.png'); ?>" />
        </div>
        <div class="front-product-name"><p>ヘアカラー</p></div>
      </div>
    </div>
    <p class="main-button"><a class="full-link" href="<?php echo get_site_url(); ?>/aboutus/#product">MORE</a></p>
  </div>
  
  <div class="front-factory">
    <p class="main-title-en">FACTORY</p>
    <p class="main-title-jp">高品質な製品を実現する<br class="sp-only">草津工場</p>
    <p class="main-desc">いくつもの検査項目と照らし合わせた原料・製品検査。<br/>製品そのものや、製品に使用する原材料を<br class="sp-only" />ロット毎に保管することで可能となるトレーサビリティ。<br/>当社工場の柔軟かつ迅速な対応力は、<br class="sp-only" />徹底した品質管理によって支えられています。</p>
    <p class="front-factory-photo">
      <img class="front-factory-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-factory-photo-img.jpg'); ?>" />
      <img class="front-factory-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-factory-photo-img.jpg'); ?>" />
    </p>
    <p class="main-button front-factory-button"><a class="full-link" href="<?php echo get_site_url(); ?>/aboutus/#factory">草津工場を見学する</a></p>
  </div>
    
  <div class="front-flow">
    <p class="main-title-en">FLOW</p>
    <p class="main-title-jp">ワンストップの開発フロー<br/>（ODM/OEMの流れ）</p>
    <p class="main-desc">経験豊富なプロがお客様のご要望に沿ったスケジューリングをします。</p>
    <div class="front-flow-content">
      <div class="front-flow-column left">
        <div class="front-flow-item">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">01</p>
          </div>
          <p class="front-flow-text">初回お打ち合わせ</p>
        </div>
        <div class="front-flow-item">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">02</p>
          </div>
          <p class="front-flow-text">処方検討</p>
        </div>
        <div class="front-flow-item">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">03</p>
          </div>
          <p class="front-flow-text">資材検討</p>
        </div>
        <div class="front-flow-item last-pc">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">04</p>
          </div>
          <p class="front-flow-text">容器テスト</p>
        </div>
      </div>
      <div class="front-flow-column">
        <div class="front-flow-item step5">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">05</p>
          </div>
          <p class="front-flow-text">各種試験を行いながら、商標の確認等の各種申請</p>
        </div>
        <div class="front-flow-item">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">06</p>
          </div>
          <p class="front-flow-text">処方・容器決定/最終見積もり</p>
        </div>
        <div class="front-flow-item">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">07</p>
          </div>
          <p class="front-flow-text">発注・納品（資材納期により変動あり）</p>
        </div>
        <div class="front-flow-item last-pc last-sp">
          <div class="front-flow-step">
            <p class="front-flow-point">STEP</p>
            <p class="front-flow-number">08</p>
          </div>
          <p class="front-flow-text point">納品後も充実したアフターフォロー</p>
        </div>
      </div>
    </div>
    <div class="main-button-area">
      <p class="main-button front-flow-more-button"><a class="full-link" href="<?php echo get_site_url(); ?>/flow/">MORE</a></p>
      <p class="main-button front-flow-button"><a class="full-link" href="<?php echo get_site_url(); ?>/features/#afterflow">アフターフォローについて</a></p>
    </div>
  </div>
    
  <div class="front-column">
    <p class="main-title-en front-column-en">COLUMN</p>
    <p class="main-title-jp">お役立ちコラム</p>
    <?php get_template_part( 'template-parts/column_table' ); ?>
    <p class="main-button front-column-btn"><a class="full-link" href="<?php echo get_site_url(); ?>/column/">MORE</a></p>
  </div>
  
  <div class="front-leave">
    <p class="main-title-en">LEAVE IT TO US</p>
    <p class="main-title-jp">私たちがカスタマーサクセスを<br class="sp-only" />実現します</p>
      <p class="front-leave-photo pc-only">
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-1.jpg'); ?>" />
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-3.jpg'); ?>" />
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-5.jpg'); ?>" />
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-7.jpg'); ?>" />
      </p>
      <p class="front-leave-photo sp-only">
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-1.jpg'); ?>" />
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-3.jpg'); ?>" />
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-5.jpg'); ?>" />
        <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-7.jpg'); ?>" />
      </p>
    <p class="main-button"><a class="full-link" href="<?php echo get_site_url(); ?>/aboutus/#leave_it_to_us">MORE</a></p>
  </div>