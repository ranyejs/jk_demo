<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>弹出函数</title>
    <!-- 引入外部js钉钉官方接口 -->
    <script src="http://g.alicdn.com/dingding/open-develop/1.6.9/dingtalk.js"></script>
    <!-- 引入刚刚写的js文件 -->

</head>
<body>
<button id="code" onclick="dd.ready()">获取授权码</button>
</body>
<script>
    dd.ready(function() {
        dd.runtime.permission.requestAuthCode({
            corpId : "ding306509fc9dc30d2d24f2f5cc6abecb85",
            onSuccess : function(result) {
                var code = result.code;
                alert('获取成功，你的免登code为：' + code);　　　　　　　　　　　　//将code 发往后台处理
            },
            onFail : function(err) {
                alert('出错了, 你获取了一个自定义错误' + err);
            }
        });

    });
</script>
</html>
