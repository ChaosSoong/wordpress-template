<?php
/**
 * @Author: qin
 * @Date:   2018-05-23 21:57:06
 * @Last Modified by:   qin
 * @Last Modified time: 2018-05-23 22:55:53
 */
?><!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php wp_title(); ?></title>
    <?php
    	wp_head();
     ?>
     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/master.css"/>
    <link href="<?php echo get_template_directory_uri();?>/css/head.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery1.42.min.js" type="text/javascript"></script>
    <!--此代码仅用于商务通JS引用-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.4.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.SuperSlide.2.1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/index.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/index_c.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/public.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/article.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/footer.css">
	<script language="javascript" src="http://plt.zoosnet.net/JS/LsJS.aspx?siteid=PLT54369147&float=1&lng=cn"></script>
</head>


<body style="overflow-x:hidden">

<div class="header">


    <div class="head">


        <div class="head-m">


            <div class="head-l">中国 <span>权威综合鼻整形</span> 专业医院</div>


            <div class="head-z">美丽热线 0755-28610886</div>


            <div class="head-r">

                <input name="" type="text"/>


                <a href="https://plt.zoosnet.net/LR/Chatpre.aspx?id=PLT54369147"><img
                        src="<?php echo get_template_directory_uri();?>/images/sou.jpg" width="26" height="24"/></a></div>


            <div class="clear"></div>


        </div>


    </div>


    <!--导航start-->
    <div class="nav" style="background-color: #8C734A">
        <div class="bcc-nav bcc-index">
            <div class="bcc-logo fl"><a target="_blank" href="/"><img src="<?php echo get_template_directory_uri();?>/images/btn_home.png"
                                                                      alt="丽格logo"></a></div>

            <div class="nav_menu">
                <div class="navs">
                    <div class="list" id="navlist">
                        <ul id="navfouce">
                            <li><a target="_blank" href="/">丽港首页</a></li>
                            <li><a>品牌中心</a></li>
                            <li><a>隆鼻修复</a></li>
                            <li><a>隆鼻整形</a></li>
                            <li><a>畸形鼻矫正</a></li>
                            <li><a>专家团队</a></li>
                            <li><a target="_blank" href="/zsal">真实案例</a></li>
                            <li><a>更多项目</a></li>
                        </ul>
                    </div>

                    <div class="box" id="navbox" style="height:0px;opacity:0;overflow:hidden;">
                        <div class="cont" style="display:none;"></div>
                        <!--丽港首页end-->
                        <div class="cont" style="display:none;">
                            <div class="navs-cont1">
                                <a target="_blank" href="ppzx/lgxw"><img
                                        src="<?php echo get_template_directory_uri();?>/images/sy_xw.jpg"></a>
                                <a target="_blank" href="ppzx/ppry"><img
                                        src="<?php echo get_template_directory_uri();?>/images/sy_ry.jpg"></a>
                                <a target="_blank" href="ppzx/fwzz"><img
                                        src="<?php echo get_template_directory_uri();?>/images/sy_zz.jpg"></a>
                                <a target="_blank" href="ppzx/zlhz"><img
                                        src="<?php echo get_template_directory_uri();?>/images/sy_hz.jpg"></a>
                                <a target="_blank" href="ppzx/lxwm"><img
                                        src="<?php echo get_template_directory_uri();?>/images/sy_lx.jpg"></a>
                            </div>
                        </div>
                        <!--品牌中心end-->
                        <div class="cont" style="display:block;">
                            <div class="navs-cont2">
                                <div class="navs-cont2l"><h2>隆鼻修复<br><span>Nose repair</span></h2></div>
                                <div class="navs-cont2c">
                                    <ul>
                                    	<?php
					                        $args=array(
					                          'post_type' => 'post',
					                          'tax_query' => array(
					                            array(
					                            'taxonomy' => 'category',
					                            'field' => 'id',
					                            'terms' => array(3)
					                              )
					                          ),
					                          'posts_per_page' =>0
					                        );
					                        $query = new WP_Query($args);
					                        while($query->have_posts()):$query->the_post();
					                    ?>
                                        <li><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php
					                        endwhile;
					                        wp_reset_query();
										?>
                                    </ul>
                                </div>
                                <div class="navs-cont2r">
                                    <a target="_blank" href=""><img
                                            src="<?php echo get_template_directory_uri();?>/images/bcc_lbxf.jpg"
                                            width="100%"></a>
                                </div>
                            </div>
                        </div>
                        <!--隆鼻修复end-->
                        <div class="cont" style="display:block;">
                            <div class="navs-cont4">
                                <div class="navs-cont4l"><h2>隆鼻整形<br><span>Nose jobs</span></h2></div>
                                <div class="navs-cont4c">
                                    <ul>
                                    	<?php
					                        $args=array(
					                          'post_type' => 'post',
					                          'tax_query' => array(
					                            array(
					                            'taxonomy' => 'category',
					                            'field' => 'id',
					                            'terms' => array(4)
					                              )
					                          ),
					                          'posts_per_page' =>0
					                        );
					                        $query = new WP_Query($args);
					                        while($query->have_posts()):$query->the_post();
					                    ?>
                                        <li><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php
					                        endwhile;
					                        wp_reset_query();
										?>
                                    </ul>
                                </div>
                                <div class="navs-cont4r">
                                    <a target="_blank" href=""><img
                                            src="<?php echo get_template_directory_uri();?>/images/bcc_lbzx.jpg"
                                            width="100%"></a>
                                </div>
                            </div>
                        </div>
                        <!--隆鼻整形end-->
                        <div class="cont" style="display:block;">
                            <div class="navs-cont5">
                                <div class="navs-cont5l"><h2>畸形鼻矫正<br><span>Nose jobs</span></h2></div>
                                <div class="navs-cont5c">
                                    <ul>
                                    	<?php
					                        $args=array(
					                          'post_type' => 'post',
					                          'tax_query' => array(
					                            array(
					                            'taxonomy' => 'category',
					                            'field' => 'id',
					                            'terms' => array(5)
					                              )
					                          ),
					                          'posts_per_page' =>0
					                        );
					                        $query = new WP_Query($args);
					                        while($query->have_posts()):$query->the_post();
					                    ?>
                                        <li><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php
					                        endwhile;
					                        wp_reset_query();
										?>
                                    </ul>
                                </div>
                                <div class="navs-cont5r">
                                    <a target="_blank" href=""><img
                                            src="<?php echo get_template_directory_uri();?>/images/bcc_jxbjz.jpg"
                                            width="100%"></a>
                                </div>
                            </div>
                        </div>
                        <!--畸形鼻矫正end-->
                        <div class="cont" style="display:block;">
                            <div class="navs-cont6">
                                <div class="navs-cont6l"><h2>专家团队<br><span>EXPERT TEAM</span></h2></div>
                                <div class="navs-cont6c">
                                    <ul>
                                        <li><a target="_blank" href="/zhuanjia/xj"><img
                                                src="<?php echo get_template_directory_uri();?>/images/zjtu01.jpg"
                                                width="119" height="146"></a></li>
                                        <li><a target="_blank" href="/zhuanjia/yrx"><img
                                                src="<?php echo get_template_directory_uri();?>/images/zjtu03.jpg"
                                                width="119" height="146"></a></li>
                                        <li><a target="_blank" href="/zhuanjia/pj"><img
                                                src="<?php echo get_template_directory_uri();?>/images/zjtu04.jpg"
                                                width="119" height="146"></a></li>
                                        <li><a target="_blank" href="/zhuanjia/cxt"><img
                                                src="<?php echo get_template_directory_uri();?>/images/zjtu05.jpg"
                                                width="119" height="146"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--专家团队end-->
                        <div class="cont" style="display:none;"></div>
                        <!--真实案例end-->
                        <div class="cont" style="display:block;">
                            <div class="navs-cont7">
                                <div class="navs-cont7l"><h2>更多项目<br><span>Other jobs</span></h2></div>
                                <div class="navs-cont7c">
                                    <ul>
	                                	<?php
	                                		 $other_categories = get_categories(array('parent' => 6,'hide_empty'=>false ));
	                                		 foreach ($other_categories as $key => $other_category) {
	                                	?>
                                        <li>
                                            <span class="spana"><a target="_blank" href="javascript:void(0);"><?php echo $other_category->name; ?></a></span>
                                            <span class="spanb">
                                            	<?php
							                        $args=array(
							                          'post_type' => 'post',
							                          'tax_query' => array(
							                            array(
							                            'taxonomy' => 'category',
							                            'field' => 'id',
							                            'terms' => array($other_category->term_id)
							                              )
							                          ),
							                          'posts_per_page' =>0
							                        );
							                        $query = new WP_Query($args);
							                        while($query->have_posts()):$query->the_post();
                                            	?>
                                                <a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<?php
							                        endwhile;
							                        wp_reset_query();
												?>
                                            </span>
                                        </li>
                                        <?php
                                        	}
                                        ?>
										<li>
                                            <span class="spana"><a target="_blank" href="javascript:void(0);">专题系列</a></span>
                                            <span class="spanb">
                                                <a target="_blank" href="/zhuanti/boniaosuan">玻尿酸</a><a target="_blank" href="/zhuanti/fengxiong">丰胸</a><a target="_blank" href="/zhuanti/shoulianzhen">瘦脸针</a><a target="_blank" href="/zhuanti/shuiguangzhen">水光针</a><a target="_blank" href="/zhuanti/xiandiao">线雕</a><a target="_blank" href="/zhuanti/zitizhifang">自体脂肪</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navs-cont7r"><a target="_blank" href=""><img
                                        src="<?php echo get_template_directory_uri();?>/images/bcc_gdxm.jpg"
                                        width="100%"></a></div>
                            </div>
                        </div>
                        <!--更多项目end-->
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                (function () {

                    var time = null;
                    var list = $("#navlist");
                    var box = $("#navbox");
                    var lista = list.find("a");

                    for (var i = 0, j = lista.length; i < j; i++) {
                        if (lista[i].className == "now") {
                            var olda = i;
                        }
                    }

                    var box_show = function (hei) {
                        box.stop().animate({
                            height: hei,
                            opacity: 0.9
                        }, 400);
                    }

                    var box_hide = function () {
                        box.stop().animate({
                            height: 0,
                            opacity: 0.9
                        }, 400);
                    }

                    lista.hover(function () {
                        lista.removeClass("now");
                        $(this).addClass("now");
                        clearTimeout(time);
                        var index = list.find("a").index($(this));
                        box.find(".cont").hide().eq(index).show();
                        var _height = box.find(".cont").eq(index).height();
                        box_show(_height)
                    }, function () {
                        time = setTimeout(function () {
                            box.find(".cont").hide();
                            box_hide();
                        }, 500);
                        lista.removeClass("now");
                        lista.eq(olda).addClass("now");
                    });

                    box.find(".cont").hover(function () {
                        var _index = box.find(".cont").index($(this));
                        lista.removeClass("now");
                        lista.eq(_index).addClass("now");
                        clearTimeout(time);
                        $(this).show();
                        var _height = $(this).height();
                        box_show(_height);
                    }, function () {
                        time = setTimeout(function () {
                            $(this).hide();
                            box_hide();
                        }, 500);
                        lista.removeClass("now");
                        lista.eq(olda).addClass("now");
                    });

                })();
            </script>
        </div>
    </div>
    <!--导航end-->


