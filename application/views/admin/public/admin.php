<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>在线商城后台管理</title>
    <link rel="stylesheet" href='<?=base_url('/public/css/basic.css')?>'>
    <link rel="stylesheet" href='<?=base_url('/public/admin/style/admin.css')?>'>
    <script type="text/javascript" src='<?=base_url('/public/js/jquery-2.1.4.min.js')?>'></script>
    <script type="text/javascript" src='<?=base_url('/public/js/iframe.js')?>'></script>
    <script type="text/javascript" src='<?=base_url('/public/js/channel.js')?>'></script>
</head>
<body>
<div id="header">
    <p>您好，{$admin.user}[{$admin.level}][<a href="?a=index">去首页</a>][<a href="?a=admin&m=logout">退出</a>]登录了</p>
    <ul>
        <li class="first"><a href="/admin/main" target="in">起始页</a></li>
        <li><a href="javascript:channel(0)">商品</a></li>
        <li><a href="javascript:channel(1)">订单</a></li>
        <li><a href="javascript:channel(2)">会员</a></li>
        <li><a href="javascript:channel(3)">系统</a></li>
    </ul>
</div>
<div id="sidebar">
    <dl style="display:block">
        <dt>商品</dt>
        <dd><a href="?a=nav" target="in">导航条列表</a></dd>
        <dd><a href="?a=goods" target="in">商品列表</a></dd>
        <dd><a href="?a=brand" target="in">品牌列表</a></dd>
    </dl>
    <dl style="display:none">
        <dt>订单</dt>
        <dd><a href="###">订单1</a></dd>
        <dd><a href="###">订单2</a></dd>
        <dd><a href="###">订单3</a></dd>
    </dl>
    <dl style="display:none">
        <dt>会员</dt>
        <dd><a href="###">会员1</a></dd>
        <dd><a href="###">会员2</a></dd>
        <dd><a href="###">会员3</a></dd>
    </dl>
    <dl style="display:none">
        <dt>系统</dt>
        <dd><a href="/manager/index" target="in">管理员列表</a></dd>
        <dd><a href="###">系统2</a></dd>
        <dd><a href="###">系统3</a></dd>
    </dl>
</div>
<div id="main">
    <iframe src="/admin/main" name="in"></iframe>
</div>
</body>
</html>