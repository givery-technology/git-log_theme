<?PHP
  // アイキャッチ画像
  add_theme_support( 'post-thumbnails' );

  /* rssにサムネイルを追加 */
  function rss_post_thumbnail($content) {
  global $post;
  if(has_post_thumbnail($post->ID)) {
  $content = '<p>' . get_the_post_thumbnail($post->ID) .
  '</p>' . get_the_content();
  }
  return $content;
  }
  add_filter('the_excerpt_rss', 'rss_post_thumbnail');
  add_filter('the_content_feed', 'rss_post_thumbnail');

  /**
   * ユーザープロフィールの項目のカスタマイズ
   */
  function my_user_meta($x)
  {
  	//項目の追加
  	$x['twitter'] = 'twitter';
  	$x['facebook'] = 'facebook';
    $x['position'] = '役職';

  	return $x;
  }
  add_filter('user_contactmethods', 'my_user_meta', 10, 1);
