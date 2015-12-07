<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=base_url('/public/css/basic.css')?>">
    <link rel="stylesheet" href="<?=base_url('/public/admin/style/brand.css')?>">
    <title></title>
</head>
<body>
<h2><a href="/brand/add">添加品牌</a>商品--品牌列表</h2>

<div id="list">
    <table>
        <tr><th>品牌名称</th><th>官方网站</th><th>品牌简介</th><th>操作</th></tr>
         <?php foreach($AllBrand as $key=>$value):?>
        <tr><td><?php echo $value['name'];?></td><td><?php echo $value['url'];?></td><td><?php echo $value['info'];?></td><td><a href="/brand/update?id=<?php echo $value['name'];?>"><img src="/public/images/edit.gif" alt="编辑" title="编辑" /></a> <a href="/brand/delete?id=<?=$value['id']?>" onclick="return confirm('你真的要删除这个品牌吗？') ? true : false"><img src="/public/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
       <?php endforeach;?>
      <!--  <tr><td colspan="4">没有任何品牌</td></tr>-->
    </table>
</div>
<div id="page"><?php echo $this->pagination->create_links();?></div>
</body>
</html>