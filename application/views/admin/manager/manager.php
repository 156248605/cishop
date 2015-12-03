<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=base_url('/public/css/basic.css')?>">
    <link rel="stylesheet" href='<?=base_url('/public/admin/style/manager.css')?>'>
    <title></title>
</head>
<body>

<h2><a href="/manager/add">添加管理员</a>系统--管理员列表</h2>
<div id="list">
    <table>
        <tr><th>用户名</th><th>等级</th><th>登录次数</th><th>最后登录ip</th><th>最后登录时间</th><th>操作</th></tr>
        <?php foreach ($Allmanager as $key=>$value): ?>
        <tr><td><?php echo $value['user']?></td><td><?php echo $value['level']?></td><td><?=$value['login_count']?></td><td><?=$value['last_ip']?></td><td><?=$value['last_time']?></td><td><a href="/manager/update?&id=<?php echo $value['id']?>"><img src="/public/images/edit.gif" alt="编辑" title="编辑" /></a><a href="/manager/delete?&id=<?=$value['id']?>" onclick="return confirm('你真的要删除这个管理员吗？') ? true : false"><img src="/public/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
        <?php endforeach;?>
    </table>
</div>
<div id="page"><?php echo $this->pagination->create_links();?></div>
</body>
</html>