<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/basic.css">
    <link rel="stylesheet" href="/public/admin/style/goods.css">
    <title></title>
</head>
<body>
<h2><a href="/goods/add">添加商品</a>商品--商品列表</h2>
<div id="list">
    <table>
         <tr><th>商品名称</th><th>商品编号</th><th>商品售价</th><th>商品类型</th><th>品牌</th><th>是否上架</th><th>库存</th><th>操作</th></tr>
          <?php foreach ($AllGoods as $key=>$value): ?>
            <tr><td><?=$value['name']?></td><td><?=$value['sn']?></td><td><?=$value['price_sale']?></td><td><?=$value['nav_name']?></td><td><?=$value['brand']?></td></tr>
         <?php endforeach;?>
    </table>
</div>
</body>
</html>