<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-资料管理-积分日志</title>
    <link rel="stylesheet" href="../lib/dataTables/datatables.min.css" charset="utf-8">
    <?php include '../shared/common_css.php';?>
    <link rel="stylesheet" href="../dist/css/points.css" charset="utf-8">
  </head>
  <body>
    <div class="views">
      <?php include '../shared/nav.php';?>
      <div id="main-page">
        <?php include '../shared/header.php';?>
        <div id="main" class="data-main">
          <div class="main-header">
            <div class="main-title">积分日志</div>
          </div>
          <div class="main-body">
            <div class="points-tip">
              <label class="label">当前总积分:</label>
              <strong>583  分</strong>
            </div>
            <table class="table-points data-table" cellspacing="0" border="0" cellpadding="0" width="100%">
              <thead>
                <th>日期</th>
                <th>积分明细</th>
                <th>获得积分值</th>
              </thead>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
              <tr><td>2015-11-02</td><td>web端每日登录</td><td>20</td></tr>
            </table>
            <div class="pagination">
              <a href="#" class="button pagination-button">&lt;</a>
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">...</a>
              <a href="#">200</a>
              <a href="#">201</a>
              <a href="#" class="button pagination-button">&gt;</a>
            </div>
          </div>
        </div>
        <?php include '../shared/footer.php';?>
      </div>
  </div>

  <?php include '../shared/common_js.php';?>
  <script src="../lib/dataTables/datatables.min.js"></script>
  <script src="../dist/js/table.js"></script>
</body>
</html>
