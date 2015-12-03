$(function () {
    $('input[name=send]').on('click',function(){
        var user=$('input[name=name]').val();
        var info = $('#info').val();
        var flag = $('input[name=flag]').val();
        if (user == '') {
            alert('导航名称不得为空！');
            $('input[name=name]').focus();
            return false;
        }
        if (user.length<2) {
            alert('导航名称不得小于2位！');
            $('input[name=name]').focus();
            return false;
        }
        if (user.length>4) {
            alert('导航名称不得大于4位！');
            $('input[name=name]').focus();
            return false;
        }
        if (info==''){
            alert('导航信息不得为空！');
            $('#info').focus();
             return false;
        }
        if (info.length>200) {
            alert('导航信息不得大于200位！');
            $('#info').focus();
            return false;
        }
        if (flag!=''){
            alert('导入名称被占用！');
            $('input[name=name]').focus();
            return false;
        }
        return true;
    });
    $('input[name=name]').on('blur',function(){
        $.ajax({
            type:"POST",
            url:"?a=nav&m=ajax",
            data:{name:$('input[name=name]').val()},
            success:function(data){
                if(data==1){
                    $('input[name=flag]').val('true');
                }else{
                    $('input[name=flag]').val('');
                }

            }
        });
    });
    })