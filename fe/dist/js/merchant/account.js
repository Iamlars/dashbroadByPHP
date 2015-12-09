// 账户管理页面所用js

$(function(){

  var Popup = window.Popup,
      imgs = {},
      baseForm = $('#J_form'),
      baseInputs = baseForm.find('input'),
      editForm = $('#J_form_edit'),
      editInputs = editForm.find('input');

  // 开通账户
  var addAccountPopup = new Popup('#J_card_add_account',{
    onOk: function(popup){
      popup.close();
    },
    beforeOpen: function(popup){
      baseForm[0].reset();
    }
  });
  $('#main').on('click','.link-unactive',function(){
    var that = $(this),
        accountType = $(this).data('account');

    imgs.add = that.parents('tr').find('img').clone();
    addAccountPopup.open();
    addAccountPopup.popup.find('.popup-account-logo').html(imgs.add);

  });


  // 编辑账户
  var editAccountPopup = new Popup('#J_card_edit_account',{
    onOk: function(popup){
      popup.close();
    },
    beforeOpen: function(popup){
      editForm[0].reset();
    }
  });
  $('#main').on('click','.link-active',function(){
    var that = $(this),
        accountType = $(this).data('account');
    imgs.edit = that.parents('tr').find('img').clone();
    editAccountPopup.open();
    editAccountPopup.popup.find('.popup-account-logo').html(imgs.edit);
  });


  // 成功提示
  var addAccountPopupTips = new Popup('#J_card_add_account_tips',{
    onOk: function(popup){popup.close();}
  });
  var editAccountPopupTips = new Popup('#J_card_edit_account_tips',{
    onOk: function(popup){popup.close();}
  });

  checkForm(baseForm,baseInputs,function(datas,form){
    addAccountPopup.close();
    addAccountPopupTips.open();
    addAccountPopupTips.popup.find('.popup-account-logo').html(imgs.add);

  });
  checkForm(editForm,editInputs,function(datas,form){
    editAccountPopup.close();
    editAccountPopupTips.open();
    editAccountPopupTips.popup.find('.popup-account-logo').html(imgs.edit);
  });

});
