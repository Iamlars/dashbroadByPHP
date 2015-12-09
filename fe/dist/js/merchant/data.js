
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

   // 图片上传 /upload/file_upload

   // 上传头像
   upload('#logoPicker','/fe/upload/file_upload.php',function(file){
     console.log(file);
   });

   // 上传营业执照
   upload('#passportPicker','/fe/upload/file_upload.php',function(file){
     console.log(file);
   });

});
