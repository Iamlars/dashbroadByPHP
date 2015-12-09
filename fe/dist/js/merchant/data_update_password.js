// 修改密码 js

$(function(){
  var baseForm = $('#J_form'),
      opwd = $('#origin-password'),
      newPwd = $('#new-password'),
      newPwdAgain = $('#new-password-again');

  baseForm.on('submit',function(e){
    stopDefault(e);

    var that = $(this);
    if(that.hasClass('loading')){
      return false;
    }
    that.addClass('loading')
    if( !$.trim(opwd.val()) ){
      dialog.alert({
        inner: '请输入原密码！',
        close: function(){
          opwd.focus();
          that.removeClass('loading')
        }
      });
      return false;
    }
    if( !$.trim(newPwd.val()) ){
      dialog.alert({
        inner: '请输入新密码！',
        close: function(){
          newPwd.focus();
          that.removeClass('loading')
        }
      });
      return false;
    }
    if( newPwd.val() !== newPwdAgain.val() ){
      dialog.alert({
        inner: '确认密码与新密码不一致！',
        close: function(){
          newPwdAgain.focus();
          that.removeClass('loading')
        }
      });
      return false;
    }

    that.removeClass('loading');

    sendAjax(baseForm,{
      success: function(datas){
        dialog.alert('表单提交成功');
      },
      error: function(){
        dialog.alert('与服务器连接失败，请稍后再试');
      }
    });

  });

});
