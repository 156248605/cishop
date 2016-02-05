<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/basic.css">
    <link rel="stylesheet" href="/public/admin/style/goods.css">
    <link rel="stylesheet" type="text/css" href="/public/js/uploadify/uploadify.css">
    <script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/public/js/ckeditor/ckeditor.js"></script>
    <script  type="text/javascript" src="/public/js/uploadify/jquery.uploadify.min.js"></script>
    <title>在线商城后台管理</title>
    <style type="text/css">
        #file_upload{
            float: left;
            margin:10px 10px 0 0;
        }
    </style>
    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#file_upload').uploadify({
                'auto':false,
                'swf'      : '/public/js/uploadify/uploadify.swf',
                'uploader' : '/test/uploadifty',
                'buttonText': "选择图片",
                'formData'     : {
                    'timestamp' : '<?php echo $timestamp;?>',
                    'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                },
                'fileTypeDesc': "请选择图片文件",      //文件说明
                 'height' : 20,
                 'width' : 60,
             /*   'onUploadComplete': function (file) {
                },*/
                'onUploadSuccess' : function(file, data, response) {
                     $('#img_view').attr({"src":data,alt:'图片预览'});
                     $('#filename').val(data);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $("select[name='nav']").change(function() {
                var brand=document.getElementById('brand');
                var selected=$("select[name='nav'] option:selected").val();
               $.ajax({
                    type:"POST",
                    url:"/goods/getBrand",
                    data:{id:selected},
                   success:function(data){
                       var a = data.split(':');
                       brand.options.length = 1;
                       for (var i=0;i<a.length;i=i+2) {
                           brand.options.add(new Option(a[i+1], a[i]));
                       }
                   },
                });
            });
        });
    </script>
</head>
<body>
<h2><a href="?a=goods">返回商品列表</a>商品 -- 添加商品</h2>
<form method="post" action="/goods/add">
    <dl class="form" style="margin-left: 10px">
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
        <dd>商品品牌:<select name="brand" id="brand">
                <option value="0" select="selected">--请选择一个商品品牌--</option>
            </select><span class="red">[必填]</span>
        </dd>
        <dd>商品名称:<input type="text" name="name" class="text" /> <span class="red">[必填]</span> ( * 2-100字符之间 )</dd>
        <dd>商品编号:<input type="text" name="sn" class="text" /> <span class="red">[必填]</span> ( * 2-50字符之间，唯一 )</dd>
        <dd>销 售 价:<input type="text" name="price_sale" value="0" class="text small" /> 市 场 价：<input type="text" name="price_market" value="0"  class="text small" /> 成 本 价：<input type="text" name="price_cost" value="0"  class="text small" /> ( * 成本价不在前台显示 )</dd>
        <dd>关 键 字:<input type="text" name="keyword" class="text" /> ( * 例：纯棉|换季|白色；每个关键字用'|'隔开)</dd>
        <dd>计量单位:<input type="text" name="unit" class="text small" /> 重　　量：<input type="text" name="weight" value="0" class="text small" /> ( * 计量单位：个,kg,件；重量：默认kg)</dd>
        <dd>
           <input type="file"  name="file_upload" id="file_upload" style="float: left; margin:9px 10px 0 0;" /><a href="javascript:$('#file_upload').uploadify('upload', '*')">上传产品图</a> | <a href="javascript:$('#file_upload').uploadify('cancel')">取消</a>
            ( * 保存图片完整性，最佳尺寸为：300 * 300  必须是jpg,gif,png，并且200k内)
        </dd>
        <dd>
            <img id="img_view" src=""  alt=""/>
        </dd>
        <dd>
            <textarea name="content" id="content" ></textarea>
        </dd>
        <dd>是否上架：<input type="radio" name="is_up" value="1" checked="checked" />是 <input type="radio" name="is_up" value="0" />否　　免 运 费：<input type="radio" name="is_freight" value="1" checked="checked" />是 <input type="radio" name="is_freight" value="0" />否</dd>
        <dd>库　　存：<input type="text" name="inventory" value="100" class="text small" /> 库存告急：<input type="text" name="warn_inventory" value="1" class="text small" /> ( * 库存达到指定数量就会在后台提醒 )</dd>
        <input name="filename" type="hidden" id="filename" value="" />
   <!--     <input name="filesize" type="hidden" id="filesize" value="" />
        <input name="filetype" type="hidden" id="filetype" value="" />-->
        <dd><input type="submit" name="send" value="新增商品" /> <input type="reset" value="重置" /></dd>
    </dl>
</form>
<script  type="text/javascript">
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>