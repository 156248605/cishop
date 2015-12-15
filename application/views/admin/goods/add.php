<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/basic.css">
    <link rel="stylesheet" href="/admin/style/goods.css">
    <script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/public/js/goods.js"></script>
    <script type="text/javascript" src="/public/js/ckeditor/ckeditor.js"></script>
    <title>在线商城后台管理</title>
</head>
<body>
<h2><a href="?a=goods">返回商品列表</a>商品 -- 添加商品</h2>

<form method="post" action="?a=goods&m=add">
    <dl class="form">
        <dd>商品类型:<select name="nav">
                    <option value="0" select="selected">--请选择一个商品类型--</option>
                         <?php foreach ($addNav as $key=>$value):?>
                          <optgroup label="<?php echo $value['name'];?>">
                             <?php if (isset($value['child'])):?>
                                  <?php foreach($value['child'] as $k=>$v):?>
                                  <option value="<?=$k?>"><?=$v?></option>
                                  <?php endforeach;?>
                             <?php endif;?>
                          </optgroup>
                        <?php endforeach;?>
                    </select><span class="red">[必填]</span>
        </dd>
          <dd>商品品牌:<select name="brand">
              <option value="0" select="selected">--请选择一个商品品牌--</option>
                     </select><span class="red">[必填]</span>
          </dd>
        <dd>
            <textarea name="editor1" id="editor1">&lt;p&gt;Initial editor content.&lt;/p&gt;</textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
        </dd>
    </dl>



</form>
</body>
</html>