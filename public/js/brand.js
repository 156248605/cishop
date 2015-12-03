$(function () {
    $('input[name=send]').on('click',function(){
        var user=$('input[name=name]').val();
        var url=$('input[name=url]').val();
        if (user == '') {
            alert('品牌名称不得为空！');
            $('input[name=name]').focus();
            return false;
        }
        if (user.length<2) {
            alert('品牌名称不得小于2位！');
            $('input[name=name]').focus();
            return false;
        }
        if (user.length>20) {
            alert('品牌名称不得大于4位！');
            $('input[name=name]').focus();
            return false;
        }
        if (url==''){
            alert('官方网站不得为空！');
             return false;
        }
        if (url.length>200) {
            alert('官方网站不得大于200位！');
            return false;
        }
        if (flag!=''){
            alert('导入名称被占用！');
            $('input[name=name]').focus();
            return false;
        }
        return true;
    });
    })