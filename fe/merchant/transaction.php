<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-交易管理</title>
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
              交易查询
              <span class="header-total">(共有2511条交易信息)</span>
            </div>
            <div class="button-group">
              <span class="button button-normal button-active" id="J_add_export">导出</span>
            </div>
          </div>
          <div class="main-body">
            <form action="">
              <div class="form-filter clearfix">
                <label class="filter-item">
                  <input type="text" placeholder="请选择交易时间" class="datetimepicker">
                </label>
                <label class="filter-item">
                  <input type="text" placeholder="请输入机构名称">
                </label>
                <label class="filter-item">
                  <input type="text" placeholder="请输入门店名称">
                </label>
                <label class="filter-item">
                  <input type="text" placeholder="请输入流水号">
                </label>
                <label class="filter-item">
                  <input type="text" placeholder="请输入订单号">
                </label>
                <button type="submit"class="button button-normal button-search">快速查询</button>
              </div>
            </form>
            <div id="J_table_wrap">
            <table class="data-table" cellspacing="0" border="0" cellpadding="0" width="100%">
              <thead>
                <th width="50">序号</th>
                <th width="200">门店</th>
                <th width="200">流水号</th>
                <th width="200">订单号</th>
                <th width="200">交易时间</th>
                <th width="100">交易方式</th>
                <th width="200">交易账户</th>
                <th width="100">收银员</th>
                <th width="200">终端号</th>
                <th width="100">收款金额(元)</th>
                <th width="100">退款金额(元)</th>
                <th width="100">手续费(元)</th>
              </thead>

              <?php
                for ( $counter = 1; $counter <= 10; $counter += 1) {
                  echo "<tr><td>";
                  echo $counter;
                  echo "</td>";
                  echo "<td>红旗商业集团红旗连锁超市西安路门店</td>";
                  echo "<td>2015103021001004740070426014</td>";
                  echo "<td>20151030110731835815</td>";
                  echo "<td>2014-10-21 14:33</td>";
                  echo "<td>支付宝</td>";
                  echo "<td>4471457@qq.com</td>";
                  echo "<td>刘仪伟</td>";
                  echo "<td>8655451</td>";
                  echo "<td>200.00</td>";
                  echo "<td>200.00</td>";
                  echo "<td>2.04</td>";
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
      <div class="tip-normal">请选择导出报表时间段:</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <form action="" id="J_form">
          <div class="popup-row">
            <input type="text" data-tip="请选择开始时间" class="datetimepicker time-start" placeholder="请选择时间" style="width:180px;">
            <input type="text" data-tip="请选择结束时间" class="datetimepicker time-end" placeholder="请选择时间" style="width:180px;">
          </div>
          <button type="submit" class="button button-next button-large">导出</button>
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
