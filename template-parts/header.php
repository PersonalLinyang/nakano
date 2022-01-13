  <div class="header-left">
    <div class="header-logo-area">
      <a href="<?php echo get_site_url(); ?>/">
        <img class="header-logo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/common/header-logo.png'); ?>" />
        <img class="header-logo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/common/header-logo.png'); ?>" />
      </a>
    </div>
  </div>
  <div class="header-right">
    <div class="header-controller-area sp-only"></div>
    <div class="header-contact-area">
      <a class="full-link" href="https://www.nakano-seiyaku.co.jp/company/odmform/" target="_blank">
        <div class="header-contact-content">
          <p class="header-contact-icon">
            <img class="header-contact-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/common/header-mail.png'); ?>" />
            <img class="header-contact-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/common/header-mail.png'); ?>" />
          </p>
          <p class="header-contact-text-sp sp-only">お問い合わせ</p>
          <p class="header-contact-text pc-only">ナカノ式ODM/OEMに<br/>ついてのお問い合わせ</p>
        </div>
      </a>
    </div>
  </div>
  <div class="header-menu-shadow"></div>
  <div class="header-menu-area">
    <ul class="header-menu-list">
      <li class="header-menu-item"><a class="full-link <?php if( is_page('aboutus') ) echo 'current'; ?>" href="<?php echo get_site_url(); ?>/aboutus/">中野製薬のODM/OEMについて</a></li>
      <li class="header-menu-item"><a class="full-link <?php if( is_page('features') ) echo 'current'; ?>" href="<?php echo get_site_url(); ?>/features/">ナカノ式ODM/OEMの強み</a></li>
      <li class="header-menu-item"><a class="full-link <?php if( !is_front_page() && get_post_type() === 'voice' ) echo 'current'; ?>" href="<?php echo get_site_url(); ?>/voice/">お客様の声</a></li>
      <li class="header-menu-item"><a class="full-link <?php if( is_page('flow') ) echo 'current'; ?>" href="<?php echo get_site_url(); ?>/flow/">ODM/OEMの流れ</a></li>
      <li class="header-menu-item"><a class="full-link <?php if( !is_front_page() && get_post_type() === 'post' ) echo 'current'; ?>" href="<?php echo get_site_url(); ?>/column/">お役立ちコラム</a></li>
      <li class="header-menu-item"><a class="full-link <?php if( is_page('faq') ) echo 'current'; ?>" href="<?php echo get_site_url(); ?>/faq/">よくある質問</a></li>
    </ul>
  </div>
  <p class="btn-page-top">PAGE TOP</p>