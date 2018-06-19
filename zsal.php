<?php
/**
 Template Name: 真实案例
 */
get_header()
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/zsal_list.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/delayLoading.min.js"></script>
<script>
        (function () {
            var showMoreNChildren = function ($children, n) {
                //显示某jquery元素下的前n个隐藏的子元素
                var $hiddenChildren = $children.filter(":hidden");
                var cnt = $hiddenChildren.length;
                for (var i = 0; i < n && i < cnt; i++) {
                    $hiddenChildren.eq(i).delay(2000).show(1000);
                }
                return cnt - n; //返回还剩余的隐藏子元素的数量
            }

            jQuery.showMore = function (selector) {
                if (selector == undefined) {
                    selector = ".showMoreNChildren"
                }
                //对页中现有的class=showMorehandle的元素，在之后添加显示更多条，并绑定点击行为
                $(selector).each(function () {
                    var pagesize = $(this).attr("pagesize") || 10;
                    var $children = $(this).children();
                    if ($children.length > pagesize) {
                        for (var i = pagesize; i < $children.length; i++) {
                            $children.eq(i).hide();
                        }

                        $(
                            "<div class='showMorehandle' >加载更多<i><img src='<?php echo get_template_directory_uri();?>/images/loading.gif'></i></div>"
                        ).insertAfter($(this)).click(function () {
                            if (showMoreNChildren($children, pagesize) <= 0) {
                                //如果目标元素已经没有隐藏的子元素了，就隐藏“点击更多的按钮条”
                                $(this).hide();
                            };
                            $('.showMorehandle img').show(100, function () {
                                $(this).delay(2500).hide(0);
                            });
                        });
                    }
                });
            }
        })(); // JavaScript Document
        $(function () {
            $(".showMoreNChildren li img").delayLoading({
                defaultImg: "<?php echo get_template_directory_uri();?>/images/loading.jpg", // 预加载前显示的图片
                errorImg: "", // 读取图片错误时替换图片(默认：与defaultImg一样)
                imgSrcAttr: "originalSrc", // 记录图片路径的属性(默认：originalSrc，页面img的src属性也要替换为originalSrc)
                beforehand: 0, // 预先提前多少像素加载图片(默认：0)
                event: "scroll", // 触加载图片事件(默认：scroll)
                duration: "normal", // 三种预定淡出(入)速度之一的字符串("slow", "normal", or "fast")或表示动画时长的毫秒数值(如：1000),默认:"normal"
                container: window, // 对象加载的位置容器(默认：window)
                success: function (imgObj) {}, // 加载图片成功后的回调函数(默认：不执行任何操作)
                error: function (imgObj) {} // 加载图片失败后的回调函数(默认：不执行任何操作)
            });
        });
    </script>
    <div class="anli" style="height: 100%">
        <div class="anli_l">
            <h3>
                <img src="<?php echo get_template_directory_uri();?>/images/anli_l1.jpg" width="266" height="68">
            </h3>
            <ul>
                <li>
                    <a href="/zsal/" target="_blank">
                        <b>全部案例</b>
                        <small>All</small>
                    </a>
                </li>
                <li>
                    <a href="/zsal/lbal/" target="_blank">
                        <b>隆鼻系列</b>
                        <small>Nose</small>
                    </a>
                </li>
                <li>
                    <a href="/zsal/zfdsal/" target="_blank">
                        <b>脂肪雕塑</b>
                        <small>liposuction</small>
                    </a>
                </li>
                <li>
                    <a href="/zsal/pfmral/" target="_blank">
                        <b>激光美容</b>
                        <small>Skin</small>
                    </a>
                </li>
                <li>
                    <a href="/zsal/spfxal/" target="_blank">
                        <b>视频分享</b>
                        <small>Videos</small>
                    </a>
                </li>
            </ul>
            <span>
                <img src="<?php echo get_template_directory_uri();?>/images/anli_l3.png" width="220" height="43">
                <dl>
                    <dd>
                        <a href="http://pat.zoosnet.net/LR/Chatpre.aspx?id=PAT12344546&lng=cn&e=zhongmeng5g&r=zhongmeng5g&p=zhongmeng5g"
                            target="_blank">
                            <img src="<?php echo get_template_directory_uri();?>/images/anli_l4.png" width="30" height="30">
                            <b>在线咨询</b>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://pat.zoosnet.net/LR/Chatpre.aspx?id=PAT12344546&lng=cn&e=zhongmeng5g&r=zhongmeng5g&p=zhongmeng5g"
                            target="_blank">
                            <img src="<?php echo get_template_directory_uri();?>/images/anli_l5.png" width="30" height="30">
                            <b>预约专家</b>
                        </a>
                    </dd>
                </dl>
            </span>
        </div>
        <div class="anli_r">
            <div class="anli_r_t">
                <h3>全部案例
                </h3>
                <p>丽港与您共享美丽时刻，改变几毫米　扬帆新人生</p>
            </div>
            <div class="anli_r_c">
                <ul class="showMoreNChildren" pagesize="6">
                <?php  
                    $args=array(  
                        'cat' => 18,   // 分类ID  
                        'posts_per_page' => 10, // 显示篇数  
                    );  
                    query_posts($args);  
                    if(have_posts()) : while (have_posts()) : the_post();  
                    ?>  
                    <li>
                            <a href="<?php the_permalink();?>" target="_blank">
                                <img originalsrc="<?php echo catch_that_image();?>" width="400">
                            </a>
                            <span>
                                <p>
                                    <strong>术&nbsp;&nbsp;式：</strong>云梯式综合隆鼻
                                    </p>
                                <p>
                                    <strong>术前情况：</strong><?php the_excerpt(); ?>  
                                </p>
                            </span>
                    </li>
                <?php  endwhile; endif; wp_reset_query(); ?>
                    <li>
                        <a href="/zsal/lbal/621.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161020/2-1610201G52I55.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>肋软骨综合隆鼻+脂肪填充额颞部</p>
                            <p>
                                <strong>术前情况：</strong>安娜，28岁，有貌有才也有事业，却只因自己鼻梁太塌，一直被叫做插座鼻。“鼻子，其实...
                                <a href="/zsal/lbal/621.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/491.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161101/2-1611011Z224E4.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>云梯式综合隆鼻术</p>
                            <p>
                                <strong>术前情况：</strong>鹰钩鼻、宽鼻、驼峰鼻,是的我之前的鼻子就这么丑， 可如今我的鼻子那么完美， 每天都...
                                <a href="/zsal/lbal/491.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/444.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161103/2-16110310210J63.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>云梯式综合隆鼻</p>
                            <p>
                                <strong>术前情况：</strong>我以前鼻子太塌，在山根处注射过玻尿酸，但鼻子还是会看着短和宽，拍照的时候只要晒正...
                                <a href="/zsal/lbal/444.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/606.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161103/2-16110310014DS.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>云梯式综合隆鼻+均质化脂肪填充</p>
                            <p>
                                <strong>术前情况：</strong>太阳穴部位的凹陷，让我不太想去面对扎起头发的自己。鼻子是注射过玻尿酸，但隔断时间...
                                <a href="/zsal/lbal/606.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/zfdsal/609.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/allimg/160824/2-160R41AJI19.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>均质化脂肪填充案例</p>
                            <p>
                                <strong>术前情况：</strong>额头、太阳穴过于凹陷的人，会给人凶神恶煞感，给人的印象是不健康，没自信，没活力。...
                                <a href="/zsal/zfdsal/609.html"
                                    target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/307.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/allimg/161103/2-1611031KFJc.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>歪鼻矫正综合隆鼻</p>
                            <p>
                                <strong>术前情况：</strong>鼻骨左侧碎裂成至少三片，右侧至少两片，一侧在做截骨后还有些增生，很多医生觉得日本...
                                <a href="/zsal/lbal/307.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/pfmral/641.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161101/2-1611011I2195K.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>水光针</p>
                            <p>
                                <strong>术前情况：</strong>Aimee皮肤有些干燥缺水，还有小细纹。如何在繁忙的日程中也依然能保持肌肤的光彩靓丽...
                                <a href="/zsal/pfmral/641.html"
                                    target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/505.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161101/2-1611011T603F9.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>L型假体隆鼻修复</p>
                            <p>
                                <strong>术前情况：</strong>在西安做了L型假体隆鼻，当时自己什么都不懂，一年后的觉得有些不对，开始的时候鼻尖...
                                <a href="/zsal/lbal/505.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/503.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161101/2-1611011TU1255.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>隆鼻修复史</p>
                            <p>
                                <strong>术前情况：</strong>之前进行了两次鼻修复手术。第一次是硅胶隆鼻，鼻背通光现象严重于是半年后进行了第二...
                                <a href="/zsal/lbal/503.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/486.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/allimg/160729/142A64346-0-lp.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>
                            </p>
                            <p>
                                <strong>术前情况：</strong>两年前做的手术方法是膨体+耳软骨隆鼻，现在鼻子有轻微的歪斜，鼻头极度的圆顿。真的...
                                <a href="/zsal/lbal/486.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/654.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161121/2-161121151930O8.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>朝天鼻+蒜头鼻</p>
                            <p>
                                <strong>术前情况：</strong>鼻梁扁平、鼻头短（朝天鼻），是Amy对鼻部最不满意的地方，术后的Amy鼻子高挺、鼻头延...
                                <a href="/zsal/lbal/654.html"
                                    target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/490.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161101/2-1611011Z443636.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>云梯式综合隆鼻</p>
                            <p>
                                <strong>术前情况：</strong>整形吧，医生的审美也是挺重要的，如果医生审美都不行怎么能帮别人变美呢?说到这儿还...
                                <a href="/zsal/lbal/490.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/509.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161101/2-1611011T413233.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>云梯式综合隆鼻</p>
                            <p>
                                <strong>术前情况：</strong>我更喜欢、更享受我的另一个身份，老婆跟妈妈，命运眷顾了我，爱我的老公、可爱的儿子...
                                <a href="/zsal/lbal/509.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/639.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/allimg/160928/2-16092QH956146.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>注射物取出+膨体鼻综合</p>
                            <p>
                                <strong>术前情况：</strong>美从来都是公平的，只是有的人生来就有了，有的人需要后天改变。谁说做的鼻子都是直挺...
                                <a href="/zsal/lbal/639.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/598.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161101/2-1611011S121910.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>鼻根注射物取出+云梯式综合隆鼻</p>
                            <p>
                                <strong>术前情况：</strong>人们都会喜欢更加立体的脸型，鼻子位于脸部的中央位置，在脸部轮廓中起着重要的地位。...
                                <a href="/zsal/lbal/598.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/592.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/161021/2-1610211634095F.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>硅胶隆鼻+鼻尖整形+鼻基底整形</p>
                            <p>
                                <strong>术前情况：</strong>女生都喜欢拍照，小烨却不愿意在镜头面前展现自己。甚至连美颜相机都不会操作。偶尔和...
                                <a href="/zsal/lbal/592.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                    <li>
                        <a href="/zsal/lbal/640.html" target="_blank">
                            <img originalsrc="http://www.doctorwu.net//uploads/allimg/160928/2-16092R253392M.jpg" width="400">
                        </a>
                        <span>
                            <p>
                                <strong>术&nbsp;&nbsp;式：</strong>宽鼻缩窄+硅胶鼻综合案例</p>
                            <p>
                                <strong>术前情况：</strong>十足的国际范儿，超强的镜头感，不断的片约，尽情展现着她的个性、青春与活力。用气场...
                                <a href="/zsal/lbal/640.html" target="_blank">[查看更多]</a>
                            </p>
                        </span>
                    </li>
                </ul>
                <script type="text/javascript">
                    //调用显示更多插件。参数是标准的 jquery 选择符
                    $.showMore(".showMoreNChildren,.mynews");
                </script>
            </div>
            <div class="anli_r_b">

            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <?php
	get_footer()
    ?>
