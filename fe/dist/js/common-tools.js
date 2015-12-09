
// 阻止默认事件
function stopDefault(e) {
    //阻止默认浏览器动作(W3C)
    if ( e && e.preventDefault ){
      e.preventDefault();
    }else{
      window.event.returnValue = false;
    }
}

// 弹出层位置计算
function setDomTop(selector,options){
  var obj = $(selector),
      ro = obj && obj[0].getBoundingClientRect(),
      Top = ro.top,
      Bottom = ro.bottom,
      Left = ro.left,
      Right = ro.right,
      Width = ro.width||Right - Left,
      Height = ro.height||Bottom - Top;
  obj.css('marginTop',Height*-0.5);
}

// 发送ajax
function sendAjax(form,options){
  $.ajax({
    type: form.attr('method'),
    url: form.attr('action'),
    data: form.serialize(),
    timeout: 3000,
    success: function(datas){
      options.success(datas);
    },
    error: function(error){
      options.error(error);
    }
  })
}

// 图片上传
function upload(fileDom,url,callback){
  if(!WebUploader){return}
  var formData = $(fileDom).data();
  var uploader = WebUploader.create({
      auto: true,
      swf: 'http://cdn.staticfile.org/webuploader/0.1.0/Uploader.swf',
      server: url,
      formData: formData || {},
      pick: {
        id: fileDom,
        multiple: false
      },
      accept: {
       title: 'Images',
       extensions: 'gif,jpg,jpeg,bmp,png',
       mimeTypes: 'image/*'
     }
  });

  // 当有文件添加进来的时候
   uploader.on( 'fileQueued', function( file ) {
       var $li = $('<div id="' + file.id + '" class="file-item thumbnail"><img></div>'),
           $img = $li.find('img');

       $(fileDom).prev('.def-image').html( $li );
       // 创建缩略图
       uploader.makeThumb( file, function( error, src ) {
           if ( error ) {
               $img.replaceWith('<span>不能预览</span>');
               return;
           }
           $img.attr( 'src', src );
       }, 150, 150 );
   });

   // 文件上传过程中创建进度条实时显示。
  uploader.on( 'uploadProgress', function( file, percentage ) {
      var $li = $( '#'+file.id ),
          $percent = $li.find('.progress span');

      // 避免重复创建
      if ( !$percent.length ) {
          $percent = $('<p class="progress"><span></span></p>')
                  .appendTo( $li )
                  .find('span');
      }

      $percent.css( 'width', percentage * 100 + '%' );
  });

  // 文件上传成功，给item添加成功class, 用样式标记上传成功。
  uploader.on( 'uploadSuccess', function( file ) {
      $( '#'+file.id ).addClass('upload-state-done');
  });

  // 文件上传失败，显示上传出错。
  uploader.on( 'uploadError', function( file ) {
      var $li = $( '#'+file.id ),
          $error = $li.find('div.error');

      // 避免重复创建
      if ( !$error.length ) {
          $error = $('<div class="error"></div>').appendTo( $li );
      }

      $error.text('上传失败');
  });

  // 完成上传完了，成功或者失败，先删除进度条。
  uploader.on( 'uploadComplete', function( file ) {
      $( '#'+file.id ).find('.progress').remove();
      callback && callback(file)
  });
}

