<!--
╔═════════════════════════════════════════════════════════════════════════════════════════════════════
║title: Gong_cx 开源导航源码
║Gong_cx 导航站源码 v0.1-rc1-beta
║1. 代码共计487行（包含注释）
║2. 代码为PHP+HTML5+CSS+部分js。
║3. 代码开源选用的开源协议为MIT。
║4. 代码引用：蓝星计划、Particles.js、Sweetalert2
║那么，好好享用这份开源的版本吧~请尽情的发挥魔改能力！
╚═════════════════════════════════════════════════════════════════════════════════════════════════════
-->

<?php
    @header("content-Type: text/html; charset=utf-8");
    date_default_timezone_set('Asia/Shanghai');
    $time= date('Y-m-d H:i:s',time());
    //割~~~~~~~~~~~~~~~
    global $ip;
    if (getenv("HTTP_CLIENT_IP"))
    $ip = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
    $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("REMOTE_ADDR"))
    $ip = getenv("REMOTE_ADDR");
    else
    $ip = "Unknown";
?>
<!DOCTYPE html>
<html lang="en">
	<!-- 如果你想使用自定义背景色，请在下面设置 -->
<head>
    <style>
    .footer {
    color: #222222;
    font-size: 11px;
    line-height: 20px;
    text-align: center;
    width: 100%;
    position: absolute;
    bottom: 0; 
	    a:link {text-decoration:none; color:#111111;} /* 未点击状态时显示为较黑色 */
	    a:visited {color:#0099FF;} /*用户已访问过的链接显示蓝色*/
	    a:hover {text-decoration:underline; color:#111111;}   /* 鼠标放置在链接上时显示为较黑色并出现下划线 */
	    body{
		font-family: Source Sans Pro, sans-serif, arial, "Hiragino Sans GB";
                width: 100%;
                height: 100%;
                background-size: 100%;
                background-attachment: fixed;
                z-index: 1;
		bgcolor:'#FFFFFF';     /* 可以在此处输入16进制颜色代码，或使用 black 这种单词 /*
		    /* background:'http://example.com/example.png'; */ /* 此处可以使用图片文件作为背景，支持本地与远程地址 */
		    /* background：liner-gradient(#C6FFDD,#fbd786) */ /* 渐变色awa */
	    }
</style>
	<style>
.container .box .img{
    width: 100px;
    height: 100px;
    box-shadow: 18px 18px 30px rgba(0, 0, 0, 0.1),
    -18px -18px 30px rgba(255, 255, 255, 1);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #efeeee; /* 调整站点图标框的颜色（调整一个则统一修改，后续提供每个单独修改） */
    transition: box-shadow .2s ease-out;
    position: relative;
}
		</style>
	
 <!-- 提醒用户进行浏览器更新（不必要，可不启用） -->
    <!--<script>
var $buoop = {vs:{i:10,f:68,o:44,s:8,c:57},unsecure:true,api:4};
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
</script>-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hpcss.css">
    <link rel="stylesheet" href="css/boxcss.css">
    <link rel="stylesheet" href="css/in.css">
	<!-- 站点图标（可使用本地） -->
    <link rel="shortcut icon" href="https://example.com/example.ico" />
	<!-- 飘花特效（默认推荐） -->
    <script src="js/flower.js"></script>
	<!-- 引用 Particles.js 库 -->
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

     <!-- 引入自定义鼠标指针，可不开启 -->
	<!--<style>
*{cursor:url(cursor/20_arrow.cur),auto !important;}
input:focus,textarea:focus{cursor:url(cursor/20_ibeam.cur),auto !important;}
a:hover,a:active,a:visited,a *,a *:hover,a *:active,a *:visited,button,button *,select,input[type="file"]{cursor:url(cursor/20_hand.cur),auto !important;}
.flb,.tb_s,.sllt{cursor:url(cursor/20_sizeall.cur),auto !important;}
.flbc,#fastsmilies img,#smiliesdiv_table img,#fastpostsmiliesdiv_table img,#fastpostforecolor_menu input,#e_forecolor_menu input,#e_backcolor_menu input{cursor:url(cursor/20_hand.cur),auto !important;}
</style>-->
    <title>Gong_cx 导航站源码</title>
	<meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--👆👆移动端适配-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <!--👆👆移动端适配-->
    <meta name="googlebot">
    <!--👆👆google 爬虫-->
    <meta name="robots" content="max-snippet:-1">
    <!--👆👆摘要没有字符数限制-->
    <meta name="google" content="notranslate">
    <!--👆👆其实咱不需要Google translate...-->
    <meta name="google" content="nopagereadaloud">
    <!--👆👆其实咱不需要Google的阅读...-->
    <script src="js/title.js"></script>
    <!--👆👆title滚动js-->
    <script src="js/mobile-font.js"></script>
    <!--👆👆移动端适配js 字体自动随网页布局调整，以设置好rem-->
</head>
<body>
	<div id="body-shang">
	    <link rel="stylesheet" type="text/css" href="css/haohanyh-mofang-tencentcloud.css">
    <!--👆👆仿写腾讯云的title设计。-->
    <link rel="stylesheet" type="text/css" href="css/tooltip.css">
    <!--👆👆主页彩蛋tooltip-->
	<!-- （选择启用）雪花动画效果全部代码，如需启用请删除注释 -->
	<!-- <div id="snow"></div> -->
	<!-- <script>
particlesJS('snow', {"particles":{"number":{"value":104,"density":{"enable":true,"value_area":800}},"color":{"value":"#fff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":10,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":500,"color":"#ffffff","opacity":0.4,"width":2},"move":{"enable":true,"speed":3,"direction":"bottom","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":0.5}},"bubble":{"distance":400,"size":4,"duration":0.3,"opacity":1,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>  -->
	<!-- <style>
     #snow {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: -1;
        pointer-events: none;
        transition: filter .5s ease;
    }
    html.darkmode #snow{
        filter: invert(0.3);
    }
</style> -->
<!-- 播放指定音乐（不必要） -->
    <!--<audio autoplay="autoplay" loop="true" hidden="true">
    <source src="https://example.com/example.mp3" />
    </audio>-->

    <div class="container">
        

        <!-- 从v0.1-beta版本开始，完全重写跳转方式，如果要编辑跳转到什么站点请看底部 JS -->
        <div class="box">
            <div class="img">
			<!-- 跳转至站点 -->
                <a onclick="link1();" target="_blank">
				<!-- 站点图标 后续以此类推 -->
                    <img src="https://example.com/example.png">
                </a>
            </div>
            <p>站点名称</p>
        </div>
         <div class="box">
            <div class="img">
                <a onclick="link2();" target="_blank">
                    <img src="https://example.com/example.png">
                </a>
            </div>
            <p>站点名称2</p>
        </div>
         <div class="box">
            <div class="img">
			<!-- 此处为可显示信息内容，详细显示内容在下面部署，如需多个站点均需要显示信息内容，则将对应的 msgbox 加以修改 -->
                <a onclick="msgbox1();"> /* 详细内容编辑请看底部 JS */
                    <img src="https://example.com/example.png">
                </a>
            </div>
            <p>站点名称3</p>
        </div>
    <br>
    
<!-- 下列所有内容与上面保持一致格式 -->
    <div class="container">
        
        <div class="box">
            <div class="img">
                <a onclick="link3();" target="_blank">
                    <img src="https://example.com/example.png">
                </a>
            </div>
            <p>站点名称4</p>
        </div>
         <div class="box">
            <div class="img">
                <a onclick="link4();" target="_blank">
                    <img src="https://example.com/example.png">
                </a>
            </div>
            <p>站点名称5</p>
        </div>
         <div class="box">
            <div class="img">
                <a onclick="link5();" target="_blank">
                    <img src="https://example.com/example.png">
                </a>
            </div>
            <p>站点名称6</p>
        </div>
    </div>
	<!-- 页尾 -->
    <div class="footer"><!-- 如果你备案了请将此处注释符删去并添加您的备案号 --><!-- <p><a href="http://beian.miit.gov.cn/">某地区ICP备XXXXXXXXXX号-1 </a></p><br />-->
                <div class="haohanyh-nav-top-links">
                    <a onclick="author();" class="haohanyh-nav-top-link" title="关于作者" style="font-size:16px;">关于作者</a>
                    <a onclick="disclaimer();" title="免责申明" class="haohanyh-nav-top-link" style="font-size:16px">免责申明</a>
                    <div class="ip-address">
                    <?php echo "<p onclick=\"goto_ip()\" style=\"margin-top: 1.325rem;font-size:1em;font-weight:500;color:#338fff \">" . "您于北京时间" . date("Y-m-d l H:i:s") . '，'  . "您的IP是:" . $ip . "</p>";?>
                    </div>
                </div></div>
<!-- 鼠标点击特效 -->
<script src="js/d.js"></script>
<!-- 阻止用户使用 F12（可不启用） -->
<!--<script src="js/no-F12.js"></script>-->
		<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/themes@5.0.1/borderless/borderless.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9" aria-hidden="true"></script>
        <script type="text/javascript" aria-hidden="true">

            function link1() {
                Swal.fire({
                    html: '<h4>在这里写上站点名称或信息</h4>',
                    imageUrl: 'http://example.com/example.png', <!-- 在这里可以放站点图标 -->
                    imageWidth: 25,
                    imageHeight: 25,
                    imageAlt: 'Haohanyh',
                    showCancelButton: true,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: '我要去康康.', <!-- 可修改文案 -->
                    confirmButtonColor: '#338fff',
                    cancelButtonText: '还是不了.', <!-- 可修改文案 -->
                    cancelButtonColor: '#FF0033'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open("http://example.com/", "_blank"); <!-- 跳转到的地址 -->
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Ooops(#_<-)',
                            '肥肠抱歉......(。﹏。*)', <!-- 可修改文案 -->
                            'error'
                        )
                    }
                })
            }
<!-- 后续以此类推 -->
            function link2() {
                Swal.fire({
                    html: '<h4>在这里写上站点名称或信息</h4>',
                    imageUrl: 'http://example.com/example.png', <!-- 在这里可以放站点图标 -->
                    imageWidth: 25,
                    imageHeight: 25,
                    imageAlt: 'Haohanyh',
                    showCancelButton: true,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: '我要去康康.',
                    confirmButtonColor: '#338fff',
                    cancelButtonText: '还是不了',
                    cancelButtonColor: '#FF0033'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open("http://example.com", "_blank"); <!-- 跳转到的地址 -->
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Ooops(#_<-)',
                            '肥肠抱歉......(。﹏。*)',
                            'Error 发生了错误.....'
                        )
                    }
                })
            }
            
            function link3() {
                Swal.fire({
                    html: '<h4></h4>',
                    imageUrl: 'http://example.com/example.png',
                    imageWidth: 25,
                    imageHeight: 25,
                    imageAlt: 'Haohanyh',
                    showCancelButton: true,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: '我要去康康~.', <!-- 可修改文案 -->
                    confirmButtonColor: '#338fff',
                    cancelButtonText: '还是算了.', <!-- 可修改文案 -->
                    cancelButtonColor: '#FF0033'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open("http://example.com/", "_blank");
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Ooops(#_<-)',
                            '肥肠抱歉......(。﹏。*)', <!-- 可修改文案 -->
                            'Error 发生了错误'
                        )
                    }
                })

            }
            
            function link4() {
                Swal.fire({
                    html: '<h4></h4>',
                    imageUrl: 'http://example.com/example.png',
                    imageWidth: 25,
                    imageHeight: 25,
                    imageAlt: 'Haohanyh',
                    showCancelButton: true,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: '我要去康康~.', <!-- 可修改文案 -->
                    confirmButtonColor: '#338fff',
                    cancelButtonText: '还是算了.', <!-- 可修改文案 -->
                    cancelButtonColor: '#FF0033'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open("http://example.com/", "_blank");
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Ooops(#_<-)',
                            '肥肠抱歉......(。﹏。*)', <!-- 可修改文案 -->
                            'Error 发生了错误'
                        )
                    }
                })

            }
		            
            function link5() {
                Swal.fire({
                    html: '<h4></h4>',
                    imageUrl: 'http://example.com/example.png',
                    imageWidth: 25,
                    imageHeight: 25,
                    imageAlt: 'Haohanyh',
                    showCancelButton: true,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: '我要去康康~.', <!-- 可修改文案 -->
                    confirmButtonColor: '#338fff',
                    cancelButtonText: '还是算了.', <!-- 可修改文案 -->
                    cancelButtonColor: '#FF0033'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open("http://example.com/", "_blank");
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Ooops(#_<-)',
                            '肥肠抱歉......(。﹏。*)', <!-- 可修改文案 -->
                            'Error 发生了错误'
                        )
                    }
                })

            }
            function goto_ip() {
                Swal.fire({
                    html: '<?php echo "<p style=\"margin-top: 1.325rem;font-size:1em;font-weight:500;color:#338fff \">" . "您的IP是:" . $ip . "</p>";?>',
                    imageUrl: 'http://example.com/example.png', <!-- 放上你的站点图标 -->
                    imageWidth: 25,
                    imageHeight: 25,
                    imageAlt: 'Haohanyh',
                    showCancelButton: true,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: '谢谢.',
                    confirmButtonColor: '#338fff',
                    cancelButtonText: '好的.',
                    customClass: {
                        container: 'sweet_container',
                        popup: 'sweet_container',
                    }
                })
            }

            function msgbox1() {
                Swal.fire({
                    html: '<h2>在这里输入你想写的内容，例如为什么站点暂时不开通跳转</h2>',
                    imageUrl: 'http://example.com/example.png', <!-- 站点图标 -->
                    imageWidth: 25,
                    imageHeight: 25,
                    imageAlt: 'Haohanyh',
                    showCancelButton: true,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: '知晓了.',<!-- 可修改文案 -->
                    confirmButtonColor: '#338fff',
                    cancelButtonText: '为什么呢?',<!-- 可修改文案 -->
                    cancelButtonColor: '#FF0033'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Thanksヾ(^▽^*)))',
                            '感谢你的谅解',<!-- 可修改文案 -->
                            'success'
                        )
                        // For more information about handling dismissals please visit
                        // https://sweetalert2.github.io/#handling-dismissals
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            '抱歉',
                            '目前XXX站点，维护人员极少，上线功能就会变慢。',<!-- 可修改文案 -->
                            'error'
                        )
                    }
                })
            }

            function disclaimer() {
                Swal.fire(
                    {
                    html: '<p>感谢访问本站!<br>本站用户服务协议 <br><a style="margin-top: 1.325rem;font-size:1em;font-weight:500;color:#338fff" href="https://gitee.com/blue-star-project">本站引用蓝星计划部分代码</a><br><p style="font-size:8px">本人旗下网站和等服务，均严格遵守《中华人民共和国网络安全法》《深圳经济特区数据条例》（本人旗下网站和等服务不会以任何形式收集敏感信息和大数据分析，并在遵守情况下最大限度公开用户上传数据）《中华人民共和国香港特别行政区维护国家安全法》和中华人民共和国澳门特别行政区《网络安全法》</p>',
                    imageUrl: 'http://example.com/example.png', <!-- 你的站点Logo -->
                    imageWidth: 25,
                    imageHeight: 25,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: 'OK, Thanks.',
                    confirmButtonColor: '#338fff',
                    customClass: {
                        container: 'sweet_container',
                        popup: 'sweet_container',
                    }
                })
            }
		function author() {
                Swal.fire(
                    {
                    html: '<p>本站使用开源源码：<a style="margin-top: 1.325rem;font-size:1em;font-weight:500;color:#338fff" href="https://github.com/Gongcxgithub/navigation">Navigation</a><br>项目作者：<a style="margin-top: 1.325rem;font-size:1em;font-weight:500;color:#338fff" href="https://www.gcxstudio.cn">Gong_cx</a><br><a style="margin-top: 1.325rem;font-size:1em;font-weight:500;color:#338fff" href="mailto:dinosaur@gcxstudio.cn">联系邮箱：dinosaur@gcxstudio.cn</a></p>',
                    imageUrl: 'http://example.com/example.png',
                    imageWidth: 25,
                    imageHeight: 25,
                    showCloseButton: true,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    confirmButtonText: 'OK, Thanks.',
                    confirmButtonColor: '#338fff',
                    customClass: {
                        container: 'sweet_container',
                        popup: 'sweet_container',
                    }
                })
            }
        </script>
    <!--👇👇移动端适配js 字体自动随网页布局调整，以设置好rem-->
    <script>
        'use strict';
        (function (doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function () {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    docEl.style.fontSize = clientWidth / 2640 * 1 + "rem";
                };
            // 不支持addEventListener,返回
            if (!doc.addEventListener) return;
            // 监听事件，获取当前html标签的字体大小
            win.addEventListener(resizeEvt, recalc, false);
            // dom内容加在完成事件
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
    </script>
</body>
</html>
