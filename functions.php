<?php

/*
 * 「投稿」を「お役立ちコラム」に変更
 */

/*
 * 「お役立ちコラム」のアーカイブページを有効化して、パーマリンクを設定
 */
add_filter('register_post_type_args', function($args, $post_type) {
    if ('post' == $post_type) {
        global $wp_rewrite;
        $archive_slug = 'column';
        $args['label'] = 'お役立ちコラム';
        $args['has_archive'] = $archive_slug;
        $archive_slug = $wp_rewrite->root.$archive_slug;
        $feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
        add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
        add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
    }
    return $args;
}, 10, 2);

/*
 * 「NEWS」カスタム投稿タイプ追加
 */
function create_news_type() {
	// 記事タイプ「NEWS」追加
	register_post_type('news',
		array(
			'labels' => array(
				'name' => 'NEWS',
				'add_new_item' => '新規NEWSを追加',
				'edit_item' => 'NEWSを編集',
				'new_item' => '新規NEWS',
				'view_item' => 'NEWSを表示',
				'search_items' => 'NEWSを検索'
			),
			'public' => true,
			'has_archive' => false,
			'menu_position' => 25, 
			'supports' => [
				'title',
				'editor',
				'custom-fields',
			],
			'rewrite' => array('slug' => 'news', 'with_front' => false)
		)
	);
}
add_action('init', 'create_news_type');

/*
 * 「お客様の声」カスタム投稿タイプとタグ追加
 */
function create_voice_type() {
	// 記事タイプ「お客様の声」追加
	register_post_type('voice',
		array(
			'labels' => array(
				'name' => 'お客様の声',
				'add_new_item' => '新規お客様の声を追加',
				'edit_item' => 'お客様の声を編集',
				'new_item' => '新規お客様の声',
				'view_item' => 'お客様の声を表示',
				'search_items' => 'お客様の声を検索'
			),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 25,
			'show_in_rest' => true,
			'supports' => [
				'title',
				'editor',
				'custom-fields',
				'thumbnail',
			],
			'rewrite' => array('slug' => 'voice', 'with_front' => false)
		)
	);

	// タクソノミー「タグ」追加
	register_taxonomy( 
		'voice_tag',
		array('voice'),
		array(
			'meta_box_cb' => 'post_categories_meta_box',
			'labels' => array(
				'name' => 'タグ',
				'edit_item' => '編集',
				'update_item' => '更新',
				'add_new_item' => '新規タグを追加'
			),
			'show_in_rest' => true,
		) 
	);
}
add_action('init', 'create_voice_type');

/*
 * 管理画面にサムネイルの設定を入れる
 */
add_theme_support( 'post-thumbnails' ); 

/**
 * 投稿画面にタグ一覧を表示しチェックボックス選択式にする
 */
function re_register_post_tag_taxonomy() {
  $tag_slug_args = get_taxonomy('post_tag');
  $tag_slug_args->hierarchical = true;
  $tag_slug_args->meta_box_cb = 'post_categories_meta_box';
  register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
}
add_action( 'init', 're_register_post_tag_taxonomy', 1 );

/*
 * Ajax送信先URL設定
 */
function add_my_ajaxurl() {
?>
	<script>
		var ajaxurl = '<?php echo admin_url( 'admin-ajax.php'); ?>';
	</script>
<?php
}
add_action( 'wp_head', 'add_my_ajaxurl', 1 );

/*
 * リライトルール設定
 */
function custom_rewrite_basic(){
	// コラム一覧ページ
	add_rewrite_rule('column/page/(\d+)/?$', 'index.php?post_type=post&paged=$matches[2]', 'top');
	// お客様の声一覧ページ
	add_rewrite_rule('voice/?$', 'index.php?post_type=voice&paged=1', 'top');
	add_rewrite_rule('voice/page/(\d+)/?$', 'index.php?post_type=voice&paged=$matches[2]', 'top');
}
add_action('init', 'custom_rewrite_basic');

/*
 * 自動補完リダイレクトを禁止
 */
function disable_redirect_canonical( $redirect_url ) {
  if( is_404() ) {
    return false;
  }
  return $redirect_url;
}
add_filter( 'redirect_canonical', 'disable_redirect_canonical' );

