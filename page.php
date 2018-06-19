<?php
/**
 
 */
get_header();
?>
<?php
//global $wp;
//$current_url = home_url(add_query_arg(array(),$wp->request));
//echo $current_url;
if(is_page("cxt")){
?>
	<style>
        .top{
            width:100%;
            height:463px;
            position: relative;
        }
        .img{
            background-size:contain;
            width:100%;
            height: auto;
        }
        .bottom{
            width:100%;
            height:100%;
            position: relative;
        }
        .name{
            height:25px;
            font-size:25px;
            font-family:SourceHanSansCN-Bold;
            color:rgba(51,51,51,1);
            line-height:25px;
            margin-bottom: 20px;
        }
        .special{
            border: 1px dashed #FFFFFF;
            font-size: 12px;
            width: 60px;
            background-color: #6F6C69;
            text-align: center;
            color: #FFFFFF;
        }
    </style>
<div class="top">
    <img src="<?php echo get_template_directory_uri();?>/images/caixiaotingshang.png" alt="" class="img">
    <div style="height: 116px;width:100%;opacity: 0.33;background: #7B7369;position: absolute;top: 75%;">
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">蔡 小 婷 / 整形科主任</div>
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">［皮肤保养｜综合美肤｜面部年轻化｜抗衰老］</div>
    </div>

</div>

<div class="bottom">
    <img src="<?php echo get_template_directory_uri();?>/images/caixiaotingxia.png" alt="" class="img">
    <div style="height: 224px;width:100%;position: absolute;top: 10%;left: 50%;margin-bottom: 10px">
        <div class="name">蔡小婷</div>
        <div class="desc">美容皮肤科主任 、资深激光美肤专家无创美容专家<br>中国整形美容协会会员  <br>中华医学会皮肤激光美容学会会员
            <br>国际美容协会会员<br>亚美会激光美容分会青年委员<br>美国科医人、美国CANDELA、Fotona欧洲之星、美国赛诺秀、
            以色列飞顿公司指定操作医师
            <br>美国BOTOX指定注射医生<br>瑞蓝玻尿酸指定注射医生<br>韩国伊婉玻尿酸指定注射医生
        </div>
    </div>
    <div style="height: 148px;width:100%;position: absolute;bottom: 0;left: 50%;">
        <div class="special">擅长项目</div>
        <div style="margin-top: 5px;color: white">雀斑、太田痣、褐青色痣、咖啡斑、鲜红斑痣、祛斑美肤、线雕、<br>疤痕修复、4D艺术线雕提升、玻尿酸注射。</div>
        <div style="margin-top: 5px"><a href=""><img src="<?php echo get_template_directory_uri();?>/images/lijizixun.png" alt="" width="90" height="27"></a><a href=""><img src="<?php echo get_template_directory_uri();?>/images/yuyue.png" alt="" width="90" height="27" style="margin-left: 10px"></a></div>
    </div>
</div>
<?php
}else if(is_page("xj")){
?>
<style>
        .top{
            width:100%;
            height:463px;
            position: relative;
        }
        .img{
            background-size:contain;
            width:100%;
            height: auto;
        }
        .bottom{
            width:100%;
            height:100%;
            position: relative;
        }
        .name{
            height:25px;
            font-size:25px;
            font-family:SourceHanSansCN-Bold;
            color:rgba(51,51,51,1);
            line-height:25px;
            margin-bottom: 20px;
        }
        .special{
            border: 1px dashed #FFFFFF;
            font-size: 12px;
            width: 60px;
            background-color: #6F6C69;
            text-align: center;
            color: #FFFFFF;
        }
    </style>
<div class="top">
    <img src="<?php echo get_template_directory_uri();?>/images/xiejunshang.png" alt="" class="img">
    <div style="height: 116px;width:100%;opacity: 0.33;background: #7B7369;position: absolute;top: 75%;">
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">谢   俊 / 丽港丽格院长</div>
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">[鼻部整形 | 东方动态美鼻整形]</div>
    </div>

</div>

<div class="bottom">
    <img src="<?php echo get_template_directory_uri();?>/images/xiejunxia.png" alt="" class="img">
    <div style="height: 224px;width:100%;position: absolute;top: 10%;left: 50%;margin-bottom: 10px">
        <div class="name">谢 &nbsp; &nbsp;俊</div>
        <div class="desc">整形界时尚美鼻王子、丽港丽格整形美容院长 <br>综合鼻整形领军人物  <br>中国鼻部整形专家 <br>中国东方动态美鼻整形倡导者 <br>中国医学会整形外科分会会员 <br>鼻整形学组委员 <br>谢氏综合俊俏美鼻开创者</div>
    </div>
    <div style="height: 148px;width:100%;position: absolute;bottom: 0;left: 50%;">
        <div class="special">擅长项目</div>
        <div style="margin-top: 5px;color: white">写实鼻综合、眼综合、自体脂肪填充、动感丰胸、水动力吸脂。</div>
        <div style="margin-top: 5px"><a href=""><img src="<?php echo get_template_directory_uri();?>/images/lijizixun.png" alt="" width="90" height="27"></a><a href=""><img src="<?php echo get_template_directory_uri();?>/images/yuyue.png" alt="" width="90" height="27" style="margin-left: 10px"></a></div>
    </div>
</div>
<?php
} else if(is_page("pj")){
?>
<style>
        .top{
            width:100%;
            height:463px;
            position: relative;
        }
        .img{
            background-size:contain;
            width:100%;
            height: auto;
        }
        .bottom{
            width:100%;
            height:100%;
            position: relative;
        }
        .name{
            height:25px;
            font-size:25px;
            font-family:SourceHanSansCN-Bold;
            color:rgba(51,51,51,1);
            line-height:25px;
            margin-bottom: 20px;
        }
        .special{
            border: 1px dashed #FFFFFF;
            font-size: 12px;
            width: 60px;
            background-color: #6F6C69;
            text-align: center;
            color: #FFFFFF;
        }
    </style>
<div class="top">
    <img src="<?php echo get_template_directory_uri();?>/images/pengjingshang.png" alt="" class="img">
    <div style="height: 116px;width:100%;opacity: 0.33;background: #7B7369;position: absolute;top: 75%;">
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">彭   静 / 整形科主任</div>
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">[五官精雕 | 资深整形美容]</div>
    </div>

</div>
<div class="bottom">
    <img src="<?php echo get_template_directory_uri();?>/images/pengjingxia.png" alt="" class="img">
    <div style="height: 224px;width:100%;position: absolute;top: 10%;left: 50%;margin-bottom: 10px">
        <div class="name">彭 &nbsp; &nbsp;静</div>
        <div class="desc">整形科主任、面部五官精雕大师、资深整形美容医师 <br>综合鼻整形领军人物  <br>资深整形美容医师
            中华医学会整形美容分会会员 <br>中国医师协会美容与整形分会会员 <br>中国医学会整形外科分会会员 <br>广东省医学美容整形外科分会会员
            <br>深圳医学会美容整形外科分会会员<br>中美韩整形美容国际医师成员
        </div>
    </div>
    <div style="height: 148px;width:100%;position: absolute;bottom: 0;left: 50%;">
        <div class="special">擅长项目</div>
        <div style="margin-top: 5px;color: white">面部五官精雕（韩式综合美眼、东方达拉斯鼻整形、下颌精雕等）、自体脂肪填充、多维吸脂塑形、乳房整形、<br>注射抗衰老、面部提拉、微创腋臭除术、私密手术。</div>
        <div style="margin-top: 5px"><a href=""><img src="<?php echo get_template_directory_uri();?>/images/lijizixun.png" alt="" width="90" height="27"></a><a href=""><img src="<?php echo get_template_directory_uri();?>/images/yuyue.png" alt="" width="90" height="27" style="margin-left: 10px"></a></div>
    </div>
</div>
<?php
}else if(is_page('yrx')){
?>
<style>
        .top{
            width:100%;
            height:463px;
            position: relative;
        }
        .img{
            background-size:contain;
            width:100%;
            height: auto;
        }
        .bottom{
            width:100%;
            height:100%;
            position: relative;
        }
        .name{
            height:25px;
            font-size:25px;
            font-family:SourceHanSansCN-Bold;
            color:white;
            line-height:25px;
            margin-bottom: 20px;
            text-align: center;
        }
        .namedesc{
            text-align: center;
            color: #FFFFFF;
            line-height: 50px;
        }
        .desc{
            line-height: 30px;
            margin-left: 40px;
            margin-right: 40px;
            color: #ffffff;
        }
        .special{
            border: 1px dashed #FFFFFF;
            font-size: 12px;
            width: 60px;
            background-color: #6F6C69;
            text-align: center;
            color: #FFFFFF;
        }
    </style>
<div class="top">
    <img src="<?php echo get_template_directory_uri();?>/images/yirenxiangshang.png" alt="" class="img">
    <div style="height: 116px;width:100%;opacity: 0.33;background: #7B7369;position: absolute;top: 75%;">
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">易仁祥 / 副主任医师</div>
        <div style="text-align: center;font-size: 25px;color: white;margin-top: 15px;line-height: 25px">［光子美容技术｜激光美容技术｜注射美容技术］</div>
    </div>

</div>

<div class="bottom">
    <img src="<?php echo get_template_directory_uri();?>/images/yirenxiangxia.png" alt="" class="img">
    <div style="position: absolute;top: 10%;left: 25%;margin-bottom: 10px;right: 25%;">
        <div class="name">易仁祥</div>
        <div class="namedesc">皮肤美容权威专家 I 皮肤美容科主任 I 医学美容主诊医师</div>
        <div class="desc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;毕业于湖南医科大学,从事皮肤美容临床工作20余年,曾任空军总医院激光整形美容科专家,在中国大陆最早开始临床应用光子美容技术,师从光子嫩肤技术发明人Patrik Bitter 博士(美国)和Goldman教授(美国)。 光子美容技术、激光美容技术及注射美容技术临床经验丰富。
        </div>
    </div>
    <div style="height: 148px;width:100%;position: absolute;bottom: 0;left: 25%;">
        <div class="special">权威项目</div>
        <div style="margin-top: 5px;color: white">三联疗法痤疮综合治疗、黄褐斑诊治、面部年轻化、激光美容、中西医结合治疗常见皮肤病,对湿疹、<br>银屑病、白癜风、化妆品性皮炎等疑难皮肤病的治疗,效果显著。</div>

    </div>
    <div style="position: absolute;top: 90%;left: 45%;margin-bottom: 10px;right: 25%;"><a href=""><img src="<?php echo get_template_directory_uri();?>/images/lijizixun.png" alt="" width="90" height="27"></a><a href=""><img src="<?php echo get_template_directory_uri();?>/images/yuyue.png" alt="" width="90" height="27" style="margin-left: 10px"></a></div>
</div>
<?php
}
?>