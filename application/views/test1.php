<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/public/js/uploadify/uploadify.css">
        <script  type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
        <script  type="text/javascript" src="/public/js/uploadify/jquery.uploadify.min.js"></script>
<!--    <script type="text/javascript" src="/public/js/ckeditor/ckeditor.js"></script>-->
    <title>测试</title>
    <script type="text/javascript">
        $(function() {
            $('#file_upload').uploadify({
                'auto':false,
                'swf'      : '/public/js/uploadify/uploadify.swf',
                'uploader' : '/test/uploadifty',
                'buttonText': "选择图片",
                'fileTypeDesc': "请选择图片文件",      //文件说明
//                'methond':'post',
//                'formData':{'someKey':$('#file_upload').val()},
                'onUploadComplete': function (file) {
                    alert('图片'+file.name+'上传成功.');
                }
            });
        });
    </script>
</head>
<body>
<img id="img"  src="" alt="" />
<input type="file" name="file_upload" id="file_upload" />
<a href="javascript:$('#file_upload').uploadify('upload', '*')">上传</a> | <a href="javascript:$('#file_upload').uploadify('cancel')">取消</a>



</body>
</html>