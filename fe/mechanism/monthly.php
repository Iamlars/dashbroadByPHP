<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-月报管理</title>
    <link rel="stylesheet" href="../lib/dateTimePicker/datepicker.css" charset="utf-8">
    <link rel="stylesheet" href="../lib/select2/select.css" charset="utf-8">
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
              月报管理
              <span class="header-total">(共有2511条月报)</span>
            </div>
            <div class="button-group">
              <span class="button button-normal button-active" id="J_add_export">导出</span>
            </div>
          </div>
          <div class="main-body">
            <form action="">
              <div class="form-filter clearfix years">
                <a class="filter-item active">2015</a>
                <a class="filter-item">2014</a>
                <a class="filter-item">2013</a>
                <a class="filter-item">2012</a>
                <a class="filter-item">2011</a>
                <div class="filter-item">
                  <select name="" style="width:160px;">
                      <option>所有年度</option>
                      <option>2010</option>
                      <option>2009</option>
                  </select>
                </div>
                <div id="J_add_report" class="button button-search button-normal">开账</div>
              </div>
            </form>
            <div id="J_table_wrap">
            <table class="data-table" cellspacing="0" border="0" cellpadding="0" width="100%">
              <thead>
                <th width="50">序号</th>
                <th width="100">月份</th>
                <th width="300">记账周期</th>
                <th width="200">月报名称</th>
                <th width="200">操作</th>
              </thead>

              <?php
                for ( $counter = 1; $counter <= 12; $counter += 1) {
                  echo "<tr><td>";
                  echo $counter;
                  echo "</td>";
                  echo "<td>";
                  echo $counter;
                  echo "月</td>";
                  echo "<td>2015/01/01-----2015/01/31</td>";
                  echo "<td>一月账簿</td>";
                  echo "<td><a class='link link-view' href='monthly-views.php'>[查看]</a></td>";
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
      <div class="tip-normal">请选择导出月报时间段:</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <form action="../test.php" method="get" id="J_form">
          <div class="popup-row">
            <input type="text" data-tip="请选择开始时间" class="datetimepicker time-start" placeholder="请选择时间" style="width:180px;">
            <input type="text" data-tip="请选择结束时间" class="datetimepicker time-end" placeholder="请选择时间" style="width:180px;">
          </div>
          <button type="submit" class="button button-next button-large">导出</button>
        </form>
      </div>
    </div>

    <div class="popup-card" id="J_card_report" style="width:900px;">
      <div class="title">开账</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <form action="../test.php" method="get" id="J_form_report">
          <table class="border-table" width="100%">
            <tr>
              <td width="70">月份</td>
              <td>记账周期</td>
              <td width="200">月报名称</td>
            </tr>
            <?php
              for ( $counter = 1; $counter <= 12; $counter += 1) {
                echo "<tr data-month='".$counter."月'><td><label><input type='checkbox'/><i></i>".$counter."月</label></td>";
                echo "<td class='input-group'>";
                echo '<input type="text" data-tip="请选择'.$counter.'月的开始时间" class="datetimepicker time-start" placeholder="请选择时间" style="width:180px;">';
                echo '<input type="text" data-tip="请选择'.$counter.'月的结束时间" class="datetimepicker time-end" placeholder="请选择时间" style="width:180px;">';
                echo "</td>";
                echo '<td><input type="text" data-tip="请输入说明内容" placeholder="请输入说明内容"></td>';
                echo "</tr>";
                }
             ?>
          </table>
          <div class="popup-row">
            <label for="J_check_all"><input type='checkbox' id='J_check_all'/><i></i>全部</label>
            <button type="submit" class="button button-next button-large">确定</button>
          </div>

        </form>
      </div>
    </div>

  </div>

<?php include '../shared/common_js.php';?>
<script src="../lib/dataTables/datatables.min.js"></script>
<script src="../lib/select2/select.js"></script>
<script src="../lib/dateTimePicker/datepicker.js"></script>
<script src="../dist/js/merchant/monthly.js"></script>
</body>
</html>
