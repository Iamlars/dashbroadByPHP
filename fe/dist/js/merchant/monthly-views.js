$(function(){

  // DataTable
  var setTable = (function(){
    $('.data-table').DataTable( {
      "scrollY": $(window).height()-700,
      // "scrollY": $(window).height()-480,
      filter:false,
      sort:false,
      info:false,
      paging: false
    });

    var setDomHeight = window.setDomHeight;
    new setDomHeight('.dataTables_scrollBody',710)
    // new setDomHeight('.dataTables_scrollBody',530)
    .css('overflow','hidden')
    .myScrollbar();

    // 强制触发dataTable的fixed header
    $(window).resize();
  }());


  // select2
   $.fn.select2 && $('select').select2({
      minimumResultsForSearch: Infinity
   });


   $('#J_table_wrap').myScrollbar({
     axis:'x'
   });

   $.datetimepicker.setLocale('zh');
   $('.datetimepicker').datetimepicker({
     format: 'Y/m/d',
     timepicker:false
   });

   var setDomHeight = window.setDomHeight;
   new setDomHeight('#J_form_report',150)
   .css('overflow','hidden')
   .myScrollbar();


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


   // 生成月报
   var reportForm = $('#J_form_report'),
       reportInput = reportForm.find('.datetimepicker'),
       reportCheckbox = reportForm.find('table :checkbox');

   // 触发月报开账
   var reportPopup = new Popup('#J_card_report',{
     onOk: function(popup){
       popup.close();
     },
     beforeOpen: function(popup){
       reportForm[0].reset();
     }
   });
   $('#J_add_report').click(function(){
     reportPopup.open();
   });



   // 因为不存在必填项，所以需要单独写验证方法
     reportForm.on('submit',function(e) {
       stopDefault(e);
       var that = $(this);

       if(that.hasClass('loading')){
         return false;
       }
       that.addClass('loading');

       var allCheckd = true;

       var checkedTr = reportForm.find(':checked').parents('tr');
       console.log(checkedTr.length)

       // 检测选中的月份是否已经选择了日期
       $.each(checkedTr.find('.datetimepicker'),function(i,n){
         var me = $(n),
             val = n.value,
             tip = me.data().tip;
         if( !$.trim(val) ){
           dialog.alert({
             inner: tip,
             close: function(){
               me.focus();
               that.removeClass('loading');
             }
           });
           allCheckd = false;
           return false;
         }
       });

       //检测选中的日期区间是否正确
       $.each(checkedTr,function(i,n){
         var me = $(n),
             inputs = me.find('.datetimepicker'),
             month = me.data().month,
             timeStart = new Date(inputs[0].value),
             timeEnd = new Date(inputs[1].value);
         if(timeStart - timeEnd > 0){
           dialog.alert({
             inner: month+'的结束日期不能小于开始日期',
             ok: function(){
               inputs.eq(1).focus();
             }
           });
           allCheckd = false;
           that.removeClass('loading');
           return;
         }
       });

       if(!allCheckd){
         return;
       }

       that.removeClass('loading');

       sendAjax(reportForm,{
         success: function(data){
           var datas = data;
           if(typeof data !== 'object'){
             datas = $.parseJSON(data);
           }
         },
         error: function(){
           dialog.alert('与服务器连接失败，请稍后再试');
         }
       });

     });


   // 全选月报
   $('#J_check_all').change(function(){
     var checked = $(this).prop('checked');
     reportCheckbox.prop('checked',checked)
   });



});
