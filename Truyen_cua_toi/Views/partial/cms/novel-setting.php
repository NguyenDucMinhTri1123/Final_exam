  <!-- Content Wrapper. Contains page content -->
  <!-- custom style for this page -->
  <style>
      .btn-circle {
          width: 30px;
          height: 30px;
          padding: 6px 0;
          border-radius: 15px;
          text-align: center;
          font-size: 12px;
          line-height: 1.428571429;
      }

      .table>thead>tr>th {
          vertical-align: bottom;
          border-bottom: 1px solid #e4e7ea;
      }

      .table>tbody>tr>td,
      .table>tbody>tr>th,
      .table>tfoot>tr>td,
      .table>tfoot>tr>th,
      .table>thead>tr>td,
      .table>thead>tr>th {
          padding: 15px 8px;
      }

      .table>thead>tr>th,
      .table>tbody>tr>th,
      .table>tfoot>tr>th,
      .table>thead>tr>td,
      .table>tbody>tr>td,
      .table>tfoot>tr>td,
      .table>thead>tr>th,
      .table-bordered {
          border-top: 1px solid #e4e7ea;
      }

      th {
          color: #666;
          font-weight: 500;
      }

      th {
          text-align: left;
      }

      tbody {
          color: #797979;
      }

      .sttabs {
          position: relative;
          overflow: hidden;
          margin: 0 auto;
          width: 100%;
          font-weight: 300;
      }

      .sttabs nav {
          text-align: center;
      }

      .sttabs nav ul {
          position: relative;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: -moz-flex;
          display: -ms-flex;
          display: flex;
          margin: 0 auto;
          padding: 0;
          font-family: poppins, sans-serif;
          list-style: none;
          -ms-box-orient: horizontal;
          -ms-box-pack: center;
          -webkit-flex-flow: row wrap;
          -moz-flex-flow: row wrap;
          -ms-flex-flow: row wrap;
          flex-flow: row wrap;
          -webkit-justify-content: center;
          -moz-justify-content: center;
          -ms-justify-content: center;
          justify-content: center;
      }

      .sttabs nav ul li {
          position: relative;
          z-index: 1;
          display: block;
          margin: 0;
          text-align: center;
          -webkit-flex: 1;
          -moz-flex: 1;
          -ms-flex: 1;
          flex: 1;
      }

      .tabs-style-bar nav ul li.tab-current a {
          background: #fb9678;
          color: #fff;
      }

      .sttabs nav li.tab-current a {
          color: #ff7676;
      }

      .tabs-style-bar nav ul li a {
          margin: 0 2px;
          background-color: #f7fafc;
          color: #686868;
          padding: 5px 0;
          transition: background-color .2s, color .2s;
      }

      .sttabs nav a {
          position: relative;
          display: block;
          overflow: hidden;
          text-overflow: ellipsis;
          white-space: nowrap;
          line-height: 2.5;
      }

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

      }

      .m-l-10 {
          margin-left: 10px !important;
      }
  </style>
  <div class="content-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12">
                  <div class="white-box">
                      <div class="sttabs tabs-style-bar">
                          <nav>
                              <ul>
                                  <li class="<?php if ($action == "update") echo "tab-current"; ?>">
                                      <a href="/Truyen_cua_toi/public/admin?direct=novel-setting&action=update&novel-id=<?= $_GET['novel-id']; ?>" class="sticon ti-check-box">
                                          <span>Chỉnh sửa</span>
                                      </a>
                                  </li>
                                  <li class="<?php if ($action == "chapter") echo "tab-current"; ?>">
                                      <a href="/Truyen_cua_toi/public/admin?direct=novel-setting&action=chapter&novel-id=<?= $_GET['novel-id']; ?>" class="sticon ti-list-ol">
                                          <span>D.S chương</span>
                                      </a>
                                  </li>
                                  <li class="<?php if ($action == "add") echo "tab-current"; ?>">
                                      <a href="/Truyen_cua_toi/public/admin?direct=novel-setting&action=add&novel-id=<?= $_GET['novel-id']; ?>" class="sticon ti-plus">
                                          <span>Thêm chương</span>
                                      </a>
                                  </li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
          <?php
            if ($action == "add") {
                include_once "../Views/partial/cms/novel-setting/add-chapter.php";
            } else if ($action == "update") {
                include_once "../Views/partial/cms/novel-setting/update-novel.php";
            } else if ($action == "chapter") {
                include_once "../Views/partial/cms/novel-setting/chapter-list.php";
            } else {
            }
            ?>
      </div>
  </div>