</div>


<div class="clear"></div>

<div class="focusBox" style="margin:0 auto">


    <ul class="pic">

        <li><a href="https://plt.zoosnet.net/LR/Chatpre.aspx?id=PLT54369147" target="_blank"><img
                src="<?php echo get_template_directory_uri();?>/images/banner1.jpg"/></a></li>

        <li><a href="http://plt.zoosnet.net/LR/Chatpre.aspx?id=PLT54369147&lng=cn" target="_blank"><img
                src="<?php echo get_template_directory_uri();?>/images/banner2.jpg"/></a></li>


        <li><a href="https://plt.zoosnet.net/LR/Chatpre.aspx?id=PLT54369147" target="_blank"><img
                src="<?php echo get_template_directory_uri();?>/images/banner3.jpg"/></a></li>


        <li><a href="http://plt.zoosnet.net/LR/Chatpre.aspx?id=PLT54369147&lng=cn" target="_blank"><img
                src="<?php echo get_template_directory_uri();?>/images/banner4.jpg"/></a></li>
    </ul>


    <a class="prev" href="javascript:void(0)"></a>


    <a class="next" href="javascript:void(0)"></a>


    <ul class="hd">


        <li></li>


        <li></li>


        <li></li>


        <li></li>


    </ul>


</div>


<script type="text/javascript">


    /*鼠标移过，左右按钮显示*/


    jQuery(".focusBox").hover(function () {
        jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.2)
    }, function () {
        jQuery(this).find(".prev,.next").fadeOut()
    });


    /*SuperSlide图片切换*/


    jQuery(".focusBox").slide({mainCell: ".pic", effect: "fold", autoPlay: true, delayTime: 600, trigger: "click"});


</script>
