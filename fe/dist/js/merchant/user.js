$(function(){

  var Popup = window.Popup,
      baseForm = $('#J_form'),
      baseInput = baseForm.find('input');

  var setDomHeight = window.setDomHeight;
  new setDomHeight('#J_form',290)
  .css('overflow','hidden')
  .myScrollbar();

  // 触发新增用户
  var addUserPopup = new Popup('#J_card_add_user',{
    onOk: function(popup){
      popup.close();
    },
    beforeOpen: function(popup){
      baseForm[0].reset();
      $('.def-image').html('');
    }
  });
  $('#J_add_user').click(function(){
    addUserPopup.open();
    // 用户头像上传
    upload('#userPicker','/fe/upload/file_upload.php',function(file){
      console.log(file);
    });
  });
  checkForm(baseForm,baseInput,function(){
    addUserPopup.close();
    addUserTipPopup.open();
  });

  // 新增用户提交成功
  var addUserTipPopup = new Popup('#J_card_add_user_tips',{
    onOk: function(popup){
      popup.close();
    }
  });

  checkForm(baseForm,baseInput,function(datas,form){
    addUserPopup.close();
    addUserTipPopup.open();
  });

  // 触发编辑用户
  var editForm = $('#J_form_edit'),
      editInput = editForm.find('input');
  var editUserPopup = new Popup('#J_card_edit_user',{
    onOk: function(popup){
      popup.close();
    },
    beforeOpen: function(popup){
      editForm[0].reset();
    }
  });
  $('#main').on('click','.link-edit',function(){
    editUserPopup.open();
  });

  // 编辑用户提交成功
  var editUserTipPopup = new Popup('#J_card_edit_user_tips',{
    onOk: function(popup){
      popup.close();
    }
  });

  checkForm(editForm,editInput,function(datas,form){
    editUserPopup.close();
    editUserTipPopup.open();
  });

  $('.button-cancel').click(function(){
    dialog.alert('该用户的密码已经重置');
  });



  // 停用用户
  var stopUserTipPopup = new Popup('#J_card_stop_user_tips',{
    onOk: function(popup){
      popup.close();
      dialog.alert('该用户被停用了')
    }
  });
  $('#main').on('click','.link-stop',function(){
    stopUserTipPopup.open();
  });

  // 启用用户
  var startUserTipPopup = new Popup('#J_card_start_user_tips',{
    onOk: function(popup){
      popup.close();
      dialog.alert('该用户两天后将被启用')
    }
  });
  $('#main').on('click','.link-start',function(){
    startUserTipPopup.open();
  });





});
