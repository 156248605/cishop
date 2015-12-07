<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/basic.css">
    <link rel="stylesheet" href="/public/admin/style/nav.css">
<!--    <script type="text/javascript" src="view/admin/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="view/admin/js/nav.js"></script>-->
    <title>在线商城后台管理</title>
</head>
<body>
<h2><a href="/nav">返回导航条列表</a>商品 -- 添加导航</h2>
<form method="post" action="/nav/add">
    <input type="hidden" name="flag" id="flag" />
    <?php if (isset($OneNav)):?><input type="hidden" name="sid" value="<?=$OneNav[0]['id']?>" /><?php endif;?>
    <dl class="form">
        <?php if (isset($OneNav)):?>  <dd>主类名称：<?=$OneNav[0]['name'] ?></dd><?php endif;?>
        <dd>名 称：<input type="text" name="name" class="text" /> ( * 2-4位之间 )</dd>
        <dd><span class="middle">简 介：</span><textarea id="info" name="info"></textarea><span class="middle">( *200位以内)</span></dd>
        <dd><input type="submit" name="send" value="新增导航条" class="submit" /></dd>
    </dl>
</form>
</body>
</html>