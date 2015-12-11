<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=base_url('/public/css/basic.css')?>">
    <link rel="stylesheet" href='<?=base_url('/public/admin/style/nav.css')?>'>
    <title></title>
</head>
<body>

<h2><a href="/nav/add">添加导航</a>商品--导航条列表</h2>
<div id="list">
    <form method="post" action="/nav/sort">
        <table>
            <tr><th>名称</th><th>简介</th><?php if(isset($OneNav)):?><th>关联品牌</th><?php else:?><th>子类</th><?php endif;?><th>排序</th><th>操作</th></tr>
            <?php if (!empty($AllNav)):?>
            <?php foreach ($AllNav as $key=>$value): ?>
            <tr><td><?=$value['name']?></td><td><?=$value['info']?></td><td><?php if (isset($OneNav)): ?><?=$value['brand'] ?><?php else: ?><a href="/nav?sid=<?=$value['id']?>">查看</a> | <a href="/nav/add?id=<?=$value['id']?>">添加</a><?php endif;?></td><td><input type="text" name="sort[<?=$value['id']?>]" class="sort" value="<?=$value['sort']?>" /></td><td><a href="/nav/update&id=<?=$value['id']?>"><img src="/public/images/edit.gif" alt="编辑" title="编辑" /></a><a href="/nav/delete?id=<?=$value['id']?>" onclick="return confirm('你真的要删除这个导航吗？') ? true : false"><img src="/public/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
             <?php endforeach;?>
            <?php else:?>
            <tr><td colspan="5">没有任何导航</td></tr>
            <?php endif;?>
            <?php if (isset($AllNav)): ?><tr><td></td><td></td><td></td><td><input type="submit" name="send" value="排序" /></td><td></td></tr><?php endif; ?>
            <?php if (isset($OneNav)): ?><tr><td colspan="5">主类名称：[<?=$OneNav[0]['name']?>] <a href="/nav">[返回]</a></td></tr><?php endif; ?>
        </table>
    </form>
</div>
<div id="page"><?php echo $this->pagination->create_links();?></div>
</body>
</html>