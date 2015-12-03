$(function() {
    //更新检查
    $('input[name=send]').on('click',function(){
        var pass=$('input[name=pass]').val();
        var notpass=$('input[name=notpass]').val();
        var level = $('select[name=level]').val();
        if (pass.length<6) {
            alert('管理员密码不得小于6位！');
            $('input[name=pass]').focus();
            return false;
        }
        if (pass != notpass ) {
            alert('管理员密码和确认密码必须保持一致！');
            $('input[name=pass]').focus();
            return false;
        }
        if (level==0){
            alert('管理员等级权限必须选择！');
            $('input[name=pass]').focus();
            return false;
        }
        return true;
    });









})
