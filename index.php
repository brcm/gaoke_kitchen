<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>固件开发工具包 - 高恪</title>
    <link href="asset/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="t1">
        <img src="img/logo.png"/>
        <div class="t10">固件开发工具包 xRetia Labs</div>
    </div>
    <div class="t2">
        <div class="s1">
            <div class="s10" data-src="p1.html">欢迎</div>
            <div class="s10" data-src="fwEncode.html">固件加密</div>
            <div class="s10" data-src="fwDecode.html">固件解密</div>
            <div class="s10" data-src="http://www.gocloud.cn/bbs/">论坛</div>
            <div class="s10" data-src="poweroff.php">关机</div>
        </div>
        <div class="s2">
            <iframe id="s20" src="p1.html"></iframe>
        </div>
    </div>
    <script src="asset/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $('.s10').click(function() {
        $('.s10').removeClass('s10a');
        $(this).addClass('s10a');
        s20.src = $(this).attr('data-src');
    });
    </script>
</body>
</html>