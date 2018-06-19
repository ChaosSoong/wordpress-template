<?php
/**
 * YM functions and definitions
 *
 * @package WordPress
 * @subpackage YM
 * @since YM 1.0
 */


/*
	替换WordPress自带jq文件。
*/
// add_action( 'pre_get_posts', 'jquery_register' );
function jquery_register() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js' , false, null, false );
		wp_enqueue_script( 'jquery' );
	}
}
/**
 * 自定义样式、js加载.
 * @since YM 1.0
 */
function ymj_scripts() {
	// Add custom style script.
	//wp_register_style( '', get_template_directory_uri() . '');
	//wp_register_script( '', get_template_directory_uri() . '',false,'',false);
	//注册样式以及JS/
	//css
	wp_register_style( 'index' , get_template_directory_uri().'/css/index.css' , array() , false , 'all' );

	//JS
    wp_register_script( 'jquery-ui' , get_template_directory_uri().'/js/jquery-ui.min.js' , array() , false , false );

	//加载方法
	//wp_enqueue_style('public');
	//wp_enqueue_script('index');
	//公用css
	wp_enqueue_style('index');
	//公用js
	wp_enqueue_script('jquery-ui');
}
// add_action( 'wp_enqueue_scripts', 'ymj_scripts' );



//注册自定义文章类型
// include_once('inc/custom-post-type.php');
//自定义各类型文章模板（此处重点用于专题模板自定义）
include_once('inc/wp-custom-post-template/wp-custom-post-template.php');
/****************主题自定义设置****************************/
//修改/themes/主题中的functions.php（7-12均修改此文件）
//7、禁用 auto-embeds (oEmbed，oEmbed的功能就是只需要在日志中输入一个视频网站或者图片分享的 URL，这个 URL 里面含有的视频或者图片就自动显示出来，但是很可惜的是只支持部分英文网站，对于中文站来说这个功能是多余的。)：
    remove_filter( 'the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 );
//8、禁用XML-RPC接口（WordPress提供了XML-RPC接口使得第三方的博客写作软件(如windows live writer等)可以与之通信来发布和修改博客。）：
    add_filter('xmlrpc_enabled', '__return_false');
//9、加速优化之精简头部代码
	remove_action( 'wp_head', 'feed_links', 2 ); //移除feed
	remove_action( 'wp_head', 'feed_links_extra', 3 ); //移除feed
	remove_action( 'wp_head', 'rsd_link' ); //移除离线编辑器开放接口
	remove_action( 'wp_head', 'wlwmanifest_link' );  //移除离线编辑器开放接口
	remove_action( 'wp_head', 'wp_generator' ); //移除WordPress版本
	remove_action( 'wp_head', 'rel_canonical' ); //移除文章页面链接
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	add_action('widgets_init', 'my_remove_recent_comments_style');
	function my_remove_recent_comments_style() {   
		global $wp_widget_factory;   
		remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));   
	}
	//去掉emoji表情参数
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
//10、去掉js和CSS的版本号
//在主题的function.php中增加下面
     function sb_remove_script_version( $src ){
          $parts = explode( '?', $src );
          return $parts[0];
     }
     add_filter( 'script_loader_src', 'sb_remove_script_version', 15, 1 );
     add_filter( 'style_loader_src', 'sb_remove_script_version', 15, 1 );    
//11、全站使用相对链接 并解决sitemap与feed中调用相对链接问题
     add_action( 'template_redirect', 'rw_relative_urls' );
     function rw_relative_urls() {
          if ( is_feed() || get_query_var( 'sitemap' ) ) //判断是否为feed页面或者sitemap页面
               return;
          $filters = array(
               'post_link',
               'post_type_link',
               'page_link',
               'attachment_link',
               'get_shortlink',
               'post_type_archive_link',
               'get_pagenum_link',
               'get_comments_pagenum_link',
               'term_link',
               'search_link',
               'day_link',
               'month_link',
               'year_link',
          );
          foreach ( $filters as $filter )
          {
               add_filter( $filter, 'wp_make_link_relative' );
          }
     }
