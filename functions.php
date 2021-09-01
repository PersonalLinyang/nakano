<?php

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
			'has_archive' => true,
			'menu_position' => 25, 
			'supports' => [
				'title',
				'editor',
				'custom-fields',
			]
		)
	);
}
add_action('init', 'create_news_type');

/*
 * 「お客様の声」カスタム投稿タイプ追加
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
			'supports' => [
				'title',
				'editor',
				'custom-fields',
			]
		)
	);
}
add_action('init', 'create_voice_type');

/*
 * 管理画面にサムネイルの設定を入れる
 */
add_theme_support( 'post-thumbnails' ); 

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