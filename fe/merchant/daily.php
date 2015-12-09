<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-日报管理</title>
    <link rel="stylesheet" href="../lib/dateTimePicker/datepicker.css" charset="utf-8">
    <?php include '../shared/common_css.php';?>
    <link rel="stylesheet" href="../dist/css/tables.css" charset="utf-8">
  </head>
  <body>
    <div class="views">
      <?php include '../shared/nav.php';?>
      <div id="main-page">
        <?php include '../shared/header.php';?>
        <div id="main" class="account-main">
          <div class="main-header">
            <div class="main-title">
              日报管理
              <span class="header-total">(共有2511条日报)</span>
            </div>
            <div class="button-group">
              <span class="button button-normal button-active" id="J_add_setting">设置</span>
              <span class="button button-normal button-active" id="J_add_export">导出</span>
            </div>
          </div>
          <div class="main-body">
            <form action="">
              <div class="form-filter clearfix">
                <label class="filter-item">
                  <input type="text" placeholder="请输入商户关键字" class="datatimepicker">
                </label>
                <button type="submit"class="button button-normal button-search">快速查询</button>
              </div>
            </form>
            <div id="J_table_wrap">
            <table class="data-table" cellspacing="0" border="0" cellpadding="0" width="100%">
              <thead>
                <th width="50">序号</th>
                <th width="200">商户名称</th>
                <th width="200">门店名称</th>
                <th width="100">收银员</th>
                <th width="200">终端号</th>
                <th width="200">交易时间</th>
                <th width="100">交易方式</th>
                <th width="200">交易账户</th>
                <th width="200">收款账户</th>
                <th width="100">收款金额(元)</th>
                <th width="100">退款金额(元)</th>
                <th width="100">手续费(元)</th>
                <th width="100">余额(元)</th>
              </thead>

              <?php
                for ( $counter = 1; $counter <= 10; $counter += 1) {
                  echo "<tr><td>";
                  echo $counter;
                  echo "</td>";
                  echo "<td>红旗商业集团红旗连锁超市西安路门店</td>";
                  echo "<td>红旗超市西安路门店</td>";
                  echo "<td>王小东</td>";
                  echo "<td>855669855</td>";
                  echo "<td>2014-10-21 14:33</td>";
                  echo "<td>支付宝</td>";
                  echo "<td>4471457@qq.com</td>";
                  echo "<td>145478742124575412147412</td>";
                  echo "<td>200.00</td>";
                  echo "<td>200.00</td>";
                  echo "<td>2.04</td>";
                  echo "<td>197.96</td>";
                  echo "</tr>";
                  }
               ?>

            </table>

            </div>
            <?php include '../shared/pagination.php';?>
          </div>
        </div>
        <?php include '../shared/footer.php';?>
      </div>
  </div>

  <div class="popup-wrap">
    <div class="popup-mask"></div>

    <div class="popup-card" id="J_card_export">
      <div class="title">导出</div>
      <div class="tip-normal">请选择导出日报时间段:</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <form action="../test.php" id="J_form" method="get">
          <div class="popup-row">
            <input type="text" data-tip="请选择开始时间" class="datetimepicker time-start" placeholder="请选择时间" style="width:180px;">
            <input type="text" data-tip="请选择结束时间" class="datetimepicker time-end" placeholder="请选择时间" style="width:180px;">
          </div>
          <button type="submit" class="button button-next button-large">导出</button>
        </form>
      </div>
    </div>


    <div class="popup-card" id="J_card_setting" style="width:820px;">
      <div class="title">设置</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <form action="../test.php" method="get" id="J_form_setting">
          <div class="popup-row">
          <table class="border-table" cellspacing="0" border="0" cellpadding="0" width="100%">
            <tr>
              <td width="480">记账周期</td>
              <td>说明</td>
            </tr>
            <tr>
              <td>
                <div class="popup-row">
                  <input type="text" data-tip="请选择开始时间" class="datetimepicker time-start" placeholder="请选择时间" style="width:180px;">
                  <input type="text" data-tip="请选择结束时间" class="datetimepicker time-end" placeholder="请选择时间" style="width:180px;">
                </div>
              </td>
              <td>
                <div class="popup-row">
                  <input type="text" data-tip="请输入说明内容" placeholder="请输入说明内容">
                </div>
              </td>
            </tr>
          </table>
          </div>
          <button type="submit" style="margin:30px auto;display:block;width:380px;" class="button button-next button-large">确定</button>
        </form>
      </div>
    </div>


  </div>

<?php include '../shared/common_js.php';?>
<script src="../lib/dataTables/datatables.min.js"></script>
<script src="../lib/dateTimePicker/datepicker.js"></script>
<script src="../dist/js/merchant/daily.js"></script>
</body>
</html>
