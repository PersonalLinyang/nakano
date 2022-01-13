<?php

get_header();
?>

  <?php get_template_part( 'template-parts/top_mainvisual' ); ?>
  
  <div class="front-guide">
    <p class="front-guide-item scroll-link" data-target="front-cost">費用について</p>
    <p class="front-guide-item scroll-link" data-target="front-order">最小ロット数</p>
    <p class="front-guide-item scroll-link" data-target="front-development-flow">納期について</p>
  </div>
  
  <div class="front-what">
    <p class="main-title-en">WHAT IS</p>
    <p class="main-title-jp">ODM/OEMってなに？</p>
    <div class="front-what-content">
      <p class="front-what-text">ODM/OEMとは、メーカーが自社ではないブランドの製品を受注製造することを指し、自動車や電化製品、化粧品、食品などさまざまな分野で取り入れられている生産形態です。<br/><br/>「ODM」とは、「Original Design Manufacturer」の略語で、メーカー側が企画開発から設計、製造まで一貫して担当する生産形態です。場合によってはマーケティングまで担当することもあります。製造者には委託者と同レベル以上の高い技術力が求められます。<br/><br/>一方、「OEM」とは「Original Equipment Manufacturer」の頭文字をとったもので、企画、設計は行わず、製造のみを請け負います。<br/><br/>弊社は特に「ODM」に強く、企画開発から携わりこれまで多数の製品開発を行ってきました。</p>
      <p class="front-what-link"><a href="<?php echo get_site_url(); ?>/column/column02/">ODM/OEMの違いについては、こちらでもご確認いだただけます。<br/>お役立ちコラム「開発・生産委託はODM・OEM？プロが教えるそれぞれのメリット・デメリットとは」</a></p>
    </div>
  </div>
  
  <div class="front-beginner">
    <div class="front-cost" id="front-cost">
      <p class="main-title-en">COST</p>
      <p class="main-title-jp">費用はどのくらいかかる？</p>
      <div class="front-beginner-content">
        <p class="front-beginner-photo">
          <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-cost-photo-img.jpg'); ?>" />
          <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-cost-photo-img.jpg'); ?>" />
        </p>
        <p class="main-desc">容量や処方の難度、<br class="sp-only" />容器などにより異なります。<br/>弊社営業担当までお問合せください。</p>
      </div>
      <p class="main-button"><a class="full-link" href="https://www.nakano-seiyaku.co.jp/company/odmform/">お問い合わせ</a></p>
    </div>
    
    <div class="front-order" id="front-order">
      <p class="main-title-en">ORDER</p>
      <p class="main-title-jp">最小ロット数は？</p>
      <div class="front-beginner-content">
        <p class="front-beginner-photo">
          <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-order-photo-img.jpg'); ?>" />
          <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-order-photo-img.jpg'); ?>" />
        </p>
        <p class="main-desc">弊社設備で製造する場合、<br class="sp-only" />容量によりロット数は異なります。<br/>ぜひ一度お問合せください。</p>
      </div>
      <p class="main-button"><a class="full-link" href="https://www.nakano-seiyaku.co.jp/company/odmform/">お問い合わせ</a></p>
    </div>
    
    <div class="front-development-flow" id="front-development-flow">
      <p class="main-title-en front-development-flow-en">DEVELOPMENT FLOW</p>
      <p class="main-title-jp">商品ができるまでの期間は？</p>
      <div class="front-beginner-content front-development-flow-content">
        <p class="front-development-flow-photo">
          <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-development-flow-photo-img.png'); ?>" />
          <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-development-flow-photo-img.png'); ?>" />
        </p>
        <p class="main-desc">オーダーメイドとなるため、<br class="sp-only" />開発～商品化それぞれにかかる期間は、<br/>商品によって異なります。<br class="sp-only" />弊社営業担当までお問合せください。</p>
      </div>
      <div class="main-button-area">
        <p class="main-button"><a class="full-link" href="https://www.nakano-seiyaku.co.jp/company/odmform/">お問い合わせ</a></p>
        <p class="main-button front-flow-manufacturing-button"><a class="full-link" href="<?php echo get_site_url(); ?>/flow/">開発フロー</a></p>
      </div>
    </div>
    
    <p class="front-beginner-link"><a href="<?php echo get_site_url(); ?>/column/column05/"><span class="link-under">ヘアスタイリング剤の開発・製造の流れはこちらでもご確認いだただけます。<br/>お役立ちコラム「近年の開発ニーズや傾向からODM・OEMメーカー選びのポイントまで解説</span>　<span class="arrow"></span></a></p>
  </div>

  <?php get_template_part( 'template-parts/top_main' ); ?>

<?php
get_footer();
