  <!-- Content Wrapper. Contains page content -->
  <!-- custom style for this page -->
  <style>
      .btn-warning,
      .btn-warning.disabled {
          background: #ffc36d;
          border: 1px solid #ffc36d;
      }

      .btn-info,
      .btn-info.disabled {
          background: #2cabe3;
          border: 1px solid #2cabe3;
      }

      .btn-primary,
      .btn-primary.disabled {
          background: #707cd2;
          border: 1px solid #707cd2;
      }

      .btn-success,
      .btn-success.disabled {
          background: #53e69d;
          border: 1px solid #53e69d;
      }

      .btn-warning.btn-outline {
          color: #ffc36d;
          background-color: transparent;
      }

      .btn-primary.btn-outline {
          color: #707cd2;
          background-color: transparent;
      }

      .btn-success.btn-outline {
          color: #53e69d;
          background-color: transparent;
      }

      .btn-circle {
          width: 30px;
          height: 30px;
          padding: 6px 0;
          border-radius: 15px;
          text-align: center;
          font-size: 12px;
          line-height: 1.428571429;
      }

      .btn-outline {
          color: inherit;
          background-color: transparent;
          transition: all .5s;
      }

      .table-responsive {
          overflow-y: hidden;
      }

      .table-responsive {
          min-height: .01%;
          overflow-x: auto;
      }

      .dataTables_wrapper {
          position: relative;
          clear: both;
          zoom: 1;
          zoom: 1;
      }

      .dataTables_wrapper .dataTables_filter {
          float: right;
          text-align: right;
          margin-bottom: 20px;
      }

      .dataTables_wrapper .dataTables_info {
          clear: both;
          float: left;
          padding-top: 0.755em;
      }

      .dataTables_wrapper .dataTables_paginate {
          float: right;
          text-align: right;
          padding-top: 0.25em;
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
      .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
      .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
          cursor: default;
          color: #666 !important;
          border: 1px solid transparent;
          background: transparent;
          box-shadow: none;
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button {
          box-sizing: border-box;
          display: inline-block;
          min-width: 1.5em;
          padding: 0.5em 1em;
          margin-left: 2px;
          text-align: center;
          text-decoration: none !important;
          cursor: pointer;
          *cursor: hand;
          color: #333 !important;
          border: 1px solid transparent;
          border-radius: 2px;
      }

      .disabled {
          opacity: .6;
          cursor: not-allowed !important;
      }

      .disabled {
          cursor: not-allowed !important;
      }

      .dataTables_wrapper .dataTables_filter input {
          margin-left: 0.5em;
      }

      .dataTables_filter input {
          border: 1px solid rgba(120, 130, 140, .13);
      }

      .dataTables_wrapper .dataTables_length,
      .dataTables_wrapper .dataTables_filter,
      .dataTables_wrapper .dataTables_info,
      .dataTables_wrapper .dataTables_processing,
      .dataTables_wrapper .dataTables_paginate {
          color: #333;
      }

      .dataTables_wrapper .dataTables_length {
          float: left;
          margin-bottom: 20px;
      }

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
                  <div class="table-responsive">
                      <div id="myTable_wrapper" class="dataTables_wrapper no-footer">

                          <div id="myTable_filter" class="dataTables_filter">
                              <label>Search:<input type="search" class="" placeholder="" aria-controls="myTable"></label>
                          </div>
                          <table id="myTable" class="table table-striped dataTable no-footer">
                              <thead>
                                  <tr role="row">
                                      <th style="width: 148px;">Name</th>
                                      <th style="width: 192px;">Status</th>
                                      <th style="width: 129px;">Latest</th>
                                      
                                      <th style="width: 174px;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($my_novel as $novel) { ?>
                                      <tr role="row" class="odd">
                                          <td class=" book_name">
                                              <a href="#" target="_blank"><?=$novel->name?></a>
                                          </td>
                                          <td class=" status_book">
                                          <?=$novel->status?>

                                          </td>
                                          <td class=" la"><?php if($novel->chapter_number==0) echo "Không có Chương"; else echo $novel->chapter_number;?></td>
                                          
                                          <td class="sorting_1">
                                              <a href="admin?direct=novel-setting&action=add&novel-id=<?=$novel->id?>" type="button" class="btn btn-info btn-outline btn-circle btn-md m-r-5">
                                                  <i class="fas fa-plus"></i>
                                              </a>
                                              <a href="admin?direct=novel-setting&action=update&novel-id=<?=$novel->id?>" type="button" class="btn btn-warning btn-outline btn-circle btn-md m-r-5">
                                                  <i class="far fa-edit"></i>
                                              </a>
                                              <a href="admin?direct=novel-setting&action=chapter&novel-id=<?=$novel->id?>" type="button" class="btn btn-primary btn-outline btn-circle btn-md m-r-5">
                                                  <i class="fas fa-bars"></i>
                                              </a>
                                              <a href="admin?direct=novel-setting&action=delete&novel-id=<?=$novel->id?>" type="button" class="btn btn-danger btn-outline btn-circle btn-md m-r-5">
                                                  <i class="far fa-trash-alt"></i>
                                              </a>

                                          </td>
                                      </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                          <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                          <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate"><a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">Previous</a><span><a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="myTable" data-dt-idx="2" tabindex="0" id="myTable_next">Next</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>