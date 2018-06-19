(function () {
    var showMoreNChildren = function ($children, n) {
        //显示某jquery元素下的前n个隐藏的子元素
        var $hiddenChildren = $children.filter(":hidden");
        var cnt = $hiddenChildren.length;
        for (var i = 0; i < n && i < cnt ; i++) {
            $hiddenChildren.eq(i).delay(2000).show(1000);
        }
        return cnt - n;//返回还剩余的隐藏子元素的数量
    }

    jQuery.showMore = function (selector) {
        if (selector == undefined) { selector = ".showMoreNChildren" }
        //对页中现有的class=showMorehandle的元素，在之后添加显示更多条，并绑定点击行为
        $(selector).each(function () {
            var pagesize = $(this).attr("pagesize") || 10;
            var $children = $(this).children();
            if ($children.length > pagesize) {
                for (var i = pagesize; i < $children.length; i++) {
                    $children.eq(i).hide();
                }

                $("<div class='showMorehandle' >加载更多<i><img src='images/loading1.gif'></i></div>").insertAfter($(this)).click(function () {
                    if (showMoreNChildren($children, pagesize) <= 0) {
                        //如果目标元素已经没有隐藏的子元素了，就隐藏“点击更多的按钮条”
                        $(this).hide();
                    };
                    $('.showMorehandle img').show(100,function(){
                        $(this).delay(2500).hide(0);
                    });
                });
            }
        });
    }
})();// JavaScript Document

$(function () {
    $(".showMoreNChildren li img").delayLoading({
        defaultImg: "images/loading.jpg",    // 预加载前显示的图片
        errorImg: "",                        // 读取图片错误时替换图片(默认：与defaultImg一样)
        imgSrcAttr: "originalSrc",           // 记录图片路径的属性(默认：originalSrc，页面img的src属性也要替换为originalSrc)
        beforehand: 0,                       // 预先提前多少像素加载图片(默认：0)
        event: "scroll",                     // 触加载图片事件(默认：scroll)
        duration: "normal",                  // 三种预定淡出(入)速度之一的字符串("slow", "normal", or "fast")或表示动画时长的毫秒数值(如：1000),默认:"normal"
        container: window,                   // 对象加载的位置容器(默认：window)
        success: function (imgObj) { },      // 加载图片成功后的回调函数(默认：不执行任何操作)
        error: function (imgObj) { }         // 加载图片失败后的回调函数(默认：不执行任何操作)
    });
});