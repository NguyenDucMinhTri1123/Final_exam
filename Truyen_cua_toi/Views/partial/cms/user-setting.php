  <!-- Content Wrapper. Contains page content -->
  <!-- custom style for this page -->
  <style>
      element.style {
          left: 0px;
          transition: background-color 0.4s ease 0s, left 0.2s ease 0s;
      }

      .switchery-small>small {
          height: 20px;
          width: 20px;
      }

      .switchery>small {
          background: #fff;
          border-radius: 100%;
          box-shadow: 0 1px 3px rgb(0 0 0 / 40%);
          height: 30px;
          position: absolute;
          top: 0;
          width: 30px;
      }

      .white-box .pagination {
          float: right;
      }

      .pull-right {
          float: right !important;
      }

      .m-t-20 {
          margin-top: 20px !important;
      }

      .white-box {
          background: #fff;
          padding: 25px;
          margin-bottom: 30px;
      }

      .panel {
          border-radius: 0;
          margin-bottom: 30px;
          border: 0;
          box-shadow: none;
      }

      .p-30 {
          padding: 30px !important;
      }

      .avatar {
          max-width: 100px;
          position: relative;
      }

      .avatar .level {
          position: absolute;
          bottom: -.125rem;
          line-height: 1.5;
          padding: 1px 12px;
          left: 50%;
          -webkit-transform: translateX(-50%);
          -moz-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          -o-transform: translateX(-50%);
          transform: translateX(-50%);
          white-space: nowrap;
          border-radius: 10px;
      }

      .m-b-10 {
          margin-bottom: 10px !important;
      }

      .b-r {
          border-right: 1px solid rgba(120, 130, 140, .13);
      }

      .m-t-30 {
          margin-top: 30px !important;
      }

      .m-t-10 {
          margin-top: 10px !important;
      }

      hr {
          border-color: rgba(120, 130, 140, .13);
      }

      .p-10 {
          padding: 10px !important;
      }

      .font-medium {
          font-weight: 500;
      }

      .col-xs-6 {
          width: 50%;
      }

      .customtab {
          border-bottom: 2px solid #f7fafc;
      }

      .customtab li.active a,
      .customtab li.active a:hover,
      .customtab li.active a:focus {
          border-bottom: 2px solid #ff7676 !important;
          color: #ff7676 !important;
      }

      .customtab li.active a,
      .customtab li.active a:hover,
      .customtab li.active a:focus {
          background: #fff;
          border: 0;
          border-bottom: 2px solid #2cabe3;
          margin-bottom: -1px;
          color: #2cabe3;
      }

      .nav>li>a {
          position: relative;
          display: block;
          padding: 10px 15px;
      }

      .nav-tabs>li>a {
          border-radius: 0;
          color: #313131;
      }

      .tab-content {
          margin-top: 30px;
      }

      .tab-content>.tab-pane {
          display: none;
      }

      .tab-content>.active {
          display: block;
      }

      .media {
          border: 1px solid rgba(120, 130, 140, .13);
          margin-bottom: 10px;
          padding: 15px;
      }

      .media-body,
      .media-left,
      .media-right {
          display: table-cell;
          vertical-align: top;
      }

      .media-left,
      .media>.pull-left {
          padding-right: 10px;
      }

      .media .media-heading {
          font-weight: 500;
      }

      .media-heading {
          margin-top: 0;
          margin-bottom: 5px;
      }

      a {
          color: #337ab7;
          text-decoration: none;
          background-color: transparent;
      }

      .btn-rounded {
          border-radius: 60px !important;
      }

      .btn-info.btn-outline {
          color: #2cabe3;
          background-color: transparent;
      }

      .btn-info,
      .btn-info.disabled {
          background: #2cabe3;
          border: 1px solid #2cabe3;
      }

      .btn-outline {
          color: inherit;
          background-color: transparent;
          transition: all .5s;
      }

      .btn-group-xs>.btn,
      .btn-xs {
          padding: 1px 5px;
          font-size: 12px;
          line-height: 1.5;
          border-radius: 3px;
      }

      .m-l-10 {
          margin-left: 10px !important;
      }
  </style>
  <div class="content-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 col-xs-12">
                  <div class="white-box">
                      <ul class="nav nav-tabs tabs customtab">
                          <li class="tab active" onclick="appendParamToCurrentUrl('tab', 'profile')">
                              <a href="#profile" data-toggle="tab">Hồ sơ</a>
                          </li>
                          <li class="tab " onclick="appendParamToCurrentUrl('tab', 'security')">
                              <a href="#security" data-toggle="tab">Bảo mật</a>
                          </li>

                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                              <form class="form-horizontal form-material" method="post" action="admin">
                                  <input type="hidden" name="edit_infor" value="yes">
                                  <div class="form-group">
                                      <label class="col-md-12">Tên hiển thị</label>
                                      <div class="col-md-12">
                                          <input type="text" name="name" value="<?= $account->name ?>" class="form-control form-control-line">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-12">Tuổi</label>
                                      <div class="col-md-12">
                                          <input type="text" name="age" placeholder="yyyy" value="<?= $account->age ?>" class="form-control form-control-line">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-12">Giới tính</label>
                                      <div class="col-sm-12">
                                          <select name="gender" class="form-control form-control-line">
                                              <option value="0" selected="">Bí mật</option>
                                              <option value="1">Nam</option>
                                              <option value="2">Nữ</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-sm-12">
                                          <button class="btn btn-info">Cập nhật</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane " id="security">
                              <form class="form-horizontal" method="post" action="admin">
                                  <input type="hidden" name="change_password" value="yes">
                                  <div class="form-group">
                                      <label class="col-md-12">Mật khẩu hiện tại</label>
                                      <div class="col-md-12">
                                          <input type="password" name="old_password" class="form-control" placeholder="Phải nhập mật khẩu hiện tại nếu muốn đổi mật khâu">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="form-group">
                                      <label class="col-md-12">Mật khẩu mới</label>
                                      <div class="col-md-12">
                                          <input type="password" placeholder="Nhập mật khẩu mới" name="new_password" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-12">Nhập lại mật khẩu mới</label>
                                      <div class="col-md-12">
                                          <input type="password" placeholder="Nhập lại mật khẩu mới" name="new_password_confirmation" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <button type="submit" class="btn btn-info">Cập nhật</button>
                                      </div>
                                  </div>
                              </form>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>