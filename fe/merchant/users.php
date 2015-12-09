<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商户管理中心-资料管理-用户管理</title>
    <link rel="stylesheet" href="../lib/select2/select.css" charset="utf-8">
    <link rel="stylesheet" href="../lib/dataTables/datatables.min.css" charset="utf-8">
    <?php include '../shared/common_css.php';?>
    <link rel="stylesheet" href="../dist/css/tables.css" charset="utf-8">
    <link rel="stylesheet" href="../dist/css/user.css" charset="utf-8">
  </head>
  <body>
    <div class="views">
      <?php include '../shared/nav.php';?>
      <div id="main-page">
        <?php include '../shared/header.php';?>
        <div id="main" class="data-main">
          <div class="main-header">
            <div class="main-title">
              用户管理
              <span class="header-total">(共有11名用户)</span>
            </div>
            <div class="button-group">
              <div class="button button-normal button-active" id="J_add_user">
                <i>+</i>新增用户
              </div>
            </div>
          </div>
          <div class="main-body">
            <div class="form-filter clearfix">
              <label class="filter-item">
                <input type="text" placeholder="请输入姓名">
              </label>
              <label class="filter-item">
                <input type="text" placeholder="请输入登录名">
              </label>
              <label class="filter-item">
                <input type="text" placeholder="请输入工号">
              </label>
              <label class="filter-item">
                <input type="text" placeholder="请输入联系电话">
              </label>
              <label class="filter-item">
                <select name="" id="">
                  <option value="">请选择所属机构</option>
                </select>
              </label>
              <span class="button button-normal button-search">查询</span>
            </div>
            <table class="table-user data-table" cellspacing="0" border="0" cellpadding="0" width="100%">
              <thead>
                <th width="50">序号</th>
                <th>姓名</th>
                <th>登录名</th>
                <th>所属商户</th>
                <th>职位</th>
                <th>工号</th>
                <th>联系电话</th>
                <th>操作</th>
              </thead>
              <tr>
                <td>1</td>
                <td>刘仁杰</td>
                <td>admin</td>
                <td>红旗商业集团</td>
                <td>财务总监</td>
                <td>51325</td>
                <td>1300000130000</td>
                <td><span class='link link-edit'>[编辑]</span><span class='link link-start'>[启用]</span></td>
              </tr>
              <?php
                for ( $counter = 2; $counter <= 10; $counter += 1) {
                  echo "<tr><td>";
                  echo $counter;
                  echo "</td>";
                  echo "<td>刘仁杰</td>";
                  echo "<td>admin</td>";
                  echo "<td>红旗商业集团</td>";
                  echo "<td>财务总监</td>";
                  echo "<td>51325</td>";
                  echo "<td>1300000130000</td>";
                  echo "<td><span class='link link-edit'>[编辑]</span><span class='link link-stop'>[停用]</span></td>";
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

    <div class="popup-card big-popup" id="J_card_add_user">
      <div class="title">新增用户</div>
      <div class="tip-normal">新增用户需经平台审核通过后方可启用，通过审核后登录名将不可更改!</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <form action="" id="J_form">
        <div class="popup-body clearfix">
          <div class="popup-row-half fl">
            <div class="popup-row"><label class="label">姓名:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="姓名不能为空"></div>
            <div class="popup-row"><label class="label">所属商户:</label></div>
            <div class="popup-row">
              <select name="" id="">
                <option value="">所属商户</option>
              </select>
            </div>
            <div class="popup-row"><label class="label">工号:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="工号不能为空"></div>
            <div class="popup-row">
              <div class="uploader">
                <div class="def-image"></div>
                <p id="userPicker">[<em>上传照片</em>]</p>
              </div>
            </div>
          </div>
          <div class="popup-row-half fr">
            <div class="popup-row"><label class="label">登录名:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="登录名不能为空"></div>
            <div class="popup-row"><label class="label">职位:</label></div>
            <div class="popup-row">
              <select name="" id="">
                <option value="">职位</option>
              </select>
            </div>
            <div class="popup-row"><label class="label">联系电话:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="联系电话不能为空"></div>
          </div>
        </div>
        <div class="label" style="margin:30px auto 20px auto;width:380px;">初始登录密码为000000</div>
        <button type="submit" class="button button-next button-large">申请</button>
      </form>
    </div>

    <div class="popup-card tips-popup" id="J_card_add_user_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <img class="tip-success" src="../dist/image/icons/ico-request-success.jpg" alt="success">
        <p>新增用户需经平台审核通过后方可有效</p>
        <p>您已向平台递交申请！</p>
        <div class="tip-normal">平台将在2个工作日内完成相关审核工作!</div>
      </div>
      <div class="button button-active button-large">确定</div>
    </div>


    <div class="popup-card big-popup" id="J_card_edit_user">
      <div class="title">编辑用户</div>
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <form action="" id="J_form_edit">
        <div class="popup-body clearfix">
          <div class="popup-row-half fl">
            <div class="popup-row"><label class="label">姓名:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="姓名不能为空"></div>
            <div class="popup-row"><label class="label">所属商户:</label></div>
            <div class="popup-row">
              <select name="" id="">
                <option value="">所属商户</option>
              </select>
            </div>
            <div class="popup-row"><label class="label">工号:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="工号不能为空"></div>
            <div class="popup-row"><button type="submit" class="button button-next button-large">保存</button></div>
          </div>
          <div class="popup-row-half fr">
            <div class="popup-row"><label class="label">登录名:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="登录名不能为空"></div>
            <div class="popup-row"><label class="label">职位:</label></div>
            <div class="popup-row">
              <select name="" id="">
                <option value="">职位</option>
              </select>
            </div>
            <div class="popup-row"><label class="label">联系电话:</label></div>
            <div class="popup-row"><input type="text" class="input-full" data-tip="联系电话不能为空"></div>
            <div class="popup-row"><div class="button button-cancel button-large">重置密码</div></div>
          </div>
        </div>
      </form>
    </div>

    <div class="popup-card tips-popup" id="J_card_edit_user_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <img class="tip-success" src="../dist/image/icons/ico-request-success.jpg" alt="success">
        <p>编辑用户需经平台审核通过后方可有效</p>
        <p>您已向平台递交申请！</p>
        <div class="tip-normal">平台将在2个工作日内完成相关审核工作!</div>
      </div>
      <div class="button button-active button-large">确定</div>
    </div>

    <div class="popup-card tips-popup" id="J_card_stop_user_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <img class="tip-success" src="../dist/image/icons/ico-wran.jpg" alt="success">
        <p>确定停用该用户的操作权限？</p>
        <p>停用后该用户将无法正常进行操作</p>
      </div>
      <div class="button button-active button-large">确定</div>
    </div>


    <div class="popup-card tips-popup" id="J_card_start_user_tips">
      <div class="close"><img src="../dist/image/icons/ico-popup-close.jpg" alt="close-popup"></div>
      <div class="popup-body">
        <img class="tip-success" src="../dist/image/icons/ico-request-success.jpg" alt="success">
        <p>启用该用户需经平台审核通过后方可有效</p>
        <p>您已向平台递交申请！</p>
        <div class="tip-normal">平台将在2个工作日内完成相关审核工作!</div>
      </div>
      <div class="button button-active button-large">确定</div>
    </div>

  </div>


  <?php include '../shared/common_js.php';?>
  <script src="../lib/dataTables/datatables.min.js"></script>
  <script src="http://cdn.staticfile.org/webuploader/0.1.0/webuploader.min.js"></script>
  <script src="../lib/select2/select.js"></script>
  <script src="../dist/js/table.js"></script>
  <script src="../dist/js/merchant/user.js"></script>
</body>
</html>
