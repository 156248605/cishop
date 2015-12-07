<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/default/style/basic.css">
    <link rel="stylesheet" href="view/default/style/details.css">
    <title>在线商城系统</title>
    <script type="text/javascript" src="view/default/js/channel.js"></script>
</head>
<body>
{include file='default/public/header.html'}
<div id="sait">
    当前位置: <a href="./">首页</a>
    {foreach $FrontNav[0]->sait as $key=>$value}
    &gt; <a href="?a=list&id={$key}">{$value}</a>
    {/foreach}
</div>
<div id="sidebar">
   <h2>{$FrontNav[0]->name}</h2>
    <ul style="0 0 10px 0">
        {foreach $FrontNav[0]->child as $key=>$value}
        <li><a href="?a=list&id={$value->id}">{$value->name}<span class="gray">(1000)</span></a></li>
        {/foreach}
    </ul>
    <h2>当月热销</h2>
    <div style="0 0 10px 0">
       <dl style="border:none; ">
           <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
           <dd class="price">￥158.00</dd>
           <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
       </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <p><a href="###">查看更多</a></p>
    </div>
    <h2>浏览记录</h2>
    <div style="margin:0 0 10px 0">
        <dl style="border: none">
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <p><a href="###">查看更多</a> <a href="###">清空</a></p>
    </div>
</div>
<div id="main">
   <h2>春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</h2>
    <dl class="pic">
        <dt><a href="###"><img src="view/default/images/pro_details.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
        <dd>分享至:新浪微博 | 腾讯微博 | 人人网| 微信</dd>
    </dl>
    <dl class="text">
        <dd>售　　价:￥158.00</dd>
        <dd>售　　价:￥158.00</dd>
        <dd>售　　价:￥158.00</dd>
        <dd>售　　价:￥158.00</dd>
        <dd>售　　价:￥158.00</dd>
        <dd>售　　价:￥158.00</dd>
        <dd>售　　价:￥158.00</dd>
        <dd>售　　价:￥158.00</dd>
        <div><img src="view/default/images/buy.gif" alt="购买" title="购买" /><img src="view/default/images/collect.gif" alt="收藏" title="收藏" /></div>
    </dl>
    <div class="content">
        <ul>
            <li id="button1"  onclick="channel(1)" class="first">商品详情</li>
            <li id="button2"  onclick="channel(2)">评价列表</li>
            <li id="button3"  onclick="channel(3)">成交记录</li>
            <li id="button4"  onclick="channel(4)">售后服务</li>
        </ul>
        <div class="c1"  id="c1" style="display: block">
            商品详情
        </div>
        <div class="c2"  id="c2" style="display: none">
            评价列表
        </div>
        <div class="c3"  id="c3" style="display: none">
            成交记录
        </div>
        <div class="c4" id="c4" style="display: none">
            售后服务
        </div>
    </div>
</div>
</body>
</html>