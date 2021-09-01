<?php

$args = array(
	'posts_per_page'=> 3,
	'post_type' => 'news',
	'orderby' => 'date',
	'order' => 'DESC'
);
$news_list = get_posts( $args );

get_header();
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
      <p class="front-button front-mainvisual-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">初めてオリジナル商品をお考えの企業様</a></p>
      <div class="front-news-area">
        <div class="front-news-title">NEWS</div>
        <div class="front-news-content">
          <?php foreach($news_list as $news): ?>
          <div class="front-news-item">
            <div class="front-news-info">
              <p class="front-news-date"><?php echo date('Y.m.d', strtotime($news->post_date)); ?></p>
              <p class="front-news-news">NEWS</p>
            </div>
            <div class="front-news-topic"><a href="<?php echo get_site_url(); ?>/news/<?php echo $news->ID; ?>"><?php echo $news->post_title; ?></a></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  
  <div class="front-features">
    <p class="front-title-en">FEATURES</p>
    <p class="front-title-jp">ナカノ式<span class="en">ODM</span><span class="en light">/</span><span class="en">OEM</span>の強み</p>
    <p class="front-desc">弊社では、長年に渡り法人向けに<br class="sp-only" />商品を開発してきた提案力や<br class="sp-only" />技術力を活かし、<br/>ODM/OEMの事業に<br class="sp-only" />積極的に進出しております。</p>
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
          <p class="front-features-text">環境に配慮した活動と<br/>厳しい管理基準に基づく<br/>高品質な製品づくり</p>
        </div>
      </div>
      <div class="front-features-line">
        <div class="front-features-item">
          <p class="front-features-point">POINT</p>
          <p class="front-features-number">03</p>
          <p class="front-features-text">実績とノウハウをもとに<br/>先進技術を活かした製品開発</p>
        </div>
        <div class="front-features-item">
          <p class="front-features-point">POINT</p>
          <p class="front-features-number">04</p>
          <p class="front-features-text">海外ODM/OEMサポート</p>
        </div>
      </div>
    </div>
    <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">MORE</a></p>
  </div>
  
  <div class="front-about">
    <p class="front-title-en dark">ABOUT US</p>
    <p class="front-title-jp">中野製薬の<span class="en">ODM</span><span class="en light">/</span><span class="en">OEM</span>について</p>
    <p class="front-desc">当社は1959年に京都で<br class="sp-only" />シャンプー・リンスの製造販売から始まった会社です。<br/>創業当初より60年間培ってきた、<br class="sp-only" />ノウハウと技術、品質へのこだわりを強みとして、<br class="sp-only" />お客様のニーズに応えます。</p>
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
    <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">MORE</a></p>
  </div>
  
  <div class="front-cases">
    <p class="front-title-en">CASES/<br class="sp-only" />WORKS</p>
    <p class="front-title-jp">実例と実績</p>
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
                <p class="front-cases-product-info-content">21億円規模</p>
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
                <p class="front-cases-product-info-content">791億円規模</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">流通先／</p>
                <p class="front-cases-product-info-content">業務用製品</p>
              </div>
            </div>
          </div>
        </div>
        <div class="front-cases-item right">
          <p class="front-cases-title-jp">スタイリング</p>
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
                <p class="front-cases-product-info-content">482億円規模</p>
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
                <p class="front-cases-product-title-number">約<span class="number">3,500,000</span>本</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">年商／</p>
                <p class="front-cases-product-info-content">68億円規模</p>
              </div>
              <div class="front-cases-product-info">
                <p class="front-cases-product-info-title">流通先／</p>
                <p class="front-cases-product-info-content">ドラッグストア<br/>バラエティなど</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">MORE</a></p>
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
      <div class="front-voice-item">
        <p class="front-voice-user-no">User Voice : 01 / 2021.00.00</p>
        <div class="front-voice-info">
          <div class="front-voice-photo">
            <img class="front-voice-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-voice-photo-img.jpg'); ?>" />
            <img class="front-voice-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-voice-photo-img.jpg'); ?>" />
          </div>
          <div class="front-voice-user-info">
            <p class="front-voice-user-company">エイベックス・<br/>エンタテインメント株式会社 様</p>
            <div class="front-voice-user-position"><p class="text">ビジネスアライアンス本部<br/>ライフスタイル事業部ヘルス＆<br/>ビューティーユニット</p></div>
            <p class="front-voice-user-name">谷口 亮太さま</p>
          </div>
        </div>
        <div class="front-voice-title">
          <p class="front-voice-title-quote left">“</p>
          <p class="front-voice-title-text">私たちのこだわりに【知識と技術】で応え続けてくれた結果、初開発のヘアオイルが発売1年で大ヒット商品に！</p>
          <p class="front-voice-title-quote right">”</p>
        </div>
        <div class="front-voice-content">
          <p class="front-voice-content-text">想像を超えた大ヒット！成功の要因は2つ</p>
          <p class="front-voice-content-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">READ</a></p>
        </div>
      </div>
      <div class="front-voice-item">
        <p class="front-voice-user-no">User Voice : 01 / 2021.00.00</p>
        <div class="front-voice-info">
          <div class="front-voice-photo">
            <img class="front-voice-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-voice-photo-img.jpg'); ?>" />
            <img class="front-voice-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-voice-photo-img.jpg'); ?>" />
          </div>
          <div class="front-voice-user-info">
            <p class="front-voice-user-company">エイベックス・<br/>エンタテインメント株式会社 様</p>
            <div class="front-voice-user-position"><p class="text">商品開発部 部長</p></div>
            <p class="front-voice-user-name">谷口 亮太さま</p>
          </div>
        </div>
        <div class="front-voice-title">
          <p class="front-voice-title-quote left">“</p>
          <p class="front-voice-title-text">テスト</p>
          <p class="front-voice-title-quote right">”</p>
        </div>
        <div class="front-voice-content">
          <p class="front-voice-content-text">3つのスタイリング剤をリニューアルおよび商品開発</p>
          <p class="front-voice-content-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">READ</a></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="front-product">
    <p class="front-product-title">ご提案可能な商材</p>
    <p class="front-product-desc">自社工場での製品は1,300種以上<br class="sp-only" />と処方の数は豊富です。</p>
    <div class="front-product-list">
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-1.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-1.png'); ?>" />
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
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-3.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-3.png'); ?>" />
        </div>
        <div class="front-product-name"><p>育毛剤</p></div>
      </div>
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-4.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-4.png'); ?>" />
        </div>
        <div class="front-product-name"><p>パーマ</p></div>
      </div>
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-5.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-5.png'); ?>" />
        </div>
        <div class="front-product-name"><p>スキンケア</p></div>
      </div>
      <div class="front-product-item">
        <div class="front-product-photo">
          <img class="front-product-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-product-photo-img-6.png'); ?>" />
          <img class="front-product-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-product-photo-img-6.png'); ?>" />
        </div>
        <div class="front-product-name"><p>ヘアカラー</p></div>
      </div>
    </div>
    <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">MORE</a></p>
  </div>
  
  <div class="front-factory">
    <p class="front-title-en">FACTORY</p>
    <p class="front-title-jp">製品開発の要、草津工場</p>
    <p class="front-desc">どの製品をいつオーダー頂いても<br class="sp-only" />要望に応えられることが、<br class="sp-only" />お客様に安心して製品を<br class="sp-only" />お使いいただくことに繋がるものと考え、<br/>日々生産を行っています。</p>
    <p class="front-factory-photo">
      <img class="front-factory-photo-img pc-only" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-factory-photo-img.jpg'); ?>" />
      <img class="front-factory-photo-img sp-only" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-factory-photo-img.jpg'); ?>" />
    </p>
    <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">工場を見学する</a></p>
  </div>
    
  <div class="front-flow">
    <p class="front-title-en">FLOW</p>
    <p class="front-title-jp">スピーディーに対応する<br class="sp-only" />製造フロー<br/>（ODM/OEMの流れ）</p>
    <p class="front-desc">経験豊富なプロがお客様の<br class="sp-only" />ご要望に沿ったスケジューリングします。</p>
    <div class="front-flow-content">
      <div class="front-flow-column left">
        <div class="front-flow-item">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">01</p>
          <p class="front-flow-text">初回お打ち合わせ</p>
        </div>
        <div class="front-flow-item">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">02</p>
          <p class="front-flow-text">処方検討</p>
        </div>
        <div class="front-flow-item">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">03</p>
          <p class="front-flow-text">容器検討</p>
        </div>
        <div class="front-flow-item last-pc">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">04</p>
          <p class="front-flow-text">試作・容器テスト</p>
        </div>
      </div>
      <div class="front-flow-column">
        <div class="front-flow-item step5">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">05</p>
          <p class="front-flow-text">処方・容器決定 / 最終見積もり</p>
        </div>
        <div class="front-flow-item">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">06</p>
          <p class="front-flow-text">各種試験を行いながら、<br/>商標の確認等各種申請を行う</p>
        </div>
        <div class="front-flow-item">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">07</p>
          <p class="front-flow-text">納期二カ月前までに発注いただき納品。<br/>（資材納期により変動あり）</p>
        </div>
        <div class="front-flow-item last-pc last-sp">
          <p class="front-flow-point">STEP</p>
          <p class="front-flow-number">08</p>
          <p class="front-flow-text point">納品後も充実したアフターフォロー</p>
        </div>
      </div>
    </div>
    <div class="front-flow-button-area">
      <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">MORE</a></p>
      <p class="front-button front-flow-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">アフターフォローについて</a></p>
    </div>
  </div>
    
  <div class="front-column">
    <p class="front-title-en front-column-en">COLUMN</p>
    <p class="front-title-jp">お役立ちコラム</p>
    <div class="front-column-main">
      <div class="front-column-line">
        <div class="front-column-item">
          <div class="front-column-top">
            <p class="front-column-mark">NEW</p>
            <p class="front-column-no">Column : 05 / 2021.00.00</p>
          </div>
          <p class="front-column-title">近年の開発ニーズや傾向からODM・OEMメーカー選びのポイントまで解説</p>
          <div class="front-column-info">
            <div class="front-column-thumb">
            </div>
            <div class="front-column-content">
              <p class="front-column-text">ヘアスタイリング剤のODM・OEMメーカーを選ぶ際に必ず確認したいポイントは2つ。</p>
              <p class="front-column-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">READ</a></p>
            </div>
          </div>
          <p class="front-column-tag">OEM/ODM,  OEM/ODMメーカー</p>
        </div>
        <div class="front-column-item">
          <div class="front-column-top">
            <p class="front-column-mark">NEW</p>
            <p class="front-column-no">Column : 05 / 2021.00.00</p>
          </div>
          <p class="front-column-title">近年の開発ニーズや傾向からODM・OEMメーカー選びのポイントまで解説</p>
          <div class="front-column-info">
            <div class="front-column-thumb">
            </div>
            <div class="front-column-content">
              <p class="front-column-text">ヘアスタイリング剤のODM・OEMメーカーを選ぶ際に必ず確認したいポイントは2つ。</p>
              <p class="front-column-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">READ</a></p>
            </div>
          </div>
          <p class="front-column-tag">OEM/ODM,  OEM/ODMメーカー</p>
        </div>
      </div>
      <div class="front-column-line">
        <div class="front-column-item">
          <div class="front-column-top">
            <p class="front-column-mark">NEW</p>
            <p class="front-column-no">Column : 05 / 2021.00.00</p>
          </div>
          <p class="front-column-title">近年の開発ニーズや傾向からODM・OEMメーカー選びのポイントまで解説</p>
          <div class="front-column-info">
            <div class="front-column-thumb">
            </div>
            <div class="front-column-content">
              <p class="front-column-text">ヘアスタイリング剤のODM・OEMメーカーを選ぶ際に必ず確認したいポイントは2つ。</p>
              <p class="front-column-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">READ</a></p>
            </div>
          </div>
          <p class="front-column-tag">OEM/ODM,  OEM/ODMメーカー</p>
        </div>
        <div class="front-column-item">
          <div class="front-column-top">
            <p class="front-column-mark">NEW</p>
            <p class="front-column-no">Column : 05 / 2021.00.00</p>
          </div>
          <p class="front-column-title">近年の開発ニーズや傾向からODM・OEMメーカー選びのポイントまで解説</p>
          <div class="front-column-info">
            <div class="front-column-thumb">
            </div>
            <div class="front-column-content">
              <p class="front-column-text">ヘアスタイリング剤のODM・OEMメーカーを選ぶ際に必ず確認したいポイントは2つ。</p>
              <p class="front-column-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">READ</a></p>
            </div>
          </div>
          <p class="front-column-tag">OEM/ODM,  OEM/ODMメーカー</p>
        </div>
      </div>
    </div>
    <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">MORE</a></p>
  </div>
  
  <div class="front-leave">
    <p class="front-title-en">LEAVE IT <br class="sp-only" />TO US</p>
    <p class="front-title-jp">私たちがカスタマーサクセスを<br class="sp-only" />実現します</p>
    <p class="front-leave-photo pc-only">
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-1.jpg'); ?>" />
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-2.jpg'); ?>" />
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-3.jpg'); ?>" />
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/pc/front/front-leave-img-4.jpg'); ?>" />
    </p>
    <p class="front-leave-photo sp-only">
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-1.jpg'); ?>" />
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-2.jpg'); ?>" />
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-3.jpg'); ?>" />
      <img class="front-leave-photo-img" src="<?php echo get_theme_file_uri('/assets/img/sp/front/front-leave-img-4.jpg'); ?>" />
    </p>
    <p class="front-button"><a class="full-link" href="<?php echo get_site_url(); ?>/">MORE</a></p>
  </div>

<?php
get_footer();
