<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-资料管理-修改密码</title>
    <?php include '../shared/common_css.php';?>
    <link rel="stylesheet" href="../dist/css/data.css" charset="utf-8">
  </head>
  <body>
    <div class="views">
      <?php include '../shared/nav.php';?>
      <div id="main-page">
        <?php include '../shared/header.php';?>
        <div id="main" class="data-main">
          <div class="main-header">
            <div class="main-title">资料管理</div>
            <div class="button-group">
              <a class="button button-cancel button-normal" href="data.php">基本信息</a>
              <a class="button button-active button-normal">修改密码</a>
            </div>
          </div>
          <div class="main-body scroll-body">
            <form action="" id="J_form">
              <div class="data-form update-password clearfix">
                <table cellspacing="0" border="0" cellpadding="0">
                  <tr>
                    <td class="label">原 密 码：</td>
                    <td><input type="password" id="origin-password"></td>
                  </tr>
                  <tr>
                    <td class="label">新 密 码：</td>
                    <td><input type="password" id="new-password"></td>
                  </tr>
                  <tr>
                    <td class="label">确认密码：</td>
                    <td><input type="password" id="new-password-again"></td>
                  </tr>
                  <tr>
                    <td class="label"></td>
                    <td>
                      <button type="submit" class="button button-active button-large" id='J_data_update_password'>确定</button>
                    </td>
                  </tr>
                </table>
              </div>
            </form>
          </div>
        </div>
        <?php include '../shared/footer.php';?>
      </div>
  </div>

  <?php include '../shared/common_js.php';?>
  <script src="../dist/js/merchant/data_update_password.js"></script>
</body>
</html>
