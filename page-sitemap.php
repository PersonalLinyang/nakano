<?php /*Template Name:サイトマップ*/ ?>

<?php

get_header();
?>

<div class="main-header sitemap-header">
  <div class="main-header-inner">
    <h1>
      <p class="main-header-en">Sitemap</ｐ>
      <p class="main-header-jp">サイトマップ</p>
    </h1>
  </div>
</div>

<div class="main-map pc-only">
  <p class="main-map-item"><a href="<?php echo get_site_url(); ?>/">TOP</a></p>
  <p class="main-map-item">サイトマップ</p>
</div>

<!-- tag -->
<div class="sitemap">
  <div class="inner">
    <ul class="sitemap__items">
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/">TOP</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item border-bottom">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/beginners/">TOP（初めてオリジナル商品の開発をお考えの企業様向け）</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/aboutus/">中野製薬のODM/OEMについて</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
        <dl>
          <dt>— コンテンツの内容</dt>
          <dd>ODM/OEMの実例と実績 / ご提案可能な商材 / 高品質な製品を実現する草津工場<br>
            私たちがカスタマーサクセスを実現します（担当スタッフの紹介） / ODM/OEM関連事業所</dd>
        </dl>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/features/">ナカノ式ODM/OEMの強み</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/voice/">お客様の声</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/flow/">ODM/OEMの流れ（開発フロー）</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/column/">お役立ちコラム</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="<?php echo get_site_url(); ?>/faq/">よくある質問</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="https://www.nakano-seiyaku.co.jp/company/odmform/" target="_blank">お問い合わせ</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
      <li class="sitemap__item">
        <div class="sitemap__item__desc">
          <a href="https://www.nakano-seiyaku.co.jp/sitepolicy/" target="_blank">サイトポリシー</a><img src="<?php echo get_theme_file_uri('/assets/img/pc/common/black-arrow.svg'); ?>">
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- /お客様の声 -->
<?php get_footer(); ?>