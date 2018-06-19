<?php
/**
 * @Author: qin
 * @Date:   2018-05-23 22:29:23
 * @Last Modified by:   qin
 * @Last Modified time: 2018-05-23 22:44:14
 */
    get_header();
    $category = get_categories();
    if(have_posts()):the_post();
?>
<div class="bcc-art">
    <div class="art-postion">
        <a href='/'>首页</a> > <a href='<?php echo get_category_link( $category[0]->term_id ); ?>'><?php echo $category[0]->name; ?></a> > <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a> >
    </div>


    <div class="art-content">
        <div class="art-left">
            <div class="art-left-bod">
                <h1><?php the_title(); ?></h1>
                <div class="art-xiangqing">
                    <span><?php the_time('Y-m-d H:i:s'); ?></span>
                    <span>来源： <?php the_author(); ?></span>
                    <span>编辑：<?php the_author(); ?></span>
                </div>
                <div class="art-fenxiang">
                    <div class="art-fenxiang-l"></div>
                    <div class="art-fenxiang-r">
                        <a href="http://pat.zoosnet.net/LR/Chatpre.aspx?id=PAT12344546&lng=cn&e=zhongmeng5g&r=zhongmeng5g&p=zhongmeng5g"><img src="<?php echo get_template_directory_uri();?>/images/ART_03.png" alt=""></a>
                        <a target="_blank" href="http://pat.zoosnet.net/LR/Chatpre.aspx?id=PAT12344546&lng=cn&e=zhongmeng5g&r=zhongmeng5g&p=zhongmeng5g"><img src="<?php echo get_template_directory_uri();?>/images/ART_05.png" alt=""></a>
                        <a target="_blank" href="http://pat.zoosnet.net/LR/Chatpre.aspx?id=PAT12344546&lng=cn&e=zhongmeng5g&r=zhongmeng5g&p=zhongmeng5g"><img src="<?php echo get_template_directory_uri();?>/images/ART_07.png" alt=""></a>
                    </div>
                </div>
                <div class="art-daodu"><?php the_excerpt(); ?></div>

                <div class="art-art">
                    <?php the_content(); ?>
                </div>


            </div>
        </div>


        <div class="art-right">

            <div class="artal">
                <h2><span style="font-size: 18px;color: #9b732f;line-height: 40px;">真人案例</span></h2>
                <div class="msn-focus1" style="margin:0 auto">
                    <div class="bd1">
                        <ul>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例1.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例2.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例3.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例4.png"></a>
                            </li>
                            <li style="display: list-item;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例5.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例6.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例7.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例8.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例9.png"></a>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/案例10.png"></a>
                            </li>

                        </ul>
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
                    </div>

                    <div class="hd1">
                        <ul>

                        </ul>
                    </div>

                </div>
                <script type="text/javascript">
                    //鼠标移到大图，显示左右箭头
                    jQuery(".msn-focus1 .bd1").hover(function(){ jQuery(this).addClass("bdOn") },function(){ jQuery(this).removeClass("bdOn") });
                    //SuperSlide书签切换
                    jQuery(".msn-focus1").slide({ mainCell:".bd1 ul",delayTime:0,triggerTime:0,autoPlay:true });
                </script>


            <!-- 专家 -->
            <div class="art-doctor">
                <h2><span style="font-size: 18px;color: #9b732f;line-height: 40px;">专家团队</span></h2>
                <div class="msn-focus" style="margin:0 auto;height: 340px;">
                    <div class="bd">
                        <ul>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/彭静.png"></a>
                                <p> <i> </i> <a href="">彭静</a> </p>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/蔡小婷.png"></a>
                                <p> <i> </i> <a href="">蔡小婷</a> </p>
                            </li>
                            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/谢俊.png"></a>
                                <p> <i> </i> <a href="">谢俊</a> </p>

                        </ul>
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
                    </div>

                    <div class="hd">
                        <ul><li class=""><a target="_blank" href="">彭静</a></li>
                            <li class=""><a target="_blank" href="">蔡小婷</a></li>
                            <li class=""><a target="_blank" href="">谢俊</a></li>

                        </ul>
                    </div>

                </div>

                <script type="text/javascript">
                    //鼠标移到大图，显示左右箭头
                    jQuery(".msn-focus .bd").hover(function(){ jQuery(this).addClass("bdOn") },function(){ jQuery(this).removeClass("bdOn") });
                    //SuperSlide书签切换
                    jQuery(".msn-focus").slide({ mainCell:".bd ul",delayTime:0,triggerTime:0,autoPlay:true });
                </script>
            </div>
                <p class="tit">专家在线咨询平台</p>
                <p class="pline"><img src="<?php echo get_template_directory_uri();?>/images/mlline1.png" alt=""></p>
            <div class="clearfix"></div>
            <!-- 经典项目 -->
            <div class="art-jdxm">
                <h2><span>经典推荐</span></h2>
                <div class="recommend">
                    <a href="http://www.szbeauty.com.cn/zt/lian.html" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/jd_img1.jpg" alt="" border="0"></a>
                    <a href="http://www.szbeauty.com.cn/zt/xiong.html" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/jd_img2.jpg" alt="" border="0"></a>
                    <a href="http://www.szbeauty.com.cn/zt/bi.html" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/jd_img22.jpg" alt="" border="0"></a>
                </div>

            </div>
            <!-- 经典项目 -->

            <!-- 热门文章 -->
            <div class="art-rmwz">
                <h2><span style="font-size: 18px;color: #9b732f;line-height: 40px;">整形项目</span></h2>
                <div class="zxbox">
                    <div class="zx">
                        <h5>综合美鼻</h5>

                        <ul 1="" style="display: none;">

                            <li><a href="http://www.szbeauty.com.cn/xmzx/zslb/">注射隆鼻</a></li>

                            <li><a href="http://www.szbeauty.com.cn/xmzx/jtlb/">假体隆鼻</a></li>

                            <li><a href="http://www.szbeauty.com.cn/xmzx/btjz/">鼻头矫正</a></li>

                            <li><a href="http://www.szbeauty.com.cn/xmzx/byzx/">鼻翼整形</a></li>

                            <li><a href="http://www.szbeauty.com.cn/xmzx/nxjz/">鼻型矫正</a></li>

                            <li><a href="http://www.szbeauty.com.cn/xmzx/zhbsx/">综合鼻塑形</a></li>

                        </ul>
                    </div><div class="zx highlight">
                    <h5>自体脂肪</h5>

                    <ul 2="" style="display: none;">

                        <li><a href="http://www.szbeauty.com.cn/xmzx/ztzfcz/">自体脂肪除皱</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/ztzfft/">自体脂肪丰臀</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/ztzffx/">自体脂肪丰胸</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/ztzffet/">自体脂肪丰额头</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/ztzflb/">自体脂肪隆鼻</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/ztzfftyx/">自体脂肪丰太阳穴</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/qtztzftc/">其他自体脂肪填充</a></li>

                    </ul>
                </div><div class="zx">
                    <h5>整形美容</h5>

                    <ul 3="" style="display: none;">

                        <li><a href="http://www.szbeauty.com.cn/xmzx/qjmy/">翘睫美眼</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/lglx/">丽港隆胸</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/xzsx/">吸脂塑形</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/whgl/">无痕改脸</a></li>

                    </ul>
                </div><div class="zx">
                    <h5>微整形</h5>

                    <ul 4="" style="display: none;">

                        <li><a href="http://www.szbeauty.com.cn/xmzx/mbjd/">面部精雕</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/zscz/">注射除皱</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/bns/">玻尿酸</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/slz/">瘦脸针</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/zslb/">注射隆鼻</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/mbz/">美白针</a></li>

                    </ul>
                </div><div class="zx">
                    <h5>皮肤美容</h5>

                    <ul 5="" style="display: none;">

                        <li><a href="http://www.szbeauty.com.cn/xmzx/yxqb/">医学祛斑</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/jfcz/">紧肤除皱</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/yxcd/">医学祛痘</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/mbnf/">美白嫩肤</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/jgtm/">激光脱毛</a></li>

                    </ul>
                </div><div class="zx">
                    <h5>抗衰老</h5>

                    <ul 6="" style="display: none;">

                        <li><a href="http://www.szbeauty.com.cn/xmzx/zsks/">注射抗衰</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/wcks/">无创抗衰</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/tlks/">提拉抗衰</a></li>

                    </ul>
                </div><div class="zx">
                    <h5>医学纹绣</h5>

                    <ul 7="" style="display: none;">

                        <li><a href="http://www.szbeauty.com.cn/xmzx/xm/">医美超真绣眉</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/pc/">韩式医学漂唇</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/yx/">艺术炫彩眼线</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/ryrs/">医学乳晕润色</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/mbtz/">面部底妆</a></li>

                        <li><a href="http://www.szbeauty.com.cn/xmzx/yxwx/quwenshen/">去纹身</a></li>

                    </ul>
                </div>
                </div>
            </div>
            <!-- 热门文章 -->


        </div>


    </div>

</div>


<script>
    $(".zx").click(function(){

        $(this).addClass("highlight")

            .children("ul").show().end()

            .siblings().removeClass("highlight")

            .children("ul").hide();

    });
</script>
<style>
    .msn-focus .hd{margin-top: 10px;}
</style>
</div>
<?php 
    get_footer();
    endif;
?>