//12、去除顶部工具条
show_admin_bar(false);
add_filter('show_admin_bar', '__return_false');
//13、隐藏更新信息
add_action('admin_menu','wp_hide_nag');
function wp_hide_nag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}
add_filter('pre_site_transient_update_core',    create_function('$a', "return null;")); // 关闭核心提示
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;")); // 关闭插件提示
add_filter('pre_site_transient_update_themes',  create_function('$a', "return null;")); // 关闭主题提示
remove_action('admin_init', '_maybe_update_core');    // 禁止 WordPress 检查更新
remove_action('admin_init', '_maybe_update_plugins'); // 禁止 WordPress 更新插件
remove_action('admin_init', '_maybe_update_themes');  // 禁止 WordPress 更新主题
/**
*	主题设置
*	page_title 		(字符串) 显示在页面中的标题
*	menu_title 		(字符串) 用于显示在侧边导航栏的标题，留空则默认与page_title相同。
*	menu_slug 		(字符串) 页面别名，用于引用当前页面，默认为一个url menu_slug友好的版本。(必须值，且唯一). 页面链接：/wp-admin/admin.php?page=menu_slug
*	capability		(字符串) 用于指定当前菜单的功能，默认值为edit_posts，如果需要了解更多可以查看网址：http://codex.wordpress.org/Roles_and_Capabilities
*	position 		(数字|字符串) 用于控制当前菜单的位置。如果两个菜单的值相同的话，其中一个可能会被覆盖，导致只显示一个菜单！
*	parent_slug 	(字符串) 父级的别名，如果定义此项，这个菜单将会成为子菜单。
*	icon_url 		(字符串) 菜单图标，默认为WordPress自带样式，可在https://developer.wordpress.org/resource/dashicons中选择，值为图标后面的dashicons-xx
*	redirect 		(布尔值) 设置为true，则将父页面重定向到第一个子菜单，设置为false，则父菜单单独为一个页面。
*	post_id 		(数字|字符串) 此post_id用于保存和加载数据，可以为数字也可以为字符串，默认为options。
*	autoload 		(布尔值)  是否在WordPress启东市自动加载。默认flase。
*/
if( function_exists('acf_add_options_page') ) {
	$pai_options = array(
		'page_title' => '主题设置',
		'menu_title' => '主题设置',
		'menu_slug' => 'pai2015-options',
		'capability' => 'edit_posts',
		'position' => 999,
		'parent_slug' => '',
		'icon_url' => 'dashicons-admin-home',
		'redirect' => false,
		'post_id' => 'options',
		'autoload' => false,	
	);

	$public_part = array(
		'page_title' => '公用板块',
		'menu_title' => '',
		'menu_slug' => 'public_part',
		'capability' => 'edit_posts',
		'position' => 2,
		'parent_slug' => 'pai2015-options',
		'icon_url' => '',
		'redirect' => true,
		'post_id' => 'public',
		'autoload' => false,	
	);
	acf_add_options_page($pai_options);
	acf_add_options_sub_page($public_part);
}

/**
*站点图片裁切处理函数
*此处引用timthumb.php图片裁切文件。
*参数信息：
*$src,图片地址
*$w,裁切后图片宽度
*$h,裁切后图片高度
*$zc,是否裁切，1为裁切，0为只缩放不裁切。默认1。
*
*/
if(!function_exists('timthumb')){
	function timthumb($src,$w,$h,$zc=1){
		if($src){
			preg_match('([a-zA-z]+://[^/\s]*)',$src,$home_url);
			$src=str_replace($home_url[0],'',$src);
		}else{
			$src="/wp-content/themes/".get_stylesheet()."/images/default.jpg";
		}
		echo "/wp-content/themes/".get_stylesheet()."/timthumb.php?src=".$src."&w=".$w."&h=".$h."&zc=".$zc."&q=100";
	}
}
/*
*编辑器增强
*/
function add_editor_buttons($buttons) {
$buttons[] = 'fontselect';
$buttons[] = 'fontsizeselect';
$buttons[] = 'cleanup';
$buttons[] = 'styleselect';
$buttons[] = 'hr';
$buttons[] = 'del';
$buttons[] = 'sub';
$buttons[] = 'sup';
$buttons[] = 'anchor';
$buttons[] = 'backcolor';
$buttons[] = 'wp_page';
$buttons[] = 'charmap';
$buttons[] = 'code';
return $buttons;
}
add_filter("mce_buttons_2", "add_editor_buttons");
/*
*文章内容替换
*/
function pai_replace_text($text){
	$replace = array(
		// '原始文字' => '替换为这些'
		'/swt' => get_field('swt_link','options'),
		);
	$text = str_replace(array_keys($replace), $replace, $text);
	return $text;
}
add_filter('the_content', 'pai_replace_text');
/*
*禁用Google字体
*/
	function coolwp_remove_open_sans_from_wp_core() {
	    wp_deregister_style( 'open-sans' );
	    wp_register_style( 'open-sans', false );
	    wp_enqueue_style('open-sans','');
	}
