<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/default/style/basic.css">
    <link rel="stylesheet" href="/public/default/style/list.css">
    <title>在线商城系统</title>
</head>
<body>
<?php $this->load->view('/default/public/header');?>
<div id="sait">
    当前位置: <a href="./">首页</a>
    <?php foreach($FrontNav[0]['sait'] as $key=>$value):?>
    &gt; <a href="?a=list&id={$key}"><?=$value?></a>
    <?php endforeach;?>
</div>
<div id="sidebar">
   <h2><?php echo $FrontNav[0]['name']; ?></h2>
    <ul style="0 0 10px 0">
        <?php if (!empty($FrontNav[0]['child'])):?>
        <?php foreach($FrontNav[0]['child'] as $key=>$value):?>
        <li><a href="?a=list&id={$value->id}"><?=$value['name']?><span class="gray">(1000)</span></a></li>
        <?php endforeach;?>
        <?php endif;?>
    </ul>
    <h2>当月热销</h2>
    <div style="0 0 10px 0">
       <dl style="border:none; ">
           <dt><a href="###"><img src="/public/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
           <dd class="price">￥158.00</dd>
           <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
       </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <p><a href="###">查看更多</a></p>
    </div>
    <h2>浏览记录</h2>
    <div style="margin:0 0 10px 0">
        <dl style="border: none">
            <dt><a href="###"><img src="/public/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <p><a href="###">查看更多</a> <a href="###">清空</a></p>
    </div>
</div>
<div id="main">
    <h2>商品筛选</h2>
     <div class="filter">
         <p>品牌:<span>全部</span> <a href="###">苹果</a> <a href="###">三星</a> <a href="###">索尼</a> <a href="###">小米</a> <a href="###">华为</a></p>
         <p>属性:<span>全部</span> <a href="###">属性1</a> <a href="###">属性2</a> <a href="###">属性3</a></p>
         <p>价格:<span>全部</span> <a href="###">100-500</a><a href="###"> 501-1000</a> <a href="###">1001-3000</a></p>
     </div>
    <h2>商品列表</h2>
    <div class="pro">
       <dl>
           <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
           <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
           <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
           <dd class="commend"><a href="###">已有34人评价</a></dd>
           <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
       </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="/public/images/pro_list_demo.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price"><strong>￥158.00</strong><del>￥258.00</del></dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">比较</a></dd>
        </dl>

    </div>
</div>
</body>
</html>