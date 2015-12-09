
// 资料管理页面js
$(function(){
  var baseForm = $('#J_form'),
      baseInputs = baseForm.find('textarea,input,select');
      // :input 选择器会把button计算在内

  checkForm(baseForm,baseInputs,function(datas,form){
    dialog.alert('表单提交成功');
  });

  // select2
   $.fn.select2 && $('select').select2({
      minimumResultsForSearch: Infinity
   });

});
