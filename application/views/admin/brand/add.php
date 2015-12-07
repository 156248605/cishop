<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=base_url('/public/css/basic.css')?>">
    <link rel="stylesheet" href="<?=base_url('/public/admin/style/brand.css')?>">
    <script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/public/js/brand.js"></script>
    <title>在线商城后台管理</title>
</head>
<body>
<h2><a href="/brand">返回品牌列表</a>商品 -- 添加品牌</h2>
<form method="post" name="add" action="/brand/add">
    <dl class="form">
        <dd>品牌名称：<input type="text" name="name" class="text" /> ( * 2-20位之间 ) <span class="red">[必填]</span></dd>
        <dd>官方网站：<input type="text" name="url" class="text" /> ( * 200字之内)</dd>
        <dd><span class="middle">品牌简介：</span><textarea name="info"></textarea> <span class="middle">( * 200位以内 )</span></dd>
        <dd><input type="submit" name="send" onclick="return addBrand();" value="新增品牌" class="submit" /></dd>
    </dl>
</form>
</body>
</html>