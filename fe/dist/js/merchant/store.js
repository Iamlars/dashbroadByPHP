$(function(){

  // DataTable
  var setTable = (function(){
    $('.data-table').DataTable( {
      "scrollY": $(window).height()-300,
      filter:false,
      sort:false,
      info:false,
      paging: false
    });

    var setDomHeight = window.setDomHeight;
    new setDomHeight('.dataTables_scrollBody',490)
    .css('overflow','hidden')
    .myScrollbar();

    // 强制触发dataTable的fixed header
    $(window).resize();
  }());

 // select2
  $.fn.select2 && $('select').select2({
     minimumResultsForSearch: Infinity
  });

  // 新增门店
  var addStore = (function(){

    var Popup = window.Popup,
        baseForm = $('#J_form'),
        baseInput = baseForm.find('input');

    // 触发新增门店
    var addStorePopup = new Popup('#J_card_add_store',{
      onOk: function(popup){
        popup.close();
      },
      beforeOpen: function(popup){
        var accountPopup = popup.popup;
        baseForm[0].reset();
      }
    });
    $('#J_add_store').click(function(){
      addStorePopup.open();
    });

    // 触发编辑门店
    var editForm = $('#J_form_edit'),
        editInputs = editForm.find('input'),
        editStoreId;

    var editStorePopup = new Popup('#J_card_edit_store',{
      onOk: function(popup){
        popup.close();
      },
      beforeOpen: function(popup){
        var accountPopup = popup.popup;
        editForm[0].reset();
        editInputs.removeAttr('readonly');
      }
    });

    $('#main').on('click','.link-edit',function(){
      editStorePopup.open();
      editStoreId = '门店全称测试数据1';

      // 模拟门店数据
      editInputs[0].value = '门店全称测试数据1';
      editInputs[1].value = '登录名测试数据1';
      // 待审核

      // 已审核，则登录名为只读
      editInputs.eq(1).attr('readonly','readonly');
    });

    $('.button-cancel').click(function(){
      dialog.alert('门店全称测试数据1的密码已经重置');
    });




    // 新增门店提交成功
    var addStoreTipPopup = new Popup('#J_card_add_store_tips',{
      onOk: function(popup){
        popup.close();
      }
    });

    checkForm(baseForm,baseInput,function(datas,form){
      addStorePopup.close();
      addStoreTipPopup.open();
    });

    // 编辑门店提交成功
    var editStoreTipPopup = new Popup('#J_card_edit_store_tips',{
      onOk: function(popup){
        popup.close();
      }
    });
    checkForm(editForm,editInputs,function(datas,form){
      editStorePopup.close();
      editStoreTipPopup.open();
    });

  }());



});
