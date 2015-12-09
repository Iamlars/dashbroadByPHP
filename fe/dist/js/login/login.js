$(function(){
  var loginForm = $('#J_form'),
      loginInputs = loginForm.find('input');

  checkForm(loginForm,loginInputs,function(datas,form){
    if(datas.code === 0){
      window.location.href = datas.url;
    }else{
      dialog.alert(datas.info);
    }

  });

});
