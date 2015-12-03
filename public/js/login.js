/**
 * Created by hugo.zhao on 2015/11/7.
 */
$(function(){
   $("input[type='submit']").on('click',function(){
       var name=$('#name').val();
       var pass=$("input[type='password']").val();
       var code=$('#code').val();
       if(name==''){
           alert('管理员姓名不能为空');
           return false;
       }
       if(pass==''){
           alert('管理员密码不能为空');
           return false;
       }
       if(code==''){
           alert('验证码不能为空');
           return false;
       }
    });

})
