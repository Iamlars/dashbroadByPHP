<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-账户管理</title>
    <?php include '../shared/common_css.php';?>
    <link rel="stylesheet" href="../dist/css/account.css" charset="utf-8">
  </head>
  <body>
    <div class="views">
      <?php include '../shared/nav.php';?>
      <div id="main-page">
        <?php include '../shared/header.php';?>
        <div id="main" class="account-main">
          <div class="main-header">
            <div class="main-title">
              账户管理
              <span class="header-total">(您已绑定1个交易账户)</span>
            </div>
          </div>
          <div class="main-body scroll-body">
            <table cellspacing="0" border="0" cellpadding="0" width="100%">
              <tr>
                <td width="200"><img class="logo-alipay" src="../dist/image/account/ico-alipay.jpg" alt="alipay"></td>
                <td>支付宝</td>
                <td width="90"><span class="link link-active" data-account="alipay">[已开通]</span></td>
              </tr>
              <tr>
                <td><img class="logo-baidu" src="../dist/image/account/ico-baidu.jpg" alt="baidu"></td>
                <td>百度钱包</td>
                <td><span class="link link-active" data-account="baidu">[已开通]</span></td>
              </tr>
              <tr>
                <td><img class="logo-unionpay" src="../dist/image/account/ico-unionpay.jpg" alt="unionpay"></td>
                <td>银联钱包</td>
                <td><span class="link link-active" data-account="unionpay">[已开通]</span></td>
              </tr>
              <tr>
                <td><img class="logo-wechat" src="../dist/image/account/ico-wechat.jpg" alt="wechat"></td>
                <td>微信钱包</td>
                <td><span class="link link-active" data-account="wechat">[已开通]</span></td>
              </tr>
              <tr>
                <td><img class="logo-ygj" src="../dist/image/account/ico-ygj.jpg" alt="ygj"></td>
                <td>云管家</td>
                <td><span class="link link-unactive" data-account="ygj">[未开通]</span></td>
              </tr>
            </table>
          </div>
        </div>
        <?php include '../shared/footer.php';?>
      </div>
    </div>


  <div class="popup-wrap">
    <div class="popup-mask"></div>

    <div class="popup-card" id="J_card_add_account">
      <div class="title">绑定账户</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <div class="popup-row">
          <label class="label bind">您只需一步，即可完成账户绑定!</label>
        </div>
        <div class="popup-row popup-account-logo"></div>
        <form action="" id="J_form">
          <div class="popup-row"><label class="label">账户名:</label></div>
          <div class="popup-row"><input type="text" class="input-full" data-tip="账户名不能为空"></div>
          <div class="popup-row"><label class="label">密码:</label></div>
          <div class="popup-row"><input type="password" class="input-full" data-tip="密码不能为空"></div>
          <div class="tip-strong">* 敬请放心：平台不会对外泄露您的用户名及密码！</div>
          <button type="submit" class="button button-next button-large">下一步</button>
        </form>
      </div>
    </div>

    <div class="popup-card" id="J_card_edit_account">
      <div class="title">修改账户</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <div class="popup-row">
          <label class="label bind">您只需一步，即可完成账户修改!</label>
        </div>
        <div class="popup-row popup-account-logo"></div>
        <form action="" id="J_form_edit">
          <div class="popup-row"><label class="label">账户名:</label></div>
          <div class="popup-row"><input type="text" class="input-full" data-tip="账户名不能为空"></div>
          <div class="popup-row"><label class="label">密码:</label></div>
          <div class="popup-row"><input type="password" class="input-full" data-tip="密码不能为空"></div>
          <div class="tip-strong"></div>
          <button type="submit" class="button button-next button-large">提交</button>
        </form>
      </div>
    </div>

    <div class="popup-card tips-popup" id="J_card_add_account_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-request">
        <div class="request-title bind">您已成功绑定账户！</div>
        <div class="request-body">
          <div class="request-account">
            您绑定的账户号为：
            <div class="popup-account-logo"></div>
          </div>
          <p>
            <span class="label">账号：</span>
            <em>13800138000</em>
          </p>
        </div>
        <div class="button button-active button-large">下一步</div>
      </div>
    </div>

    <div class="popup-card tips-popup" id="J_card_edit_account_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-request">
        <div class="request-title bind">您已成功修改账户！</div>
        <div class="request-body">
          <div class="request-account">
            您修改后的账户号为：
            <div class="popup-account-logo"></div>
          </div>
          <p>
            <span class="label">账号：</span>
            <em>13800138000</em>
          </p>
        </div>
        <div class="button button-active button-large">下一步</div>
      </div>
    </div>

  </div>

  <?php include '../shared/common_js.php';?>
  <script src="../dist/js/merchant/account.js"></script>
</body>
</html>
