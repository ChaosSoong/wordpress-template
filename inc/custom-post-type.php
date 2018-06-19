<?php
/**
 *注册自定义团队、专题、问答、科技、案例、项目、科普、前沿科技文章类型
 *doctor、special、question、hall、cases、projects、knowledge、ad
 *并且定义属于自己的分类目录
 */

    //文章自定义类别名称post_type对应的taxonomy
    $custom_taxonomy = array(
        'doctor'    =>  'expert',
        'special'   =>  'topic',
        'cases'     =>  'case',
        'projects'  =>  'items'
    );


add_action('init','pengai_post_type_init');
function pengai_post_type_init()
{
    $labels = array();
    $args = array();
    $taxonomy = array();
    $labels['doctor'] = array(
        'name' => '团队管理',
        'singular_name' => '团队',
        'add_new' => '添加',
        'add_new_item' => '医生姓名',
        'edit_item' => '编辑',
        'new_item' => 'new_item',
        'view_item' => '预览',
        'search_items' => '搜索内容',
        'not_found' => '没有找到该类别的内容',
        'not_found_in_trash' => '回收站中没有内容',
        'parent_item_colon' => '',
        'menu_name' => '团队'
    );
    $args['doctor'] = array(   
        'labels' => $labels['doctor'], 
        'description' => '描述',  
        'public' => true,   
        'publicly_queryable' => true, 
        'exclude_from_search' => true,  
        'show_ui' => true,    
        'show_in_menu' => true,  
        'menu_position' => 60, 
        'menu_icon' => 'dashicons-groups', 
        'query_var' => true,   
        'rewrite' => true,   
        'capability_type' => 'post',   
        'capabilities' => array(),
        'map_meta_cap' => true,
        'has_archive' => true,    
        'hierarchical' => false,
        '_builtin' => false,   
        'menu_position' => null,   
        'supports' => array('title','editor','thumbnail'),
        'taxonomies'=> array()
    );
    $labels['cases'] = array(
        'name' => '案例管理',
        'singular_name' => '案例',
        'add_new' => '添加',
        'add_new_item' => '标题',
        'edit_item' => '编辑',
        'new_item' => 'new_item',
        'view_item' => '预览',
        'search_items' => '搜索内容',
        'not_found' => '没有找到该类别的内容',
        'not_found_in_trash' => '回收站中没有内容',
        'parent_item_colon' => '',
        'menu_name' => '案例'
    );
    $args['cases'] = array(   
        'labels' => $labels['cases'], 
        'description' => '描述',  
        'public' => true,   
        'publicly_queryable' => true, 
        'exclude_from_search' => true,  
        'show_ui' => true,    
        'show_in_menu' => true,  
        'menu_position' => 60, 
        'menu_icon' => 'dashicons-format-gallery', 
        'query_var' => true,   
        'rewrite' => true,   
        'capability_type' => 'post',   
        'capabilities' => array(),
        'map_meta_cap' => true,
        'has_archive' => true,    
        'hierarchical' => false,
        '_builtin' => false,   
        'menu_position' => null,   
        'supports' => array('title','thumbnail'),
        'taxonomies'=> array()
    );
    $labels['special'] = array(
        'name' => '专题管理',
        'singular_name' => '专题',
        'add_new' => '添加',
        'add_new_item' => '标题',
        'edit_item' => '编辑',
        'new_item' => 'new_item',
        'view_item' => '预览',
        'search_items' => '搜索内容',
        'not_found' => '没有找到该类别的内容',
        'not_found_in_trash' => '回收站中没有内容',
        'parent_item_colon' => '',
        'menu_name' => '专题'
    );
    $args['special'] = array(   
        'labels' => $labels['special'], 
        'description' => '描述',  
        'public' => true,   
        'publicly_queryable' => true, 
        'exclude_from_search' => true,  
        'show_ui' => true,    
        'show_in_menu' => true,  
        'menu_position' => 60, 
        'menu_icon' => 'dashicons-layout', 
        'query_var' => true,   
        'rewrite' => true,   
        'capability_type' => 'post',   
        'capabilities' => array(),
        'map_meta_cap' => true,
        'has_archive' => true,    
        'hierarchical' => false,
        '_builtin' => false,   
        'menu_position' => null,   
        'supports' => array('title','editor','thumbnail'),
        'taxonomies'=> array()
    ); 
    $labels['projects'] = array(
        'name' => '项目管理',
        'singular_name' => '项目',
        'add_new' => '添加',
        'add_new_item' => '标题',
        'edit_item' => '编辑',
        'new_item' => 'new_item',
        'view_item' => '预览',
        'search_items' => '搜索内容',
        'not_found' => '没有找到该类别的内容',
        'not_found_in_trash' => '回收站中没有内容',
        'parent_item_colon' => '',
        'menu_name' => '项目'
    );
    $args['projects'] = array(   
        'labels' => $labels['projects'], 
        'description' => '描述',  
        'public' => true,   
        'publicly_queryable' => true, 
        'exclude_from_search' => true,  
        'show_ui' => true,    
        'show_in_menu' => true,  
        'menu_position' => 60, 
        'menu_icon' => 'dashicons-universal-access-alt', 
        'query_var' => true,   
        'rewrite' => true,   
        'capability_type' => 'post',   
        'capabilities' => array(),
        'map_meta_cap' => true,
        'has_archive' => true,    
        'hierarchical' => false,
        '_builtin' => false,   
        'menu_position' => null,   
        'supports' => array('title','editor','thumbnail'),
        'taxonomies'=> array()
    ); 
    //添加文章自定义类别
    $taxonomy['doctor'] = array(   
        'name' => '团队分类',    
        'singular_name' => $custom_taxonomy['doctor'],   
        'search_items' =>  '搜索' ,   
        'popular_items' => '热门' ,   
        'all_items' => '所有' ,   
        'parent_item' => null,   
        'parent_item_colon' => null,   
        'edit_item' => '编辑' ,    
        'update_item' => '更新' ,   
        'add_new_item' => '添加' ,   
        'new_item_name' => '团队分类名称',   
        'separate_items_with_commas' => '按逗号分开' ,   
        'add_or_remove_items' => '添加或删除',   
        'choose_from_most_used' => '从经常使用的类型中选择',   
        'menu_name' => '团队分类',   
    );  
    $taxonomy['special'] = array(   
        'name' => '专题分类',    
        'singular_name' => $custom_taxonomy['special'],   
        'search_items' =>  '搜索' ,   
        'popular_items' => '热门' ,   
        'all_items' => '所有' ,   
        'parent_item' => null,   
        'parent_item_colon' => null,   
        'edit_item' => '编辑' ,    
        'update_item' => '更新' ,   
        'add_new_item' => '添加' ,   
        'new_item_name' => '专题分类名称',   
        'separate_items_with_commas' => '按逗号分开' ,   
        'add_or_remove_items' => '添加或删除',   
        'choose_from_most_used' => '从经常使用的类型中选择',   
        'menu_name' => '专题分类',   
    );
    $taxonomy['cases'] = array(   
        'name' => '案例分类',    
        'singular_name' => $custom_taxonomy['cases'],   
        'search_items' =>  '搜索' ,   
        'popular_items' => '热门' ,   
        'all_items' => '所有' ,   
        'parent_item' => null,   
        'parent_item_colon' => null,   
        'edit_item' => '编辑' ,    
        'update_item' => '更新' ,   
        'add_new_item' => '添加' ,   
        'new_item_name' => '专题分类名称',   
        'separate_items_with_commas' => '按逗号分开' ,   
        'add_or_remove_items' => '添加或删除',   
        'choose_from_most_used' => '从经常使用的类型中选择',   
        'menu_name' => '案例分类',   
    );
    $taxonomy['projects'] = array(   
        'name' => '项目分类',    
        'singular_name' => $custom_taxonomy['projects'],   
        'search_items' =>  '搜索' ,   
        'popular_items' => '热门' ,   
        'all_items' => '所有' ,   
        'parent_item' => null,   
        'parent_item_colon' => null,   
        'edit_item' => '编辑' ,    
        'update_item' => '更新' ,   
        'add_new_item' => '添加' ,   
        'new_item_name' => '项目分类名称',   
        'separate_items_with_commas' => '按逗号分开' ,   
        'add_or_remove_items' => '添加或删除',   
        'choose_from_most_used' => '从经常使用的类型中选择',   
        'menu_name' => '项目分类',   
    );
    //添加文章自定义类别 
    global $custom_taxonomy;
    foreach($args as $key=>$val ){
       //注册自定义文章类型
       register_post_type($key,$val);
       //注册自定义分类目录
       $classname = $custom_taxonomy[$key];
       register_taxonomy(   
            $classname,   
            array($key),   
            array(   
                'hierarchical' => true,   
                'labels' => $taxonomy[$key],   
                'show_ui' => true,   
                'query_var' => true,   
                'rewrite' => array( 'slug' => $classname ),   
            )   
       ); 
       flush_rewrite_rules();
    }
}
//文章列表添加自定义类别过滤功能
add_action( 'restrict_manage_posts', 'pengai_filter_list' );
function pengai_filter_list() {
    global $typenow;
    global $custom_taxonomy;
    $screen = get_current_screen();
    global $wp_query;
    if ( $screen->post_type == $typenow ) {
        wp_dropdown_categories( array(
            'show_option_all' => '查看所有分类目录',
            'taxonomy' => $custom_taxonomy[$typenow],
            'name' => $custom_taxonomy[$typenow],
            'orderby' => 'name',
            'selected' => ( isset( $wp_query->query[$custom_taxonomy[$typenow]] ) ? $wp_query->query[$custom_taxonomy[$typenow]] : '' ),
            'hierarchical' => false,
            'depth' => 3,
            'show_count' => false,
            'hide_empty' => false,
        ) );
    }
}
//将要过滤的数据提交给查询对象
add_filter( 'parse_query','perform_filterings' );
function perform_filterings( $query ) {
    global $typenow;
    global $custom_taxonomy;
    $qv = &$query->query_vars;
    if ( ( $qv[$custom_taxonomy[$typenow]] ) && is_numeric( $qv[$custom_taxonomy[$typenow]] ) ) {
        $term = get_term_by( 'id', $qv[$custom_taxonomy[$typenow]], $custom_taxonomy[$typenow] );
        $qv[$custom_taxonomy[$typenow]] = $term->slug;
    }
}
//后台文章列表过滤
add_filter( 'pre_get_posts', 'filter_fun' );
function filter_fun($arr){
    if ( isset($_REQUEST['post_type']) ){
        global $wp_query;
        $post_type = $_REQUEST['post_type'];
        $wp_query->query_vars['post_type'] ="$post_type";
    }
}
?>