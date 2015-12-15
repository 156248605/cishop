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
                'swf'      : '/public/js/uploadify/uploadify.swf',
                'uploader' : '/public/js/uploadify/uploadify.php'
                // Your options here
            });
        });
    </script>
</head>
<body>
<input type="file" name="file_upload" id="file_upload" />



</body>
</html>