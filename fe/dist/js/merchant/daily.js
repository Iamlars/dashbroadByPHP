$(function(){

  // DataTable
  var setTable = (function(){
    $('.data-table').DataTable( {
      "scrollY": $(window).height()-300,
      filter:false,
      sort:true,
      info:false,
      paging: false
    });

    var setDomHeight = window.setDomHeight;
    new setDomHeight('.dataTables_scrollBody',530)
    .css('overflow','hidden')
    .myScrollbar();

    // 强制触发dataTable的fixed header
    $(window).resize();
  }());


  $('#J_table_wrap').myScrollbar({
    axis:'x'
  });

  $.datetimepicker.setLocale('zh');
  $('.datetimepicker').datetimepicker({
    format: 'Y/m/d',
    timepicker:false
  });


  var Popup = window.Popup,
      baseForm = $('#J_form'),
      baseInput = baseForm.find('input');

  // 触发导出日报
  var exportPopup = new Popup('#J_card_export',{
    onOk: function(popup){
      popup.close();
    },
    beforeOpen: function(popup){
      baseForm[0].reset();
    }
  });
  $('#J_add_export').click(function(){
    exportPopup.open();
  });

  checkForm(baseForm,baseInput,function(datas,form){
    // ajax 成功的回调
    exportPopup.close();
  },function(){
    // 追加判断
    var timeStart = new Date(baseInput[0].value),
        timeEnd = new Date(baseInput[1].value);
    if(timeStart - timeEnd > 0){
      dialog.alert({
        inner: '结束日期不能小于开始日期',
        ok: function(){
          baseInput.eq(1).focus();
        }
      });
      return;
    }
    return true;
  });

  // 触发设置
  var settingForm = $('#J_form_setting'),
      settingInput = settingForm.find('input');

  var settingPopup = new Popup('#J_card_setting',{
    onOk: function(popup){
      popup.close();
    },
    beforeOpen: function(popup){
      settingForm[0].reset();
    }
  });
  $('#J_add_setting').click(function(){
    settingPopup.open();
  });

  checkForm(settingForm,settingInput,function(datas,form){
    settingPopup.close();
  },function(){
    var timeStart = new Date(settingInput[0].value),
        timeEnd = new Date(settingInput[1].value);
    if(timeStart - timeEnd > 0){
      dialog.alert({
        inner: '结束日期不能小于开始日期',
        ok: function(){
          settingInput.eq(1).focus();
        }
      });
      return;
    }
    return true;
  })


});