//「プレビュー」ボタンを非表示
function admin_preview_css_custom() {
    $current_screen = get_current_screen();
    if(isset($current_screen) && (
    $current_screen->post_type === 'news'
    ) ) {
        $style = '<style>#preview-action {display: none;}</style>';
        echo $style;
    }
}
add_action('admin_print_styles', 'admin_preview_css_custom');

/*
 * スラッグの自動小文字化を無効にして、大文字を保存できるようにする
 */
function use_capital_letter_in_slug($title) {
	$title = strip_tags($title);
	$title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
	$title = str_replace('%', '', $title);
	$title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);
	$title = remove_accents($title);
	if (seems_utf8($title)) {
		$title = utf8_uri_encode($title, 200);
	}
	$title = preg_replace('/&.+?;/', '', $title);
	$title = str_replace('.', '-', $title);
	$title = preg_replace('/[^%a-zA-Z0-9 _-]/', '', $title);
	$title = preg_replace('/\s+/', '-', $title);
	$title = preg_replace('|-+|', '-', $title);
	$title = trim($title, '-');
	return $title;
}
remove_filter( 'sanitize_title', 'sanitize_title_with_dashes' );
add_filter( 'sanitize_title', 'use_capital_letter_in_slug' );

/*
 * コラム詳細のCSSを投稿画面に反映
 */
function custom_editor_settings(){
	add_theme_support('editor-styles');
	add_editor_style('assets/css/single.css');
}
add_action('after_setup_theme', 'custom_editor_settings');

/*
 * wp_headに追加
 */
function adds_head() {
	if( !is_front_page() && get_post_type() === 'voice' && !is_single()) {
		echo '<meta name="description" content="中野製薬にODM/OEMをご依頼されたお客様の声をご紹介。" />'."\n";
		echo '<meta property="og:locale" content="ja_JP" />'."\n";
		echo '<meta property="og:site_name" content="中野製薬のODM/OEM" />'."\n";
		echo '<meta property="og:type" content="article" />'."\n";
		echo '<meta property="og:title" content="お客様の声 | 中野製薬のODM/OEM" />'."\n";
		echo '<meta property="og:description" content="中野製薬にODM/OEMをご依頼されたお客様の声をご紹介。" />'."\n";
		echo '<meta property="og:url" content="http://prev.nakano-seiyaku.co.jp/odm/voice/" />'."\n";
		echo '<meta property="og:image" content="http://prev.nakano-seiyaku.co.jp/odm/wp-content/uploads/2021/10/nakano_ogp.jpg" />'."\n";
		echo '<meta property="og:image:width" content="1200" />'."\n";
		echo '<meta property="og:image:height" content="630" />'."\n";
	}

	if( !is_front_page() && get_post_type() === 'post' && !is_single()) {
		echo '<meta name="description" content="ODM/OEMに関する基本情報をコラム形式でご紹介。" />'."\n";
		echo '<meta property="og:locale" content="ja_JP" />'."\n";
		echo '<meta property="og:site_name" content="中野製薬のODM/OEM" />'."\n";
		echo '<meta property="og:type" content="article" />'."\n";
		echo '<meta property="og:title" content="お役立ちコラム | 中野製薬のODM/OEM" />'."\n";
		echo '<meta property="og:description" content="ODM/OEMに関する基本情報をコラム形式でご紹介。" />'."\n";
		echo '<meta property="og:url" content="http://prev.nakano-seiyaku.co.jp/odm/column/" />'."\n";
		echo '<meta property="og:image" content="http://prev.nakano-seiyaku.co.jp/odm/wp-content/uploads/2021/10/nakano_ogp.jpg" />'."\n";
		echo '<meta property="og:image:width" content="1200" />'."\n";
		echo '<meta property="og:image:height" content="630" />'."\n";
	}
}

add_action('wp_head', 'adds_head');

function day_diff($date1, $date2) {
	$timestamp1 = strtotime($date1);
	$timestamp2 = strtotime($date2);

	$seconddiff = abs($timestamp2 - $timestamp1);

	$daydiff = $seconddiff / (60 * 60 * 24);

	return $daydiff;
}