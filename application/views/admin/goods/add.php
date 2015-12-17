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
</head>
<body>
<h2><a href="?a=goods">返回商品列表</a>商品 -- 添加商品</h2>

<form method="post" action="?a=goods&m=add">
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
        <dd>商品品牌:<select name="brand">
                <option value="0" select="selected">--请选择一个商品品牌--</option>
            </select><span class="red">[必填]</span>
        </dd>
        <dd>
           <input type="file"  name="file_upload" id="file_upload" style="float: left; margin:9px 10px 0 0;" /><a href="javascript:$('#file_upload').uploadify('upload', '*')">上传产品图</a> | <a href="javascript:$('#file_upload').uploadify('cancel')">取消</a>
            ( * 保存图片完整性，最佳尺寸为：300 * 300  必须是jpg,gif,png，并且200k内)
        </dd>
        <dd>
            <img id="img_view" src=""  alt=""/>
        </dd>
        <dd>
            <textarea name="editor1" id="editor1"></textarea>
        </dd>
        <input name="filename" type="hidden" id="filename" value="" />
        <input name="filesize" type="hidden" id="filesize" value="" />
        <input name="filetype" type="hidden" id="filetype" value="" />
    </dl>
</form>
<script  type="text/javascript">
    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>