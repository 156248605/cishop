<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1;url=<?php echo $url;?>" />
    <link rel="stylesheet" href="/public/css/basic.css">
    <link rel="stylesheet" href="/public/css/succ.css">
    <title>在线商城后台管理</title>
</head>
<body>
<h2>成功 -- 提示页</h2>

<div id="list" class="succ">
   <!-- {foreach $message as $key=>$value}
    <p>{$key+1}.{$value}</p>
    {/foreach}-->
    <p><?=$message?></p>
    <p><a href="<?=$url?>">[如果浏览器没有及时跳转，请点击这里]</a></p>
</div>
</body>
</html>