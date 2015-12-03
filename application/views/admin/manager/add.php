<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/basic.css">
    <link rel="stylesheet" href="/public/admin/style/manager.css">
    <script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/public/js/manager.js"></script>
    <title>在线商城后台管理</title>
</head>
<body>
<h2><a href="/manager">返回管理员列表</a>系统 -- 添加管理员</h2>
<form method="post" action="/manager/add">
    <input type="hidden" name="flag" id="flag" />
    <dl class="form">
        <dd>用 户 名：<input type="text" name="user" class="text" /> ( * 2-20位之间 )</dd>
        <dd>密　　码：<input type="password" name="pass" class="text" /> ( * 大于6位 )</dd>
        <dd>确认密码：<input type="password" name="notpass" class="text" /> ( * 同密码一致 )</dd>
        <dd>等　　级：<select name="level">
                <option value="0">--请选择一个等级权限--</option>
                 <?php foreach($AllLevel as $key=>$value): ?>
                 <option value='<?=$value['id']?>'><?=$value['level_name']?></option>
                <?php endforeach;?>
            </select> ( * 必须选定一个权限 )</dd>
        <dd><input type="submit" name="send" value="新增管理员" class="submit" /></dd>
    </dl>
</form>
</body>
</html>