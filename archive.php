<?php
/**
 * 日期归档，显示某个日期发布的文章
 * @package Tanhaibo.net
 * @subpackage tanhaibonet
 * @since tanhaibonet 4.1
 */
get_header();
?>
<style>.tag-description {
        width: 660px;
        min-height: 80px;
        float: left;
        background: #f1f1f1;
        border-top: 2px #3164ca solid;
        margin-bottom: 20px;
        padding: 20px;
}

.tag-title {
        width: 660px;
        height: 30px;
        color: #333;
        font-size: 18px;
        font-weight: bold;
}

.tag-title a {
        color: #333;
        text-decoration: none;	
}

.tag-content {
        width: 660px
        min-height: 50px;
        margin: 10px 0 0 0;
        color: #666;
        font-size: 14px;
        line-height: 25px;
}</style>
<div id="container">
        <div class="loopcontainer">			
                <div class="tag-description">
                        <div class="tag-title">
                                <?php if ( is_day() ) : printf( __( '<span>%s发布的所有文章</span>', 'tanhaibonet' ), get_the_date() ); ?>
                                <?php elseif ( is_month() ) : printf( __( '<span>%s发布的所有文章</span>', 'tanhaibonet' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tanhaibonet' ) ) ); ?>
                                <?php elseif ( is_year() ) : printf( __( '<span>%s发布的所有文章</span>', 'tanhaibonet' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tanhaibonet' ) ) ); ?>
                                <?php else : _e( 'Blog Archives', 'tanhaibonet' ); ?>
                                <?php endif; ?></div><!-- .tag-title -->
                        <div class="tag-content">温馨提示：这是按照文章的发布日期排列显示的，您可以在浏览器的地址栏以天、以月份或者以年份的格式输入您想要查看的日期的文章。例如2013年1月发布的文章，就输入“tanhaibo.net/2013/01”。</div><!-- .tag-content -->
                </div><!-- .tag-description -->
                        
                <?php get_template_part( 'loop', 'archive' ); ?>

        </div><!-- .loopcontainer -->
        <?php get_pagenav(); ?>
</div><!-- #container -->
<?php get_footer(); ?>