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
          <div class="col-sm-12">
              <div class="white-box">
                  <h3>Đăng truyện sáng tác</h3>
                  <form id="form-author" class="form-horizontal" action="?direct=create-novel" method="POST">
                      <div class="col-md-12">

                          <input type="hidden" value="yes" name="create_novel">

                          <div class="form-group">
                              <label class="col-md-12">Tên truyện</label>
                              <div class="col-md-12">
                                  <input type="text" placeholder="Tên truyện" class="form-control" value="" name="name">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Thể Loại</label>
                              <div class="col-md-12">
                                  <select class="form-control" name="tag">
                                      <?php foreach ($tag_list as $tag) { ?>
                                          <option value="<?= $tag->id ?>"><?= $tag->name ?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Link Ảnh</label>
                              <div class="col-md-12">
                                  <input type="text" placeholder="Link Ảnh" class="form-control" value="" name="img_link">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Loại Truyện</label>
                              <div class="col-md-12">
                              <div class="col-md-12">
                                  <select class="form-control" name="novel_type">
                                          <option value="Sáng Tác">Sáng Tác</option>
                                          <option value="Truyện Dịch">Truyện Dịch</option>
                                  </select>
                              </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Giới thiệu</label>
                              <div class="col-md-12">
                                  <textarea class="form-control" rows="6" name="notes" placeholder="Tối đa 4000 ký tự. Tóm tắt cho truyện không nên quá dài mà nên ngắn gọn, tập trung, thú vị. Phần này rất quan trọng vì nó quyết định độc giả có đọc hay không."></textarea>
                              </div>
                          </div>


                          
                                        <button type="submit" class="pull-right btn btn-danger btn-rounded">Thêm Truyện</button>
                      </div>

                  </form>
                  <div class="clearfix"></div>
              </div>
          </div>
      </div>
  </div>