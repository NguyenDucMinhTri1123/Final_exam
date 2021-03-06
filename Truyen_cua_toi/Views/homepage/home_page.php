<?php
include_once "../views/partial/head.php";
?>

<body>
    <style>
        .cl-black:hover{
            color: #333!important;
        }
        .rounded-3 {
            -webkit-border-radius: 1rem;
            -moz-border-radius: 1rem;
            border-radius: 1rem;
        }

        .text-overflow-2-lines,
        .text-overflow-3-lines {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
        }

        .text-overflow-3-lines {
            -webkit-line-clamp: 3;
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .dropdown-menu.dropdown-menu--category {
            width: 500px;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none;
        }

        .dropdown-menu {
            -webkit-box-shadow: 0 10px 15px 0 rgb(0 0 0 / 9%);
            -moz-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .09);
            box-shadow: 0 10px 15px 0 rgb(0 0 0 / 9%);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .75rem 0;
            margin: 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding-box;
            background-clip: padding-box;
            border: 0 solid rgba(0, 0, 0, .15);
            -webkit-border-radius: .5rem;
            -moz-border-radius: .5rem;
            border-radius: .5rem;
        }

        .page-content {
            background-color: #fff;
            padding: 1.25rem;
            position: relative;
        }

        .media {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .nh-thumb.nh-thumb--72 {
            width: 72px;
        }

        .nh-thumb {
            display: inline-block;

            position: relative;
        }

        .comment-body,
        .media-body,
        .nh-read__alert,
        .nh-read__content {
            word-break: break-word;
        }

        .media-body {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -moz-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .fz-body {
            font-size: .9375rem;
        }

        .text-overflow-1-lines {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
        }

        .fz-14 {
            font-size: .875rem;
        }

        .text-overflow-2-lines {
            -webkit-line-clamp: 2;
        }

        .text-overflow-2-lines,
        .text-overflow-3-lines {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
        }

        .text-secondary {
            color: #666 !important;
        }

        .nh-thumb img {
            width: 100%;
            height: auto;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        a {
            color: #333;
            background-color: transparent;
        }

        .list-inline,
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .nh-thumb.nh-thumb--32 {
            width: 32px;
        }

        .nh-thumb {
            display: inline-block;
            overflow: hidden;
            position: relative;
        }

        .truncate-100 {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .small,
        small {
            font-size: 80%;
            font-weight: 400;
        }

        .nh-thumb>img {

            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            max-width: 100%;
            min-height: 100%;
        }

        .page-home .main {
            background: #fff url(../images/home-bg.jpg) no-repeat top;
        }

        .bg-secondary {
            background-color: #666 !important;
        }

        .navbar-expand {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-flow: row nowrap;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid {
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-dark .navbar-brand,
        .navbar-dark .navbar-brand:focus,
        .navbar-dark .navbar-brand:hover,
        .navbar-dark .navbar-nav .nav-link,
        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 1rem;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-expand .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar,
        .navbar>.container,
        .navbar>.container-fluid {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .list-inline,
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -webkit-align-items: center !important;
            -moz-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .pb-1,
        .py-1 {
            padding-bottom: .25rem !important;
        }

        .pt-1,
        .py-1 {
            padding-top: .25rem !important;
        }

        .header__search-form {
            position: absolute;
            left: 20%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
        }

        .header__search-form {
            width: 26.875rem;
            position: relative;
        }

        .header__search-form .form-control {
            border-width: 2px;
            padding-left: 1.5rem;
            padding-right: 4.25rem;
        }

        .border-primary {
            border-color: #b78a28 !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 40px;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #e6e6e6;
            -webkit-border-radius: 1.25rem;
            -moz-border-radius: 1.25rem;
            border-radius: 1.25rem;
            -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            -o-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -moz-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -moz-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out, -moz-box-shadow .15s ease-in-out;
        }

        .header__search-form .btn {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            font-size: 1.25rem;
        }

        .dropdown-menu.dropdown-menu--profile {
            min-width: 280px;
        }

        .navbar-nav--auth .dropdown-menu {
            margin-top: 0;
            -webkit-box-shadow: 0 10px 15px 0 rgb(0 0 0 / 9%);
            -moz-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .09);
            box-shadow: 0 10px 15px 0 rgb(0 0 0 / 9%);
            -webkit-transform: none !important;
            -moz-transform: none !important;
            -ms-transform: none !important;
            -o-transform: none !important;
            transform: none !important;
            top: 100% !important;
            right: 0 !important;
            left: auto !important;
            overflow: hidden;
        }

        .dropdown-menu {
            -webkit-box-shadow: 0 10px 15px 0 rgb(0 0 0 / 9%);
            -moz-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .09);
            box-shadow: 0 10px 15px 0 rgb(0 0 0 / 9%);
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important;
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important;
        }

        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .75rem 0;
            margin: 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding-box;
            background-clip: padding-box;
            border: 0 solid rgba(0, 0, 0, .15);
            -webkit-border-radius: .5rem;
            -moz-border-radius: .5rem;
            border-radius: .5rem;
        }

        .nh-avatar.nh-avatar--24 {
            width: 1.5rem;
        }

        .nh-avatar {
            position: relative;
        }

        .nh-avatar>img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            margin: auto;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        img,
        svg {
            vertical-align: middle;
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
    <div id="app">
        <div style="min-height: 194px;">
            <header class="header">
                <nav class="top-nav">
                    <div class="container d-flex">
                        <!-- header -->
                        <ul class="navbar-nav--auth list-unstyled mb-0 ml-auto d-flex justify-content-center">

                            <li class="nav-item dropdown"><a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="d-flex align-items-center text-body px-3 py-2">
                                    <div class="nh-avatar nh-avatar--24 mr-2"><img data-src="https://static.cdnno.com/user/1e040144fc199601cac2b9b379aaa75a/50.jpg?1603814571" src="https://static.cdnno.com/user/1e040144fc199601cac2b9b379aaa75a/50.jpg?1603814571" lazy="loaded"></div>
                                    <?= $account->name ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu--profile px-4">
                                    <div class="media mb-4">
                                        <div class="nh-avatar nh-avatar--45 mr-3"><img data-src="https://static.cdnno.com/user/1e040144fc199601cac2b9b379aaa75a/50.jpg?1603814571" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading"></div>
                                        <div class="media-body">
                                            <div class="font-weight-semibold mb-1"><?= $account->name ?></div>

                                        </div>
                                    </div>
                                    <ul class="list-unstyled m-0">
                                        <?php 
                                            if($account->role_id==1){
                                                echo 
                                                "
                                                    <li class='mt-2'><a href='author?direct=novel-case' class='d-block py-2'>
                                                    T??? truy???n
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='author' class='d-block py-2'>
                                                            C?? nh??n
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='author?direct=setting' class='d-block py-2'>
                                                            C??i ?????t
                                                        </a>
                                                    </li>
                                                    <li class='dropdown-divider'></li>
                                                    <li><a href='?direct=logout' class='d-block py-2'>
                                                            Tho??t
                                                        </a>
                                                    </li>
                                                ";
                                            }else if($account->role_id==2){
                                                echo 
                                                "
                                                    <li class='mt-2'><a href='user?direct=novel-case' class='d-block py-2'>
                                                    T??? truy???n
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='user' class='d-block py-2'>
                                                            C?? nh??n
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='user?direct=setting' class='d-block py-2'>
                                                            C??i ?????t
                                                        </a>
                                                    </li>
                                                    <li class='dropdown-divider'></li>
                                                    <li><a href='?direct=logout' class='d-block py-2'>
                                                            Tho??t
                                                        </a>
                                                    </li>
                                                ";
                                            }else if($account->role_id==3){
                                                echo 
                                                "
                                                    <li class='mt-2'><a href='admin?direct=novel-case' class='d-block py-2'>
                                                    T??? truy???n
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='admin' class='d-block py-2'>
                                                            C?? nh??n
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='admin?direct=setting' class='d-block py-2'>
                                                            C??i ?????t
                                                        </a>
                                                    </li>
                                                    <li class='dropdown-divider'></li>
                                                    <li><a href='?direct=logout' class='d-block py-2'>
                                                            Tho??t
                                                        </a>
                                                    </li>
                                                ";
                                            }else {

                                            }

                                        
                                        ?>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!---->
                    </div>
                </nav>
                <!-- logo +search + t??? truy???n -->
                <div class="header-content">
                    <div class="container d-flex align-items-center justify-content-between">
                        <a href="./" class="brand-link">
                            <img src="../Views/partial/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="cl-black">TruyenCuaToi</span>
                        </a>
                        <div method="post" class="header__search-form ml-auto">
                            <input type="text" name="q" placeholder="T??m ki???m" class="form-control border-primary">
                            <button class="btn bg-transparent text-primary shadow-none">
                                <i class="nh-icon icon-search float-left"></i>
                            </button>
                        </div>
                        <ul class="header__quick-nav d-flex list-unstyled my-0 ml-auto">
                            <li class="px-1">
                                <a href="admin?direct=novel-case" class="d-flex align-items-center btn btn-outline-secondary btn-sm btn-block justify-content-center rounded-2" style="cursor: pointer;">
                                    <i class="nh-icon icon-book mr-2"></i>T??? truy???n
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="navbar navbar--main navbar-expand navbar-dark bg-secondary">
                    <div class="container px-3">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown dropdown-hover"><a href="javascript:void(0)" class="nav-link d-flex align-items-center"><i class="nh-icon icon-menu fz-13 mr-2"></i>
                                    Th??? lo???i
                                </a>
                                <div class="dropdown-menu dropdown-menu--category">
                                    <div class="row no-gutters"><a href="/truyen" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>T???t c???
                                        </a><a href="/truyen?genre=2" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Ti??n Hi???p
                                        </a><a href="/truyen?genre=3" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Huy???n Huy???n
                                        </a><a href="/truyen?genre=4" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Khoa Huy???n
                                        </a><a href="/truyen?genre=5" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>V??ng Du
                                        </a><a href="/truyen?genre=6" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>???? Th???
                                        </a><a href="/truyen?genre=7" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>?????ng Nh??n
                                        </a><a href="/truyen?genre=8" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>L???ch S???
                                        </a><a href="/truyen?genre=9" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>C???nh K???
                                        </a><a href="/truyen?genre=11" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Huy???n Nghi
                                        </a><a href="/truyen?genre=12" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Ki???m Hi???p
                                        </a><a href="/truyen?genre=20" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>K??? ???o
                                        </a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover"><a href="/bang-xep-hang" class="nav-link d-flex align-items-center">
                                    B???ng x???p h???ng
                                </a>
                                <div class="dropdown-menu"><a href="/bang-xep-hang?rank_type=6" class="dropdown-item">Th???nh h??nh</a><a href="/bang-xep-hang?rank_type=1" class="dropdown-item">?????c nhi???u</a><a href="/bang-xep-hang?rank_type=5" class="dropdown-item">T???ng th?????ng</a><a href="/bang-xep-hang?rank_type=2" class="dropdown-item">????? c???</a><a href="/bang-xep-hang?rank_type=4" class="dropdown-item">Y??u th??ch</a><a href="/bang-xep-hang?rank_type=3" class="dropdown-item">Th???o lu???n</a></div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="" class="nav-link d-flex align-items-center"><i class="nh-icon icon-up mr-2 fz-20"></i>
                                    ????ng
                                </a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
        <main class="main  ">
            <div class="container">
                <!-- ????? c??? + ??ang ?????c -->
                <div class="page-content rounded-2">
                    <div class="row">
                        <div class="col-8">
                            <section class="nh-section">
                                <div class="d-flex align-items-center mb-4">
                                    <h2 class="h4 mb-0">Bi??n t???p vi??n ????? c???</h2><a href="/truyen?sort_by=new_chap_at&amp;props=1" class="link--see-more ml-auto text-primary"> Xem t???t c??? </a>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-co-sau-cai-hack/150.jpg?1623746992" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a class="d-block">Ta C?? S??u C??i Hack</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Ng?????i x??a k??? l???i:Y??u ma co?? th???? bi???n h??a th??nh ng?????i, gi???u ??? trong ????m ng?????i, nh???m ng?????i m?? ph???."Ta u???ng qua gi??, nu???t qua c??t, l??u l???c ch??n tr???i m??y bay xu???ng."??i???n Vi m???t ng???m nu???t v??o Thao Thi???t, h???n l???n n???a m???nh l??n, trong tay nh???c l??n m???t t??? c??n n???ng l??u tinh xi???ng x??ch ch??y, ??nh m???t b??nh t??nh m?? xa x??i.Truy???n r???t ch???c tay m???ch truy???n th??ng ko t???c, t??nh c??ch c???a nvc c??ng d???n d???n tr?????ng th??nh v???n ch??a th???y c???nh tranh b???c v???t n??o, g???p g??i xinh ?????n ?????ng t??m nh??ng v???n gi??? v???ng t???nh t??o, do mu???n tr?????ng th??nh nhanh n??n nvc k???t h???p vs hack v?? c??ng ph??p n??n sau n??y ch???c s??? g???p kh?? nhi???u nh??n duy??n, v???n ko bi???t nvc l?? chung th???y vs 1 ng?????i hay h???u cung kh???p n??i!!Kh??ng ph???i truy???n yy v?? n??o t??n nh?? t??n truy???n ????u nh?? </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> C???n Th???n </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huy???n Huy???n</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a  class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/dai-phung-go-mo-cam-canh-nguoi/150.jpg?1617286846" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a  class="d-block">?????i Ph???ng ????? Canh Nh??n</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> ??? Vinh danh Minh Ch??? ???B??t B??tTh??? gi???i n??y, c?? nho; c?? ?????o; c?? ph???t; c?? y??u; c?? thu???t s??.T???t nghi???p tr?????ng c???nh s??t H???a Th???t An y???u ???t t???nh l???i, ph??t hi???n ch??nh m??nh th??n ??? trong lao ng???c, ba ng??y sau l??u vong bi??n thu???. . . . .H???n m???i ?????u m???c ????ch ch???ng qua l?? t??? v???, thu???n ti???n t???i c??i n??y kh??ng c?? nh??n quy???n trong x?? h???i l??m c??i ph?? gia ??ng nh??n nh?? s???ng qua ng??y....Nhi???u n??m v??? sau, H???a Th???t An quay ?????u tr?????c kia, ph??a sau l?? s???m ???? m???t ??i ?????ch nh??n, c??ng v???i t???ng ch???ng b???ch c???t.Cu???n cu???n Tr?????ng Giang ????ng n?????c tr??i, b???t n?????c ????i t???n anh h??ng, th??? phi th??nh b???i quay ?????u kh??ng.N??i xanh v???n t???i, m???y chuy???n tr???i chi???u ?????.PS: Quy???n s??ch kh??ng bi k???ch! </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> M???i B??o Ti???u Lang Qu??n </span></div><a href="/truyen?genre=2"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Ti??n Hi???p</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a  class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/mot-nguoi-dac-dao/150.jpg?1608635549" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a  class="d-block">M???t Ng?????i ?????c ?????o</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Tr???n Th??c ??i t???i Nam B???c tri???u tri???u Tr???n, th??nh m???t v??? t??n th???t, v???n cho r???ng n??n ??i l?? l???ch s??? l??? tuy???n, kh??ng ngh?? t???i h???a phong ?????t nhi??n li???n kh??ng ????ng."L???i l?? luy???n kh?? tu ch??n, l???i l?? h????ng h???a c??ng ?????c, kia n??i kh??ng ch???ng, ta c??ng ch??? c?? th??? tr?????c c???u c??i tr?????ng sinh ?????c ?????o."????y ch??nh l?? ??????B??ng li???u m???t b??n, tu??ng ???nh d?????i, d???ng th???ng l??n s???ng l??ng ch?? duy??n b??? ??i;Kh??a t??m vi??n, c???m ?? m??, tr??ng s??ng thanh phong ch??? n??i tr?????ng sinh l???i n??i.L???i n??i:Thi??n ?????o u l???i xa, qu??? th???n mang mu???i nhi??n.Nh???t tr???c chi c??ch, s???nh vu c???u.?????? ?????????C???U HOA??? C???U ????NH GI?????C???U N??M G???CH V??O M???T??? </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Chi???n B??o Nhi???m Huy???t </span></div><a href="/truyen?genre=2"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Ti??n Hi???p</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a  class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ban-tang-khong-muon-lam-anh-de/150.jpg?1625236726" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a  class="d-block">B???n T??ng Kh??ng Mu???n L??m ???nh ?????</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> ??? Vinh danh Minh Ch??? ???L?????i ??n c??m??? m???t c??u gi???i thi???u v???n t???t ??? ????y l?? m???t thi???u ni??n v?? t??ng b??? huynh ????? sinh ????i h??? v??o gi???i v??n ngh???, k???t qu??? kh??ng c???n th???n th??nh ???nh ????? chuy???n x??a.??? ?????ng ?????n gi???i thi???u v???n t???t ??? H???a Tr??n l?? c??i t???i ch??a mi???u l???n l??n c?? nhi.L??o ch??? tr?? m???t tay ??em h???n nu??i l???n, hai ng?????i kh??ng ph???i ph??? t??? l???i h??n h???n ph??? t???.H???a Tr??n v???n ?????nh hai m????i tu???i sau ch??nh th???c v??o gi???i, vi s?? ph??? d?????ng l??o t???ng chung.K???t qu???, m?????i t??m tu???i n??m ????, m???t c??i t??? x??ng l?? h???n ca ca ng?????i l???i li??n h??? ?????n h???n.N??i m???u th??n qua ?????i, h???i h???n mu???n hay kh??ng t???i t??? b??i.H???a Tr??n suy ngh?? th???t l??u, cu???i c??ng v???n nghe theo s?? ph??? ????? ngh???.L?? thanh ????ng c??? ph???t c??n l?? h???ng tr???n th??? t???c, l???i xu???ng n??i nh??n xem m???i quy???t ?????nh.Nh??ng m??.D?????i n??i ch??? ?????i h???n l???i l??...Th??n l?? m?????i t??m tuy???n ngh??? nh??n sinh ????i ca ca ??em h???n n??m ??? nh?? b??n trong l??m th??? th??n, ch??nh m??nh ch???y! ???????ng!!"Ti???u s?? ph???, ng????i li???n gi??p ta n??y m???t l???n ??i."Ca ca ng?????i ?????i di???n nh??n v??? m???t m???ng so H???a Tr??n, kh??c kh??ng ra n?????c m???t n??i: "Ta ????p ??n t??nh, ????p m???t m??i, m???t d??y m??y d???n m???i c???u t???i n??y b??? h??.""K???t qu??? hi???n t???i l??m tr???n b???nh lo??t m??i, ta v??? sau c??n l??m ng?????i nh?? th??? n??o?""Xin ng????i, gi??p ta m???t ch??t, di???n h???o di???n h?? c??ng kh??ng ????ng k???!"H???a Tr??n nh??n tr?????c m???t ????? r???c 5 v???n kh???i ti???n, do d???.H???n nh??? t???i g??c t??y nam m??a d????t trai ???????ng, c??ng v???i run run r???y r???y T??ng Kinh c??c, m???c th???m t??nh t??nh s???."Ti???u t??ng m???t l??ng h?????ng ph???t, ch??a ???????c thi???n t??m, c?? th??? n??o tu??? ti???n ti???n v??o chuy???n h???ng tr???n..."H???a Tr??n m???t m???t nghi??m t??c n??i: "??????n th??m ti???n." </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> ????o An D???t </span></div><a href="/truyen?genre=6"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">???? Th???</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a  class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/cam-y-1/150.jpg?1621451276" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a  class="d-block">C???m Y</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> N???u nh?? m???t c?? nh??n b???t h???nh v??? t???i Thi??n Kh???i n??m th??? s??u.L??c n??y t??nh tr???ng v?? v???ng, y??m ?????ng ho??nh h??nh, b??ch quan ?????u ????, d??n ch??ng l???m than.?????ng ph??i tranh gi??nh nh?? tr?????c c??n t???i k??o d??i.Y??n V?? Giang Nam b??n trong, t??i t??? nh?? tr?????c mua vui, c??c giai nh??n h??t hay m??a gi???i.C??c l??u d??n ??o r??ch qu???n manh, ????i kh??t ???? t???i c???c h???n.Li??u ????ng H???u Kim thi???t k??? ???? m??i ??ao xo??n xo???t, nh??n th??m thu???ng thi??n h???.M?? ????ng v??o l??c n??y, Tr????ng T??nh Nh???t ng?? ph???c gia th??n, T?? Xu??n ??ao t???i eo.H???n tr??? th??nh c??i n??y th???i ?????i, l???y hung t??n c??ng b???o l???c m?? n???i ti???ng thi??n h??? C???m Y V??? Gi??o ??y.T???i c??i n??y kh??ng n??i l?? th???i ?????i, v???a v???n tr??? th??nh c???c k??? kh??ng c???n gi???ng ?????o l?? ng?????i, h???n b?????c v??o cu???c chi???n quan tr?????ng kh???c li???t gi???a ????ng X?????ng v?? C???m Y V???. </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Th?????ng S??n ????? L??o H??? Ng???ch </span></div><a href="/truyen?genre=8"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">L???ch S???</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a  class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-he-chua-tri-tro-choi/150.jpg?1625550720" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a  class="d-block">Ta H??? Ch???a Tr??? Tr?? Ch??i</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> C???nh s??t ?????ng ch??, n???u nh?? ta n??i ????y l?? m???t c??i nh??n nh?? h??? ch???a tr??? tr?? ch??i, c??c ng????i tin sao? </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Ng?? H???i Tu Kh??ng ??i???u Tr??? </span></div><a href="/truyen?genre=11"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huy???n Nghi</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a  class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/theo-bi-nu-tong-giam-doc-nhan-nuoi-bat-dau/150.jpg?1623857275" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a  class="d-block">Theo B??? N??? T???ng Gi??m ?????c Nh???n Nu??i B???t ?????u</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Tu????i g????n ba m????i Tr????ng Ph???n Nh?????c tr??? l???i t??? m??nh b???n tu???i n??m ????, l??c n??y ?????i h???n v???n l?? m???t ?????a c?? nhi,l??m kh??ng ???????c ngh???, cu??ng n??i kh??ng ???????c y??u ??????ng, may m???n th??m n??m nam th???n d?????ng th??nh h??? th???ng!N??? l???c li???n c?? h???i b??o, chia ra thu ho???ch.Tr????ng Ph???n Nh?????c c???m th???y t????ng lai ?????u c?? th???, th??? ph???i tr??? th??nh t??? qu???c r???t t???nh c??i kia n??? hoa!Th???ng ?????n ng??y ???? h???n kh??ng xem ch???ng va ph???i ?????n m???t chi???c xe."Ng?????i nh?? ng????i ????u?""Ba ba ch???t r???i.""V???y m??? ng????i ????u r???i?""M??? ??i t??m ba ba."Ng??y th??? hai, c??i n??o ???? b??? ngo??i l???nh gi?? n??? nh??n t???i c?? nhi vi???n, c??? s??? b???i v???y b???t ?????u. </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> L??u Tam L????ng </span></div><a href="/truyen?genre=6"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">???? Th???</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a  class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-tu-luyen-vo-hoc-co-the-bao-kich/150.jpg?1614816849" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a  class="d-block">Ta Tu Luy???n V?? H???c C?? Th??? B???o K??ch</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> ?????i l??o: Ti???u t??? tu luy???n nh?? th??? thu???n th???c, l???i xem dung m???o, ch??? c?? ta ng??y n??y ch??n th??nh Ng?? Ng???n T??? c?? th??? ch???ng l???i, xem ra l?? kh?? c?? ???????c m???t tuy???t th??? k??? t??i a, ta t???i s??? s??? x????ng.L??m Ph??m: ...?????i l??o: ???! Kh??ng c?? kh??? n??ng, nh?? th??? c???n b??! !L??m Ph??m: ...?????i l??o: Ng????i l?? tu luy???n th??? n??o?L??m Ph??m: N??? l???c! Ch??m ch???! T??n ni???m! Thi???u m???t th??? c??ng kh??ng ???????c!??? nh???c nh???: Ph??t ?????ng g???p m?????i l???n b???o k??ch! ! ?????? nh???c nh???: ?????i L???c Ng??u Ma Quy???n ????? thu???n th???c +10! ??? </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> T??n Phong </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huy???n Huy???n</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4">
                            <section id="continue-reading" class="nh-section">
                                <div data-v-2a691ca0="">
                                    <div data-v-2a691ca0="" class="d-flex align-items-center mb-3">
                                        <h2 data-v-2a691ca0="" class="h4 mb-0">??ang ?????c</h2> <a data-v-2a691ca0="" href="/account/library" class="link--see-more ml-auto text-primary">
                                            Xem t???t c???
                                        </a>
                                    </div>
                                    <ul data-v-2a691ca0="" class="list-unstyled m-0">
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/tran-yeu-vien-bao-tang" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/tran-yeu-vien-bao-tang/150.jpg?1616044168" src="https://static.cdnno.com/poster/tran-yeu-vien-bao-tang/150.jpg?1616044168" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/tran-yeu-vien-bao-tang">
                                                        Tr???n Y??u Vi???n B???o T??ng
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    ???? ?????c: 1/244
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/tran-yeu-vien-bao-tang/chuong-1" class="float-left"><small data-v-2a691ca0="" class="text-primary">?????c ti???p</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/150.jpg?1625386130" src="https://static.cdnno.com/poster/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/150.jpg?1625386130" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung">
                                                        Kh??ng Th??? Tu Ti??n Ta Ch??? C?? ??i B???i D?????ng H???n S???ng
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    ???? ?????c: 74/74
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/chuong-74" class="float-left"><small data-v-2a691ca0="" class="text-primary">?????c ti???p</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/bat-tu-ta-danh-phai-dong-gia-huyet-toc" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/bat-tu-ta-danh-phai-dong-gia-huyet-toc/150.jpg?1625628237" src="https://static.cdnno.com/poster/bat-tu-ta-danh-phai-dong-gia-huyet-toc/150.jpg?1625628237" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/bat-tu-ta-danh-phai-dong-gia-huyet-toc">
                                                        B???t T???, Ta ????nh Ph???i ????ng Gi??? Huy???t T???c
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    ???? ?????c: 56/68
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/bat-tu-ta-danh-phai-dong-gia-huyet-toc/chuong-56" class="float-left"><small data-v-2a691ca0="" class="text-primary">?????c ti???p</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/toan-cau-quai-vat-tho-san" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/toan-cau-quai-vat-tho-san/150.jpg?1622112950" src="https://static.cdnno.com/poster/toan-cau-quai-vat-tho-san/150.jpg?1622112950" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/toan-cau-quai-vat-tho-san">
                                                        To??n C???u : Qu??i V???t Th??? S??n
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    ???? ?????c: 1/194
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/toan-cau-quai-vat-tho-san/chuong-1" class="float-left"><small data-v-2a691ca0="" class="text-primary">?????c ti???p</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan/150.jpg?1623941213" src="https://static.cdnno.com/poster/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan/150.jpg?1623941213" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan">
                                                        Nh?? Ta T???c Tr?????ng M???i Ng??y Ngh?? ?????n L??m Ph???n
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    ???? ?????c: 1/382
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan/chuong-1" class="float-left"><small data-v-2a691ca0="" class="text-primary">?????c ti???p</small></a>
                                        </li>
                                        <!---->
                                    </ul>
                                </div>
                            </section>
                            <hr>
                            <section class="nh-section">
                                <div class="d-flex align-items-center mb-3">
                                    <h2 class="h4 mb-0">H?????ng d???n</h2><a href="/faqs" class="link--see-more ml-auto text-primary"> Xem t???t c??? </a>
                                </div>
                                <ul class="list-unstyled m-0 nh-list">
                                    <li><a href="/faqs#1" class="d-block py-1 mb-1 text-truncate">L??m sao ?????i m??u n???n, c??? ch???, font ch??? khi ?????c tr??n web/app</a></li>
                                    <li><a href="/faqs#2" class="d-block py-1 mb-1 text-truncate">Hoa l?? g?? v?? d??ng ????? l??m g???</a></li>
                                    <li><a href="/faqs#3" class="d-block py-1 mb-1 text-truncate">L??m sao ????? c?? Hoa?</a></li>
                                    <li><a href="/faqs#4" class="d-block py-1 mb-1 text-truncate">Hoa t???n t???i ???????c bao l??u?</a></li>
                                    <li><a href="/faqs#5" class="d-block py-1 mb-1 text-truncate">Quy ?????nh khi t???ng Hoa</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- m???i c???p nh???t -->
                <section class="nh-section py-3">
                    <div class="d-flex align-items-center mb-3 ">
                        <h2 class="h4 mb-0"> M???i c???p nh???t </h2><a href="/truyen" class="link--see-more ml-3 text-primary"> Xem t???t c??? </a>
                    </div>
                    <table class="table table-striped table-borderless table-hover border-top fz-14">
                        <tbody>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huy???n Huy???n</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">Ta C?? S??u C??i Hack</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-220" class="text-overflow-1-lines">Ch????ng 220: Phu nh??n</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">C???n Th???n</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Nguy???n Nh?? ??</span></td>
                                <td class="align-middle text-tertiary text-right">m???t ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">K??? ???o</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">Anh H??ng V?? ?????ch Chi K??? S??</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-441" class="text-overflow-1-lines">Ch????ng 441: Quy???t s??ch</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">D??? H??n Th?? Sinh</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huy???n Linh</span></td>
                                <td class="align-middle text-tertiary text-right">5 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Ti??n Hi???p</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">?????i Ph???ng ????? Canh Nh??n</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-901" class="text-overflow-1-lines">Ch????ng 83: C???u m???ng</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">M???i B??o Ti???u Lang Qu??n</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Ti???u Mi??n Hoa</span></td>
                                <td class="align-middle text-tertiary text-right">5 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huy???n Huy???n</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">Ta C?? M???t Tr????ng V?? H???c B???ng</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-327" class="text-overflow-1-lines">Ch????ng 327: ?????o c???nh c???u tr???ng, tu th??nh M???c V?? Ph??n Th??n thu???t</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Tr??ng Phong H???a Di???m Tr??</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Phan Phong</span></td>
                                <td class="align-middle text-tertiary text-right">5 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">?????ng Nh??n</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">V???n Gi???i Gi???i M???ng S??</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-1049" class="text-overflow-1-lines">Ch????ng 1049: tr?? gi???i h??n th???y</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Mi??n Y V???</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huy???n Linh</span></td>
                                <td class="align-middle text-tertiary text-right">6 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Ti??n Hi???p</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">T???i C?????ng Trang B???c ????? Ki???m H??? Th???ng</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-1710" class="text-overflow-1-lines">Ch????ng 1710: Ng????i c??n tr??? hai l???n thu ph???</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Th??i Th?????ng B??? Y</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Nguy???n Nh?? ??</span></td>
                                <td class="align-middle text-tertiary text-right">8 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">???? Th???</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">C??i N??y H???c C???n B?? Kh??ng ????n Gi???n</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-826" class="text-overflow-1-lines">Ch????ng 835: H???ng b??t, l???i n???i danh</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Ti??u Thanh Nguy???t</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Itachi</span></td>
                                <td class="align-middle text-tertiary text-right">9 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Ti??n Hi???p</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">Th???n V?? Ch?? T??n</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-2525" class="text-overflow-1-lines">Ch????ng 2525: Cam t??m t??nh nguy???n</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">?????i Ph??? ????ch Y??n 121</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Dzung Ki???u</span></td>
                                <td class="align-middle text-tertiary text-right">9 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Ti??n Hi???p</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">Ta T??? Trong Chi???n ?????u D?? ??m R??t Ra Thu???c T??nh</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-138" class="text-overflow-1-lines">Ch????ng 138: ????nh c?????c</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">V?? Tam Mao</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Inoha</span></td>
                                <td class="align-middle text-tertiary text-right">9 ph??t tr?????c</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Ti??n Hi???p</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="">M???t Ng?????i ?????c ?????o</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="/chuong-440" class="text-overflow-1-lines">Ch????ng 440: Th???p ??i???n l???p c??n, h??ng chi nh?? c???! ??? r???t c???c hai h???p m???t ???</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Chi???n B??o Nhi???m Huy???t</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huy???n Linh</span></td>
                                <td class="align-middle text-tertiary text-right">12 ph??t tr?????c</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>

            <div class="container">
                <div class="row py-4">
                    <div class="col-8">
                        <section class="nh-section">
                            <div class="d-flex align-items-center mb-4">
                                <h2 class="h4 mb-3"> ????nh gi?? cao </h2><a href="/truyen?sort_by=review_score" class="link--see-more ml-auto text-primary"> Xem t???t c??? </a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="media"><a href="" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/150.jpg?1625386130" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="" class="d-block">Kh??ng Th??? Tu Ti??n Ta Ch??? C?? ??i B???i D?????ng H???n S???ng</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 4 ????nh gi?? </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> Tr?????c ????ng Ti??n c???nh ?????i tu s?? V????ng Tri???t b???i v?? ????? ki???p th???t b???i, linh h???n xuy??n qua ?????n m???t c??i H???n th?? c??ng nh??n lo???i s???ng chung h??a b??nh V?? H???n th??? gi???i.T???i x??c ?????nh th??? gi???i n??y kh??ng c??ch n??o tu ti??n v??? sau, sinh v?? kh??? luy???n(cu???c s???ng n??y th???t l?? nh??m ch??n kh??ng c?? g?? ????ng ????? l??u luy???n c???) h???n, r??i v??o ???????ng c??ng ch??? c?? th??? th??ch ???ng th??? gi???i n??y.Th??? l??. . ."Caterpie, tr??m va??n n??m ti???n h??a!""Ra ??i! Rayquaza. . . A kh??ng, Thi??n Kh??ng Long!" </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> H??? Th??? C???m </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huy???n Huy???n</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="media"><a href="" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/toan-dan-huyen-huyen-gia-toc-duy-nhat-lao-to-tong-gap-tram-lan-thuong-cho/150.jpg?1625240539" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="" class="d-block">To??n D??n Huy???n Huy???n Gia T???c: Duy Nh???t L??o T??? T??ng, G???p Tr??m L???n Th?????ng Cho</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 13 ????nh gi?? </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> ?? B.faloo m???ng ti???u thuy???t ?????c nh???t v?? nh??? k?? h???p ?????ng ti???u thuy???t: To??n d??n Huy???n Huy???n gia t???c: Duy nh???t l??o t??? t??ng, g???p tr??m l???n th?????ng cho ??Th??? gi???i kinh bi???n, to??n c???u m???i ng?????i xuy??n vi???t di???n t??ch v?? ng???n Huy???n Huy???n D??? Gi???i ?????i l???c, tr??? th??nh v?? h???c gia t???c Thi???u T???c Tr?????ng.T??ng th???c l???c l??n, ????? th??ng quy???n ph??t bi???u, n???m gi??? gia t???c quy???n b??nh, cu???i c??ng tr??? th??nh t???c tr?????ng, l?? t???t c??? tr?????c ng?????i k??? chuy???n c???n l??m.M???i sinh t???n b???y ng??y bi???t c?? m???t l???n b???o r????ng c?? h???i, m?????i c??i b???o r????ng nhi???m m???t c??i m??? ra, ng???u nhi??n ?????t ???????c c??ng ph??p, ??an d?????c c??c lo???i(ch???).Tr????ng S??? Huy???n c??ng l?? m???t th??nh vi??n trong ????, l???i so v???i nh???ng ng?????i kh??c s???m xuy??n vi???t 45 n??m, th??n l?? gia t???c duy nh???t l??o t??? t??ng, ??? kh??c ng?????i c??n ??ang v?? t???c tr?????ng ph???n ?????u l??c, ???? s??? h???u gia t???c t???i cao quy???n quy???t ?????nh.Kh??ng ch??? c?? nh?? v???y, h???n c??n gi??c t???nh ?????c th?? g???p b???i n??ng l???c, ti??u hao b???t k??? c??ng ph??p n??o, ??an d?????c c??c lo???i(ch???), ?????u c?? th??? tuy???n tr???ch hi???u qu??? ho???c s??? l?????ng g???p tr??m l???n t??ng ph??c."Keng, ph??t hi???n huy???n giai ??an d?????c Tr?? Nhan ??an, ti??u hao ph??a sau c?? th??? tuy???n ch???n tr??? xu???ng g???p b???i."M???t: Tr?? Nhan ??an (v??nh b???o thanh xu??n )X 100Hai: Duy??n Th??? ??an (t??ng th??? tr??m n??m )X 10Ba: Thanh xu??n ??an (v??nh b???o thanh xu??n, t??ng th??? tr??m n??m )X 1"Ch??c m???ng ng??i tr??? th??nh t???c tr?????ng, gia t???c b???n kh???i ???? ?????i v???i ng??i m??? ra.""Ch??c m???ng ng??i tr??? th??nh t???c tr?????ng, k??ch ho???t t???c tr?????ng chuy??n ch??c k??? n??ng to??n t???c ?????ng t??m (?????i ?????o c???p k??? n??ng, m??? ra ph??a sau th???c l???c v?? to??n t???c th??nh vi??n th???c l???c ??i???p gia t???ng c???ng, kh??ng th???i gian cold-down, v?? th???i gian h???n ch???. )"Ch??c m???ng ng??i tr??? th??nh t???c tr?????ng, k??ch ho???t t???c tr?????ng chuy??n ch??c skill b??? ?????ng ?????ng b??? (?????i ?????o c???p k??? n??ng, ng??i ??em b??? ?????ng thu ???????c th??nh vi??n gia t???c ??? con ???????ng tu luy???n b??n tr??n to??n b??? thu ho???ch. )MAIN THEO H?????NG PH??T TRI???N GIA T???C, V?? T???C TR?????NG C?? TH??? ??I???P GIA TO??N T???C TH???C L???C, CHO N??N PH??T TRI???N GIA T???C L?? TR??N H???T. ?????U TH??NG C???U HOA T????I, C???U ????NH GI??, C???U BUFF K???O. </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> H???ng Hoang Tu Ti??n Gi??? </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huy???n Huy???n</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="media"><a href="" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/game-of-thrones-thuy-long-chi-no/150.jpg?1624855572" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="" class="d-block">Game Of Thrones: Th???y Long Chi N???</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 5 ????nh gi?? </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> Xuy??n qua tr??? th??nh ng?????i Andals, ng?????i Rhoynar c??ng Ti??n D??n chi V????ng, b???y v????ng qu???c h???p ph??p k??? th???ng tr??? v?? to??n c???nh ng?????i b???o v???, 'Ch??n Long' Viserys ?? Targaryen tam th???. </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> T??? D??? B??ng K??? L??m </span></div><a href="/truyen?genre=7"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">?????ng Nh??n</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="media"><a href="" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/tam-quoc-trieu-van-chi-bat-dau-cuoi-dieu-thuyen/150.jpg?1624699773" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="" class="d-block">Tam Qu???c Tri???u V??n Chi B???t ?????u C?????i ??i??u Thuy???n</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 3 ????nh gi?? </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> ( c??? s??? n???i dung c???t truy???n, Tam Qu???c ng???t s???ng ) tr???ng sinh tam qu???c, h???n xuy??n Tri???u V??n. V???n cho r???ng l?? ba mang v???a m??? c???c, kh??ng ngh?? t???i l???i gi??c t???nh m???nh nh???t tranh b?? h??? th???ng, tr???c ti???p v????ng n??? tung c???c. Keng! T??c ch??? m??? ra t??n th??? l??? bao, ch??c m???ng t??c ch??? thu ho???ch ???????c Tri???u V??n chuy??n ch??c trang b??? ?????? Long ?????m L?????ng Ng??n Th????ng. Keng! Ch??c m???ng t??c ch??? th??nh c??ng tri???u ho??n Truy???n Thuy???t c???p v?? t?????ng Nh???c Phi. Keng! Ch??c m???ng t??c ch??? th??nh c??ng tri???u ho??n Truy???n Thuy???t c???p binh s?? Y???n V??n Th???p B??t K???. L??? B???: "Ta L??? B??? thi??n h??? v?? ?????ch, nh??ng Tri???u V??n l?? thi??n..." L??u B???: "Thi??n h??? th????ng binh kh?? v???n chung t??m ?????u, Tri???u T??? Long ?????c chi???m m???t th???ch, nh???ng ng?????i c??n l???i ng?????c l???i thi???u hai ?????u." T??o Th??o: "Nay thi??n h??? anh h??ng duy v??n c??ng thao tai." T??n S??ch: "Ta c??ng T??? Long l?? tay ch??n huynh ?????, nguy???n mang theo Giang ????ng nhi lang c??ng huynh tr?????ng ?????ng m??u ?????i nghi???p." ??i??u Thuy???n: "T??? Long ca ca, coi nh?? tr???i nam ?????t b???c, Ti???u Thi???n y nguy??n..." Th??i Di???m: "Hi???u nh??n s???c tr???i m??? xem v??n, ???????c cu??ng T?? Qu??n, ng???i cu??ng T?? Qu??n." Ch??n M???t: "Nguy???n v?? T??y Nam phong, m???t nh???p qu??n trong l??ng." ?????ng B???ch: "Ta y??u ng????i nh?? v???y, nh??ng ng????i l???i ??em ??n nhu l??u cho ng?????i kh??c." Ti???u Ki???u (x???u h??? ): "Phu qu??n qu??? nhi??n th????ng ph??p tinh x???o, m???i m???t th????ng th???y m??u, tinh chu???n v?? c??ng."Ng???t s???ng nh??ng h???u cung :v </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> L??o Thi??n Th?????ng Ph???n C???t </span></div><a href="/truyen?genre=8"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">L???ch S???</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="media"><a href="" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-pokemon-dai-su-bat-dau-trieu-hoan-giratina/150.jpg?1622453553" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="" class="d-block">Ta, Pokemon ?????i S??, B???t ?????u Tri???u Ho??n Giratina!</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 4 ????nh gi?? </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> ?? B.faloo m???ng ti???u thuy???t ?????c nh???t v?? nh??? k?? h???p ?????ng ti???u thuy???t: Ta, Pokemon ?????i S??, B???t ?????u Tri???u Ho??n Giratina!??Calvados mang theo ?? T???i C?????ng Th??? H??? Th???n ?? h??? th???ng, xuy??n vi???t Pokemon th??? gi???i."Tuy???n h???ng m???t, cho Giovanni l??m c??ng, tr??? th??nh Team Rocket c??n b???, thu ???????c kh??ng gian Th??? H??? Th???n Th??, Palkia!""Tuy???n h???ng hai: Cho Tinh Linh li??n minh l??m c??ng, tr??? th??nh li??n minh l???c so??t quan, thu ???????c th???i gian Th??? H??? Th???n Th??, Dialga!""Tuy???n h???ng ba: Tr??? th??nh t??? do hu???n luy???n gia, thu ???????c b??n trong th??? gi???i Th??? H??? Th???n Th??, Giratina!"?? Th??? H??? Th???n Th?? s??? l??m v?? B???o H??? Th???n, ??? k?? ch??? g???p ph???i nguy hi???m t??nh m???ng, ho???c l?? m???t ??t kh??ng th??? ngh???ch kh???n c???nh th???i ??i???m xu???t hi???n???????i v???i l???n n??y, Calvados bi???u th???, l??m c??ng la?? kh??ng co?? kha?? n??ng ??i l??m, ch??? c?? m???t ???????ng v?? ?????ch, l??m c??i h???ng th?? cho ph??p hu???n luy???n gia m???i(ch??? c??) ph?? h???p t??nh c??ch c???a ta.. . .Calvados: Tri???u ho??n Giratina, ch??? l?? l??? ????? m???t b?????c nh???, d?????i ???c c??i m???c ti??u, go??p ??u?? s??? h???u Th???n Th??!C??? nh?? v???y, Calvados b?????c l??n ung dung v?? ?????ch l??? ?????, c??ng ??? m???t n??m sau. . .B??n trong th??? gi???i m???nh nh???t T??? Th???n, Giratina h??ng l??m Thi??n ?????a, kinh s??? th??? gian to??n b??? ?????ch!H???y Di???t Chi Th???n Mewtwo xu???t th???, trong m??y Rayquaza, b???n. .Pokemon t?? ch???t: Ph??? th??ng, Hi H???u, S??? Thi, Truy???n Thuy???t, Ch?? T??n!???NH POKEMON C???A MAIN (SAU KHI D??NG ?????C TH?? TI???N H??A):H???c Kim Tyranitar: ref.vn/kjezfu??? ??I???N THO???I TH?? VI???T L???I LINK RA TR??NH DUY???T NH??. ?????C TH?? TI???N H??A GI???NG Crystal Steelix, to??n th??n th???y tinh, ho???c b???n Diamond Steelix, to??n th??n kim c????ng.P/S Giratina L?? TH??? H??? TH???N, CH??? Y???U B???O V??? MAIN, ????? MAIN AN TO??N PH??T TRI???N, CH??? KH??NG PH???I B???T ?????U LI???N "Giratina T??? CH???N C???U, D??NG Shadow Force T???N C??NG Caterpie NH??". M?? PH???I C??U TH??NG, X??C TI???N T??NH C???M D???N M???I C?? TH??? NH??? Giratina RA TAY TR??? GI??P.C?? NG?????I NH??? L??M TRUY???N POKEMON. TH???Y B??? N??Y B??N TRUNG ????NH GI?? OK.T??C ???? VI???T H??N 850K CH???. 1 CH????NG T??NH 2K CH??? C??NG PH???I H??N 400C. C???U HOA T????I, C???U ????NH GI??, C???U BUFF K???O, ??? ??? ???_??? ????????? </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> ???nh H???a ???nh H???a </span></div><a href="/truyen?genre=7"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">?????ng Nh??n</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="media"><a href="" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/vu-su-ta-co-the-rut-ra-van-vat/150.jpg?1622269050" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="" class="d-block">Vu S??: Ta Co?? Th???? R??t Ra V???n V???t</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 7 ????nh gi?? </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> Heath xuy??n qua d??? gi???i th???c t???nh ??? si??u ph??m r??t ra h??? th???ng ???, c??ng t???i h??? th???ng tr??? gi??p h??? ??i ?????n vu s?? con ???????ng t???ng b?????c m???t tr??? th??nh th???n chi.Th???c l???c th???p, kh??ng quan h???, si??u ph??m h??? th???ng r??t ra thu???c t??nh.Thi??n ph?? kh??ng ?????, kh??ng quan h???, si??u ph??m h??? th???ng r??t ra thi??n ph??.Huy???t m???ch r??c r?????i, kh??ng quan h???, si??u ph??m h??? th???ng r??t ra cao qu?? huy???t m???ch.V???n v???t ?????u c?? th??? r??t ra, r??t ra v???n v???t.?????? ?????? ?????? ?????? ?????? ?????? ?????? ?????? ?????? ??????Truy???n th???ng vu s?? v??n, s???ng v??n, ti???t t???u nhanh, to??n b??? h??nh tr??nh kh??ng ki???m ch???, nh??n v???t ch??nh t??nh c??ch s??t ph???t qu??? ??o??n, kh??ng c?? bao nhi??u t??nh c???m h??.Ng?????i m???i s??ch m???i, qu??? c???u ???ng h???! </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Vu Y??u V????ng 13 H??o </span></div><a href="/truyen?genre=20"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">K??? ???o</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center mb-4">
                            <h2 class="h4 m-0 font-weight-semibold"> M???i ????nh gi?? </h2><a href="/truyen?sort_by=review_score" class="link--see-more ml-auto text-primary"> Xem t???t c??? </a>
                        </div>
                        <ul class="list-unstyled">
                            <li class="px-4 py-3 pb-4 bg-yellow-white rounded-2 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><a href="/account/profile/1045257"><img src="https://static.cdnno.com/user/c4beb8a16e082b8984699dadc44de69f/50.jpg?1600876250" alt="T??Th???n" width="45" height="45" class="rounded-circle overflow-hidden mr-2"></a></div>
                                    <div class="pl-1">
                                        <div class="text-secondary"><a href="/account/profile/1045257" class="font-weight-semibold text-body">T??Th???n</a> ????nh gi?? </div><a href="/co-tich-the-gioi-manh-nhat-vuong-tu" class="text-danger font-weight-semibold">C??? T??ch Th??? Gi???i M???nh Nh???t V????ng T???</a>
                                    </div>
                                    <div class="ml-auto bg-danger rounded-3 h6 my-0 text-white px-2 py-1"> 3.00 </div>
                                </div>
                                <div class="mt-2 pt-1 text-overflow-3-lines"> truy???n m???i ?????u hay v??? sau nh?? lol. qu??ng ???????ng ??i xin thu???c ch???a l???i nguy???n cu???i c??ng ho?? ra ch??? l?? ??i gom harem. c?? xin thu???c nh??ng l???i kh??ng d??ng.th???ng t??c thu???c lo???i ??em ng?????i th??n (v???) c???a main ra ????? t???o k???ch t??nh c??u ch????ng v?? c???n ?? t?????ng. l??c th?? m???y ng?????i v??? v?? h???u c???n su??t b??? thi??u ch???t, l??c th?? th???ng t??c cho ng?????i b???t c??c 2 v??? c???a main. v??? ?????p th??? kh??ng h**p th?? v?? l?? qu??. v?? b???n 9??? to??n ?????a d??m </div>
                            </li>
                            <li class="px-4 py-3 pb-4 bg-yellow-white rounded-2 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><a href="/account/profile/1012205"><img src="https://static.cdnno.com/user/5adce32285184170399314ca389e43fa/50.jpg?1597982172" alt="uchiha end" width="45" height="45" class="rounded-circle overflow-hidden mr-2"></a></div>
                                    <div class="pl-1">
                                        <div class="text-secondary"><a href="/account/profile/1012205" class="font-weight-semibold text-body">uchiha end</a> ????nh gi?? </div><a href="/bat-tu-ta-danh-phai-dong-gia-huyet-toc" class="text-danger font-weight-semibold">B???t T???, Ta ????nh Ph???i ????ng Gi??? Huy???t T???c</a>
                                    </div>
                                    <div class="ml-auto bg-danger rounded-3 h6 my-0 text-white px-2 py-1"> 4.50 </div>
                                </div>
                                <div class="mt-2 pt-1 text-overflow-3-lines"> t??nh c??ch nh??n v???t h???p gu t :))) ki???u hashirama ???y . N???i dung c???t truy???n th?? ch??? y???u xoay quanh ?????i th?????ng , h??i thi???u 1 t?? ????nh qu??i luy???n c???p . B??? c???c c?? v??? h??i s?? l?????t nh??ng n?? r???t c?? ti???m n??ng ????? ph??t tri???u :)) </div>
                            </li>
                            <li class="px-4 py-3 pb-4 bg-yellow-white rounded-2 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><a href="/account/profile/1061703"><img src="https://static.cdnno.com/user/2e84ba5ff66c169a544098de70dfef3f/50.jpg?1604199818" alt="GBeCW96297" width="45" height="45" class="rounded-circle overflow-hidden mr-2"></a></div>
                                    <div class="pl-1">
                                        <div class="text-secondary"><a href="/account/profile/1061703" class="font-weight-semibold text-body">GBeCW96297</a> ????nh gi?? </div><a href="/toan-dan-huyen-huyen-gia-toc-duy-nhat-lao-to-tong-gap-tram-lan-thuong-cho" class="text-danger font-weight-semibold">To??n D??n Huy???n Huy???n Gia T???c: Duy Nh???t L??o T??? T??ng, G???p Tr??m L???n Th?????ng Cho</a>
                                    </div>
                                    <div class="ml-auto bg-danger rounded-3 h6 my-0 text-white px-2 py-1"> 5.00 </div>
                                </div>
                                <div class="mt-2 pt-1 text-overflow-3-lines"> 9/10.-1 ?? v??? ?????t t??n c???nh gi???i,1 c???nh gi???i th??m 2 t??n ?????c kh?? ch???u vl, l??c t??n n??y l??c t??n n???, kh?? lo???n.Nh??ng m?? truy???n c??ng kh?? hay. </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </main>
        <div id="footer">
            <hr class="my-0">
            <footer data-v-28717880="" class="footer text-center py-4">
                <div data-v-28717880="" class="container">
                    <div data-v-28717880="" class="w-75 mx-auto my-2">
                        
                    </div> <a data-v-28717880="" href="/" class="d-inline-block py-1 my-2"><img data-v-28717880="" alt="logo" width="64" height="64" data-src="/images/logo.png?c0f6192077ebc0ed8c6fedf48dc60048" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading"></a>

                </div>
            </footer>
        </div>
        <div id="login_layout">
            <!---->
            <!---->
            <!---->
            <!---->
        </div>
    </div>
</body>
<?php
include_once "../views/partial/script.php";
?>

</html>