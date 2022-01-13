<?php
/*
 * ヘッダ部分
 */
get_template_part( 'template-parts/define_tdk' );
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-8401562-1', 'auto');
    ga('send', 'pageview');

  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php //if(is_front_page()): ?>
  <!-- <title><?php //echo PAGE_TDK['front-page']['title']; ?></title>
  <meta name="description" content="<?php //echo PAGE_TDK['front-page']['desc']; ?>" /> -->
  <?php //else: ?>
  <!-- <title>中野製薬のODM/OEM</title> -->
  <?php //endif; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
  <meta name="format-detection" content="telephone=no">

  <!-- vendor -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
    integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
    crossorigin="anonymous" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700&family=Noto+Serif+JP:wght@100;200;300;400;500;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;500;700&display=swap" rel="stylesheet">
	
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700&display=swap" rel="stylesheet"> 	

  <!-- 制作中キャッシュ残らないようにjsで読み込み -->
  <script>
    var ts = (new Date()).getTime();
    document.write('<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?ver='+ts+'">');
 </script>

  <?php wp_head(); ?>
  <meta name="keywords" content="中野製薬のODM/OEM" />
</head>

<body>
<header class="header">
  <?php get_template_part( 'template-parts/header' ); ?>
</header>
<main class="main">
