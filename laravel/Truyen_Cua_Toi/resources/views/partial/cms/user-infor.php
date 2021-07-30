  <!-- Content Wrapper. Contains page content -->
  <!-- custom style for this page -->
  <style>
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
          <div class="row ">
              <div class="col-md-4 col-xs-12">
                  <div class="white-box">
                      <div class="panel">
                          <div class="p-30">
                              <div class="row">
                                  <div class="col-12 col-sm-12">
                                      <h3 class="m-b-10 text-center"><?= $account->name ?></h3>
                                  </div>
                              </div>

                              <div class="row text-center m-t-30">
                                  <div class="col-xs-6 b-r">
                                      <h2><i class="mdi mdi-crown"></i></h2>
                                      <h4>
                                          <?php
                                            if ($account->role_id == 1) {
                                                echo "Author";
                                            } else if ($account->role_id == 2) {
                                                echo "User";
                                            } else if ($account->role_id == 3) {
                                                echo "Admin";
                                            } else {
                                            }
                                            ?>
                                      </h4>
                                  </div>
                                  <div class="col-xs-6">
                                      <h2><i class="mdi mdi-human-male-female"></i></h2>
                                      <h4>
                                          <?php
                                            if ($account->gender == "") {
                                                echo "Giới Tính";
                                            } else
                                                echo $account->gender;
                                            ?>
                                      </h4>
                                  </div>
                              </div>
                              <hr>
                              <div class="row text-center m-t-30">
                                  <div class="col-xs-6 b-r">
                                      <h2><?= $wrote_novel_num ?></h2>
                                      <h4>TRUYỆN</h4>
                                  </div>
                                  <div class="col-xs-6">
                                      <h2><?= $wrote_chapter_num ?></h2>
                                      <h4>CHƯƠNG</h4>
                                  </div>
                              </div>
                          </div>
                          <hr class="m-t-10">
                          <div class="p-10 text-center">

                              <h4 class=" font-medium">Đang đọc</h4>
                              <div class="row text-center m-t-30">
                                  <div class="col-xs-6 b-r">
                                      <h2><?= $reading_novel ?></h2>

                                  </div>
                                  <div class="col-xs-6">
                                      <h4>TRUYỆN</h4>
                                    
                                  </div>
                              </div>

                          </div>

                      </div>
                  </div>
              </div>
              <div class="col-md-8 col-xs-12">
                  <div class="white-box">
                      <ul class="nav nav-tabs tabs customtab">
                          <li class="active tab">
                              <a href="#ongoing" data-toggle="tab">Truyện đang ra</a>
                          </li>
                          <li class=" tab">
                              <a href="#complete" data-toggle="tab">Truyện hoàn thành</a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="ongoing">
                              <div class="media">
                                  <div class="media-left">
                                      <a href="https://vtruyen.com/truyen/bau-troi-dao-nguoc"> <img class="media-object" src="./Hồ Sơ M1nhtr199_files/300.jpg" data-holder-rendered="true" width="100"> </a>
                                  </div>

                                  <div class="media-body">
                                      <h5 class="media-heading"><a href="https://vtruyen.com/truyen/bau-troi-dao-nguoc">Bầu Trời Đảo
                                              Ngược</a></h5>
                                      <div class="m-t-10 m-b-10">
                                          <btn class="btn btn-xs btn-info btn-rounded btn-outline"><small>Đô
                                                  Thị</small></btn>
                                      </div>
                                      <p style="-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">
                                          Tại Thế giới hiện đại, một ngày trên bầu trời ở một số thành phố ngẫu
                                          nhiên xuất hiện các đảo bay.
                                          Toàn thế giới bị chấn động bởi sự kiện đó.
                                          Liệu đây là sự kiện ngẫu nhiên, âm mưu người ngoài hành tinh hay chỉ đơn
                                          giản chỉ là kì quan vũ trụ.</p>
                                      <p>
                                          <i class="fa fa-copyright"></i> 0
                                          <i class="fa fa-eye m-l-10"></i> 0
                                          <i class="fa fa-star m-l-10"></i> 0.000
                                          <i class="fa fa-thumbs-up m-l-10"></i> 0
                                          <i class="fa fa-comments m-l-10"></i> 0
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane " id="complete">
                              <div class="text-center">
                                  <strong>Không có truyện</strong>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="white-box">
                      <h4 class="m-t-0 m-b-30">Hoạt động</h4>
                      <div class="steamline" data-id="1051721">
                          <div class="text-center">
                              <strong>
                                  Không có hoạt động
                                  <br>

                              </strong>
                          </div>
                      </div>

                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>

      </div>
  </div>