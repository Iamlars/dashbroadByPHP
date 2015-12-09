// 用于处理table样式的js

$(function(){

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

  $.fn.select2 && $('select').select2({
     minimumResultsForSearch: Infinity
  });

});
