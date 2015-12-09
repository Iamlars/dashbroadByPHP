<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-门店管理</title>
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
              门店管理
              <span class="header-total">(共有25个门店)</span>
            </div>
            <div class="button-group">
              <div class="button button-normal button-active" id="J_add_store">
                <i>+</i>新增门店
              </div>
            </div>
          </div>
          <div class="main-body">
            <form action="">
              <div class="form-filter clearfix">
                <label class="filter-item">
                  <input type="text" placeholder="请输入商户关键字">
                </label>
                <label class="filter-item">
                  <select name="" id="">
                    <option value="0">请选择商户状态</option>
                    <option value="1">未申请</option>
                    <option value="2">待审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                    <option value="3">已审核</option>
                  </select>
                </label>
                <button type="submit"class="button button-normal button-search">查询</button>
              </div>
            </form>
            <table class="data-table" cellspacing="0" border="0" cellpadding="0" width="100%">
              <thead>
                <th width="50">序号</th>
                <th>商户全称</th>
                <th>登录名</th>
                <th>操作</th>
                <th width="70">状态</th>
              </thead>

              <?php
                for ( $counter = 1; $counter <= 10; $counter += 1) {
                  echo "<tr><td>";
                  echo $counter;
                  echo "</td>";
                  echo "<td>红旗商业集团红旗连锁超市西安路门店</td>";
                  echo "<td>红旗超市西安路门店</td>";
                  echo "<td><span class='link link-edit'>[编辑]</span><a class='link link-view' href='/fe/merchant/store_views.php'>[查看资料]</a></td>";
                  echo "<td>已审核</td>";
                  echo "</tr>";
                  }
               ?>

            </table>
            <?php include '../shared/pagination.php';?>
          </div>
        </div>
        <?php include '../shared/footer.php';?>
      </div>
  </div>

  <div class="popup-wrap">
    <div class="popup-mask"></div>

    <div class="popup-card" id="J_card_add_store">
      <div class="title">新增门店</div>
      <div class="tip-normal">新增门店需经平台审核通过后方可启用!</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <form action="" id="J_form">
          <div class="popup-row"><label class="label">门店全称:</label></div>
          <div class="popup-row"><input type="text" class="input-full" data-tip="门店全称不能为空"></div>
          <div class="popup-row"><label class="label">登录名:</label></div>
          <div class="popup-row"><input type="text" class="input-full" data-tip="登录名不能为空"></div>
          <div class="tip-normal">初始登录密码为000000</div>
          <button type="submit" class="button button-next button-large">保存</button>
        </form>
      </div>
    </div>

    <div class="popup-card tips-popup" id="J_card_add_store_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <img class="tip-success" src="../dist/image/icons/ico-request-success.jpg" alt="success">
        <p>启用该门店需经平台审核通过后方可有效</p>
        <p>您已向平台递交申请！</p>
        <div class="tip-normal">平台将在2个工作日内完成相关审核工作!</div>
      </div>
      <div class="button button-active button-large">确定</div>
    </div>

    <div class="popup-card" id="J_card_edit_store">
      <div class="title">编辑门店</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <form action="" id="J_form_edit">
          <div class="popup-row"><label class="label">门店全称:</label></div>
          <div class="popup-row"><input type="text" class="input-full" data-tip="门店全称不能为空"></div>
          <div class="popup-row"><label class="label">登录名:</label></div>
          <div class="popup-row"><input type="text" class="input-full" data-tip="登录名不能为空"></div>
          <div class="tip-strong">* 通过审核的登录名不可再做更改</div>
          <button type="submit" class="button button-next button-large">保存</button>
          <div class="button button-cancel button-large">重置密码</div>
        </form>
      </div>
    </div>

    <div class="popup-card tips-popup" id="J_card_edit_store_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <img class="tip-success" src="../dist/image/icons/ico-request-success.jpg" alt="success">
        <p>编辑该门店需经平台审核通过后方可有效</p>
        <p>您已向平台递交申请！</p>
        <div class="tip-normal">平台将在2个工作日内完成相关审核工作!</div>
      </div>
      <div class="button button-active button-large">确定</div>
    </div>


  </div>

<?php include '../shared/common_js.php';?>
<script src="../lib/dataTables/datatables.min.js"></script>
<script src="../lib/select2/select.js"></script>
<script src="../dist/js/merchant/store.js"></script>
</body>
</html>
