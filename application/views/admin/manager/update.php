<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/basic.css">
    <link rel="stylesheet" href="/public/admin/style/manager.css">
<!--    <script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/public/js/update.js"></script>-->
    <style type="text/css">
        body p{
            color: red;
            margin: 10px;
        }
    </style>
    <title>在线商城后台管理</title>
</head>
<body>
<?php echo validation_errors(); ?>
<h2><a href="/manager">返回管理员列表</a>系统 -- 修改管理员</h2>
<?php echo form_open('/manager/update')?>
<input type="hidden" name="flag" id="flag" />
<dl class="form">
    <input type="hidden" name="id" value='<?=$OneManager[0]['id']?>'>
    <dd>用 户 名：<?=$OneManager[0]['user']?></dd>
    <dd>密　　码：<input type="password" name="pass" class="text"  /> ( * 大于6位 )</dd>
    <dd>确认密码：<input type="password" name="notpass" class="text" /> ( * 同密码一致 )</dd>
    <dd>等　　级：<select name="level">
            <option value="0">--请选择一个等级权限--</option>
            <?php foreach($AllLevel as $key=>$value):?>
            <option value="<?=$value['id']?>"  <?php if($value['id']==$OneManager[0]['level']): ?> selected="selected" <?php endif;?> ><?=$value['level_name']?></option>
            <?php endforeach;?>
        </select> ( * 必须选定一个权限 )</dd>
    <dd><input type="submit" name="send"  value="修改管理员" class="submit" /></dd>
</dl>
</form>
</body>
</html>