add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );
/**
*限制搜索结果
*/
//让搜索支持自定义文章类型
function searchAll( $query ) {
  if ( $query->is_search ) { $query->set( 'post_type', array( 'post','projects','special' )); } 
  return $query;
}
add_filter( 'pre_get_posts', 'searchAll' );
/**
*禁止文章图片自动加链接
*/
function wpc_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpc_imagelink_setup', 10);

/**
*文章点击数
在文章页添加
*/
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/*
*禁用REST API、移除wp-json链接
*/
add_filter('rest_enabled', '_return_false');
add_filter('rest_jsonp_enabled', '_return_false');
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

/*
*禁用embeds
*/
function disable_embeds_init() {
global $wp;
$wp->public_query_vars = array_diff( $wp->public_query_vars, array( 'embed', ) );
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
add_filter( 'embed_oembed_discover', '__return_false' );
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' ); }
add_action( 'init', 'disable_embeds_init', 9999 );
function disable_embeds_tiny_mce_plugin( $plugins ) { return array_diff( $plugins, array( 'wpembed' ) ); }
function disable_embeds_rewrites( $rules ) { foreach ( $rules as $rule => $rewrite ) { if ( false !== strpos( $rewrite, 'embed=true' ) ) { unset( $rules[ $rule ] ); } }
return $rules; }
function disable_embeds_remove_rewrite_rules() { add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' ); flush_rewrite_rules(); }
register_activation_hook( __FILE__, 'disable_embeds_remove_rewrite_rules' );
function disable_embeds_flush_rewrite_rules() { remove_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' ); flush_rewrite_rules(); }
register_deactivation_hook( __FILE__, 'disable_embeds_flush_rewrite_rules' );

/*
 *获取父页面下的所有子页面列表
*/
function dit_get_all_children_pages(){
	if ( is_page() ){
		//当前页面的ID
		$current_obj_id = get_queried_object_id();
		
	    $args = array(
	        'post_status' => 'publish',
	        'post_type' => 'page',
	        'post_parent' => $current_obj_id,
	        'orderby' => 'menu_order',
	        'order' => 'ASC',
	        'nopaging' => true,
	    );	
	    
	    $child_pages = get_posts($args);
	    $html = "";
	    foreach ($pages as $post) {
	        setup_postdata($post);
	        $url = get_permalink($post->ID);
	        $title = $post->post_title;
	        $html .= sprintf("%s", $url, $title);
	    }

	    wp_reset_postdata();
	    if ( !empty( $html ) ){
	    	echo $html;
	    }
	}
}
function get_current_archive_link( $paged = true ) { 
        $link = false; 
 
        if ( is_front_page() ) { 
                $link = home_url( '/' ); 
        } else if ( is_home() && "page" == get_option('show_on_front') ) { 
                $link = get_permalink( get_option( 'page_for_posts' ) ); 
        } else if ( is_tax() || is_tag() || is_category() ) { 
                $term = get_queried_object(); 
                $link = get_term_link( $term, $term->taxonomy ); 
        } else if ( is_post_type_archive() ) { 
                $link = get_post_type_archive_link( get_post_type() ); 
        } else if ( is_author() ) { 
                $link = get_author_posts_url( get_query_var('author'), get_query_var('author_name') ); 
        } else if ( is_archive() ) { 
                if ( is_date() ) { 
                        if ( is_day() ) { 
                                $link = get_day_link( get_query_var('year'), get_query_var('monthnum'), get_query_var('day') ); 
                        } else if ( is_month() ) { 
                                $link = get_month_link( get_query_var('year'), get_query_var('monthnum') ); 
                        } else if ( is_year() ) { 
                                $link = get_year_link( get_query_var('year') ); 
                        }                                                
                } 
        } 
 
        if ( $paged && $link && get_query_var('paged') > 1 ) { 
                global $wp_rewrite; 
                if ( !$wp_rewrite->using_permalinks() ) { 
                        $link = add_query_arg( 'paged', get_query_var('paged'), $link ); 
                } else { 
                        $link = user_trailingslashit( trailingslashit( $link ) . trailingslashit( $wp_rewrite->pagination_base ) . get_query_var('paged'), 'archive' ); 
                } 
        } 
        return $link; 
}
//获取文章第一张图片
function catch_that_image() {
      global $post, $posts;
      $first_img = '';
      ob_start();
      ob_end_clean();
      $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
      $first_img = $matches[1][0];
      if(empty($first_img)){ //Defines a default image
        $first_img = "/images/loading.jpg";
      }
      return $first_img;
    }
