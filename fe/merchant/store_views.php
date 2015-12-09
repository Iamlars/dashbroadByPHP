<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-门店管理</title>
    <link rel="stylesheet" href="../lib/select2/select.css" charset="utf-8">
    <?php include '../shared/common_css.php';?>
    <link rel="stylesheet" href="../dist/css/data.css" charset="utf-8">
  </head>
  <body>
    <div class="views">
      <?php include '../shared/nav.php';?>
      <div id="main-page">
        <?php include '../shared/header.php';?>
        <div id="main" class="account-main">
          <div class="main-header">
            <div class="main-title">
              门店管理
            </div>
          </div>
          <div class="main-body scroll-body">
            <div class="data-base clearfix">
              <div class="data-base-rows fl">
                <div class="data-row">登录名：红旗商业集团</div>
                <div class="data-row">商户全称：红旗商业集团</div>
                <div class="data-row">机构类型：机构</div>
                <div class="tip-strong">* 以上信息由系统设置，不可更改，如需修改请联系系统管理员</div>
              </div>
              <div class="data-uploader fr">
                <div class="uploader">
                  <div class="def-image"></div>
                </div>
              </div>
            </div>
            <form action="" id="J_form">
              <div class="data-form clearfix">
                <table cellspacing="0" border="0" cellpadding="0">
                  <tr>
                    <td class="label">门店简称：</td>
                    <td><input type="text" data-tip="门店简称不能为空"></td>
                    <td class="label">负 责 人：</td>
                    <td><input type="text" data-tip="负责人不能为空"></td>
                  </tr>
                  <tr>
                    <td class="label">联 系 人：</td>
                    <td><input type="text" data-tip="联系人不能为空"></td>
                    <td class="label">联系电话：</td>
                    <td><input type="text" data-tip="联系电话不能为空"></td>
                  </tr>
                  <tr>
                    <td class="label">邮箱地址：</td>
                    <td><input type="text" data-tip="邮箱地址不能为空"></td>
                    <td class="label"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="label">所属区域：</td>
                    <td colspan="3" class="select-group">
                      <select class="pro" name="" data-tip="省份不能为空">
                        <option value="26"></option>
                      </select>  
                      <select class="city" name="" data-tip="城市不能为空"><option value="322"></option></select>  
                      <select class="area" name="" data-tip="地区不能为空"><option value="2725"></option></select>
                    </td>
                  </tr>
                  <tr>
                    <td class="label textarea-label">门店简介：</td>
                    <td colspan="3">
                      <textarea name="name" rows="8" cols="40" data-tip="门店简介不能为空"></textarea>
                    </td>
                  </tr>
                </table>
              </div>
              <input type="submit" value="确定" class="button button-active button-large" id='J_data_update'></input>
            </form>
          </div>
        </div>
        <?php include '../shared/footer.php';?>
      </div>
  </div>


<?php include '../shared/common_js.php';?>
<script src="../lib/dataTables/datatables.min.js"></script>
<script src="../lib/cityChoose/cityChoose.js"></script>
<script src="../lib/select2/select.js"></script>
<script src="../dist/js/merchant/store_views.js"></script>
</body>
</html>