// 提交表单的前端检测
function checkForm(form,inputs,callback,beforeAjax){
  form.on('submit',function(e) {
    stopDefault(e);
    var that = $(this);

    if(that.hasClass('loading')){
      return false;
    }
    that.addClass('loading');

    var allCheckd = true;
    $.each(inputs,function(i,n){
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

    if(!allCheckd){
      return;
    }

    that.removeClass('loading');


    // 如果有ajax发送前的判断条件，则条件正确后方可继续执行
    if(beforeAjax){
      beforeAjax() && callbackFunc();
    }else{
      callbackFunc();
    }

    function callbackFunc(){
      sendAjax(form,{
        success: function(data){
          var datas = data;
          if(typeof data !== 'object'){
            datas = $.parseJSON(data);
          }
          callback(datas,form);
        },
        error: function(){
          dialog.alert('与服务器连接失败，请稍后再试');
        }
      })
    }


  });
}

/*
 * MyDialog
*/
;(function(window,$,undefined){

  var MyDialog = function(){

    this.body = $('body');
    this.wrap = $('.my-dialog-wrap');
    this.dialog = $('.my-dialog');
    this.btnClose = $('.my-dialog-close');
    this.mask = $('.my-dialog-mask');
    this.header = $('.my-dialog-header');
    this.inner = $('.my-dialog-body');
    this.footer = $('.my-dialog-footer');
    this.settings = {
      title: '提示',
      inner: '我是弹窗的内容',
      showType: 'slideInDown',
      ok: $.noop,
      close: $.noop
    };
  };

  MyDialog.prototype = {
    constructor: 'MyDialog',
    alert: function(option){
      var that = this;
      var settings = that.getSettings(option);
      that.footer.html('<span type="ok" class="my-dialog-btn">确定</span>');
      that.bulid(settings);
      that.firm(settings,'alert');
      that.wrap.show();
    },
    confirm: function(option){
      var that = this;
      var settings = that.getSettings(option);
      that.footer.html('<span type="cancel" class="my-dialog-btn">取消</span><span type="ok" class="my-dialog-btn">确定</span>');
      that.bulid(settings);
      that.firm(settings);
      that.wrap.show();
    },
    getSettings: function(option){
      return ('string' === typeof option || 'number' === typeof option) ? $.extend({},this.settings,{inner: option}) : $.extend({},this.settings,option);
    },
    bulid: function(settings){
      var that = this;
      that.header.html(settings.title);
      that.inner.html(settings.inner);
      that.dialog.addClass(settings.showType);
    },
    firm: function(settings,type){
      var that = this;
      that.wrap.off('click.close').on('click.close','.my-dialog-close,.my-dialog-mask,.my-dialog-btn[type="cancel"]',function(){
        settings.close();
        that.close(settings);
      });
      that.wrap.off('click.ok').on('click.ok','.my-dialog-btn[type="ok"]',function(){
        settings.ok();
        if(type){
          settings.close();
        }
        that.close(settings);
      });

      that.body.off('keydown.ok').on('keydown.ok',function(e){
        if(e.which == 13){
          settings.ok();
          if(type){
            settings.close();
          }
          that.close(settings);
          return false;
        }
      });

      that.body.css('overflow','hidden');

    },
    close: function(settings){
      this.dialog.removeClass(settings.showType);
      this.wrap.hide();
    }
  };

  $(function(){
    window.dialog = new MyDialog();
  });

}(window,window.jQuery))

/*
 * Popup
*/

;(function(window,$,undefined){

  // 弹出层方法
  function Popup(selector,options) {
    this.popup = $(selector);
    this.closeBtn = this.popup.find('.close');
    this.okBtn = this.popup.find('.button-active');
    this.mask = $('.popup-mask');
    this.wrap = $('.popup-wrap');
    this.input = this.popup.find('input').eq(0);
    this.def = {
      beforeOpen: $.noop,
      afterOpen: $.noop,
      onOk: $.noop,
      onClose: $.noop
    };
    this.settings = $.extend({},this.def,options);
  }
  Popup.prototype.open = function(){
    this.settings.beforeOpen(this);
    this.wrap.show();
    this.popup.show();
    this.settings.afterOpen(this);
    this.doOk();
    this.doClose();
    this.input.focus();
    setDomTop(this.popup);
  };
  Popup.prototype.close = function(){
    this.wrap.hide();
    this.popup.hide();
    this.settings.onClose(this);
  };
  Popup.prototype.doClose = function(){
    var that = this;
    that.closeBtn.off('click').on('click',function(){
      that.close();
    });
    that.mask.off('click').on('click',function(){
      that.close();
    });
  };
  Popup.prototype.doOk = function(){
    var that = this;
    that.okBtn.off('click').on('click',function(){
      that.settings.onOk(that);
    });
  };
  $(function(){
    window.Popup = Popup;
  });
}(window,window.jQuery));


/*
 * setDomHeight
*/

;(function(window,$,undefined){

  // 动态计算主体高度
  function setDomHeight(selector,diff,scroll) {
    this.dom = $(selector);
    this.diff = diff;
    this.timer = null;
    this.setHeight();
    this.resize();
    return this.dom;
  }
  setDomHeight.prototype.setHeight = function(){
    var that = this;
    that.dom.css('height',that.getHeight()-that.diff);
  };
  setDomHeight.prototype.resize = function(){
    var that = this;
    $(window).resize(function(){
      clearTimeout(that.timer);
      that.timer = setTimeout(function(){
        that.setHeight();
      },200);
    })
  };
  setDomHeight.prototype.getHeight = function(){
    return $(window).height();
  };

  $(function(){
    window.setDomHeight = setDomHeight;
    new setDomHeight('#main',100);
     $.fn.myScrollbar && new setDomHeight('.scroll-body',290).myScrollbar();
  });
}(window,window.jQuery));



$(function(){
  // 美化滚动条
   $.fn.myScrollbar && $("#nav").myScrollbar();
  //  IE10 以下下执行placeholder
   $.fn.placeholder && $('input, textarea').placeholder();
});
