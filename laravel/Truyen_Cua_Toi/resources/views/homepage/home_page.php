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
                                                    Tủ truyện
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='author' class='d-block py-2'>
                                                            Cá nhân
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='author?direct=setting' class='d-block py-2'>
                                                            Cài đặt
                                                        </a>
                                                    </li>
                                                    <li class='dropdown-divider'></li>
                                                    <li><a href='?direct=logout' class='d-block py-2'>
                                                            Thoát
                                                        </a>
                                                    </li>
                                                ";
                                            }else if($account->role_id==2){
                                                echo 
                                                "
                                                    <li class='mt-2'><a href='user?direct=novel-case' class='d-block py-2'>
                                                    Tủ truyện
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='user' class='d-block py-2'>
                                                            Cá nhân
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='user?direct=setting' class='d-block py-2'>
                                                            Cài đặt
                                                        </a>
                                                    </li>
                                                    <li class='dropdown-divider'></li>
                                                    <li><a href='?direct=logout' class='d-block py-2'>
                                                            Thoát
                                                        </a>
                                                    </li>
                                                ";
                                            }else if($account->role_id==3){
                                                echo 
                                                "
                                                    <li class='mt-2'><a href='admin?direct=novel-case' class='d-block py-2'>
                                                    Tủ truyện
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='admin' class='d-block py-2'>
                                                            Cá nhân
                                                        </a>
                                                    </li>
                                                    <li class='mt-2'><a href='admin?direct=setting' class='d-block py-2'>
                                                            Cài đặt
                                                        </a>
                                                    </li>
                                                    <li class='dropdown-divider'></li>
                                                    <li><a href='?direct=logout' class='d-block py-2'>
                                                            Thoát
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
                <!-- logo +search + tủ truyện -->
                <div class="header-content">
                    <div class="container d-flex align-items-center justify-content-between">
                        <a href="./" class="brand-link">
                            <img src="../Views/partial/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="cl-black">TruyenCuaToi</span>
                        </a>
                        <div method="post" class="header__search-form ml-auto">
                            <input type="text" name="q" placeholder="Tìm kiếm" class="form-control border-primary">
                            <button class="btn bg-transparent text-primary shadow-none">
                                <i class="nh-icon icon-search float-left"></i>
                            </button>
                        </div>
                        <ul class="header__quick-nav d-flex list-unstyled my-0 ml-auto">
                            <li class="px-1">
                                <a href="admin?direct=novel-case" class="d-flex align-items-center btn btn-outline-secondary btn-sm btn-block justify-content-center rounded-2" style="cursor: pointer;">
                                    <i class="nh-icon icon-book mr-2"></i>Tủ truyện
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="navbar navbar--main navbar-expand navbar-dark bg-secondary">
                    <div class="container px-3">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown dropdown-hover"><a href="javascript:void(0)" class="nav-link d-flex align-items-center"><i class="nh-icon icon-menu fz-13 mr-2"></i>
                                    Thể loại
                                </a>
                                <div class="dropdown-menu dropdown-menu--category">
                                    <div class="row no-gutters"><a href="/truyen" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Tất cả
                                        </a><a href="/truyen?genre=2" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Tiên Hiệp
                                        </a><a href="/truyen?genre=3" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Huyền Huyễn
                                        </a><a href="/truyen?genre=4" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Khoa Huyễn
                                        </a><a href="/truyen?genre=5" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Võng Du
                                        </a><a href="/truyen?genre=6" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Đô Thị
                                        </a><a href="/truyen?genre=7" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Đồng Nhân
                                        </a><a href="/truyen?genre=8" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Lịch Sử
                                        </a><a href="/truyen?genre=9" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Cạnh Kỹ
                                        </a><a href="/truyen?genre=11" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Huyền Nghi
                                        </a><a href="/truyen?genre=12" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Kiếm Hiệp
                                        </a><a href="/truyen?genre=20" class="dropdown-item col-6 d-flex align-items-center"><i class="svg-icon mr-2"></i>Kỳ Ảo
                                        </a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover"><a href="/bang-xep-hang" class="nav-link d-flex align-items-center">
                                    Bảng xếp hạng
                                </a>
                                <div class="dropdown-menu"><a href="/bang-xep-hang?rank_type=6" class="dropdown-item">Thịnh hành</a><a href="/bang-xep-hang?rank_type=1" class="dropdown-item">Đọc nhiều</a><a href="/bang-xep-hang?rank_type=5" class="dropdown-item">Tặng thưởng</a><a href="/bang-xep-hang?rank_type=2" class="dropdown-item">Đề cử</a><a href="/bang-xep-hang?rank_type=4" class="dropdown-item">Yêu thích</a><a href="/bang-xep-hang?rank_type=3" class="dropdown-item">Thảo luận</a></div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="https://pub.truyen.onl/books/create" class="nav-link d-flex align-items-center"><i class="nh-icon icon-up mr-2 fz-20"></i>
                                    Đăng
                                </a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
        <main class="main  ">
            <div class="container">
                <!-- đề cử + đang đọc -->
                <div class="page-content rounded-2">
                    <div class="row">
                        <div class="col-8">
                            <section class="nh-section">
                                <div class="d-flex align-items-center mb-4">
                                    <h2 class="h4 mb-0">Biên tập viên đề cử</h2><a href="/truyen?sort_by=new_chap_at&amp;props=1" class="link--see-more ml-auto text-primary"> Xem tất cả </a>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/ta-co-sau-cai-hack" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-co-sau-cai-hack/150.jpg?1623746992" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/ta-co-sau-cai-hack" class="d-block">Ta Có Sáu Cái Hack</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Người xưa kể lại:Yêu ma có thể biến hóa thành người, giấu ở trong đám người, nhắm người mà phệ."Ta uống qua gió, nuốt qua cát, lưu lạc chân trời mây bay xuống."Điển Vi một ngụm nuốt vào Thao Thiết, hắn lần nữa mạnh lên, trong tay nhấc lên một tỷ cân nặng lưu tinh xiềng xích chùy, ánh mắt bình tĩnh mà xa xôi.Truyện rất chắc tay mạch truyện thông ko tắc, tính cách của nvc cũng dần dần trưởng thành vẫn chưa thấy cảnh tranh bức vất não, gặp gái xinh đến động tâm nhưng vẫn giữ vững tỉnh táo, do muốn trưởng thành nhanh nên nvc kết hợp vs hack và công pháp nên sau này chắc sẽ gặp khá nhiều nhân duyên, vẫn ko biết nvc là chung thủy vs 1 người hay hậu cung khắp nơi!!Không phải truyện yy và não tàn như tên truyện đâu nhá </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Cổn Thần </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huyền Huyễn</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/dai-phung-go-mo-cam-canh-nguoi" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/dai-phung-go-mo-cam-canh-nguoi/150.jpg?1617286846" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/dai-phung-go-mo-cam-canh-nguoi" class="d-block">Đại Phụng Đả Canh Nhân</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> ❂ Vinh danh Minh Chủ ❂Bút BútThế giới này, có nho; có đạo; có phật; có yêu; có thuật sĩ.Tốt nghiệp trường cảnh sát Hứa Thất An yếu ớt tỉnh lại, phát hiện chính mình thân ở trong lao ngục, ba ngày sau lưu vong biên thuỳ. . . . .Hắn mới đầu mục đích chẳng qua là tự vệ, thuận tiện tại cái này không có nhân quyền trong xã hội làm cái phú gia ông nhàn nhã sống qua ngày....Nhiều năm về sau, Hứa Thất An quay đầu trước kia, phía sau là sớm đã mất đi địch nhân, cùng với từng chồng bạch cốt.Cuồn cuộn Trường Giang đông nước trôi, bọt nước đãi tẫn anh hùng, thị phi thành bại quay đầu không.Núi xanh vẫn tại, mấy chuyến trời chiều đỏ.PS: Quyển sách không bi kịch! </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Mại Báo Tiểu Lang Quân </span></div><a href="/truyen?genre=2"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Tiên Hiệp</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/mot-nguoi-dac-dao" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/mot-nguoi-dac-dao/150.jpg?1608635549" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/mot-nguoi-dac-dao" class="d-block">Một Người Đắc Đạo</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Trần Thác đi tới Nam Bắc triều triều Trần, thành một vị tôn thất, vốn cho rằng nên đi là lịch sử lộ tuyến, không nghĩ tới họa phong đột nhiên liền không đúng."Lại là luyện khí tu chân, lại là hương hỏa công đức, kia nói không chừng, ta cũng chỉ có thể trước cầu cái trường sinh đắc đạo."Đây chính là ——Bóng liễu một bên, tùng ảnh dưới, dựng thẳng lên sống lưng chư duyên bỏ đi;Khóa tâm viên, cầm ý mã, trăng sáng thanh phong chỉ nói trường sinh lời nói.Lại nói:Thiên đạo u lại xa, quỷ thần mang muội nhiên.Nhật trắc chi cách, sảnh vu cửu.—— ——✨CẦU HOA✨ CẦU ĐÁNH GIÁ✨CẦU NÉM GẠCH VÀO MẶT✨ </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Chiến Bào Nhiễm Huyết </span></div><a href="/truyen?genre=2"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Tiên Hiệp</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/ban-tang-khong-muon-lam-anh-de" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ban-tang-khong-muon-lam-anh-de/150.jpg?1625236726" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/ban-tang-khong-muon-lam-anh-de" class="d-block">Bần Tăng Không Muốn Làm Ảnh Đế</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> ❂ Vinh danh Minh Chủ ❂Lười ăn cơm【 một câu giới thiệu vắn tắt 】 đây là một thiếu niên võ tăng bị huynh đệ sinh đôi hố vào giới văn nghệ, kết quả không cẩn thận thành ảnh đế chuyện xưa.【 đứng đắn giới thiệu vắn tắt 】 Hứa Trăn là cái tại chùa miếu lớn lên cô nhi.Lão chủ trì một tay đem hắn nuôi lớn, hai người không phải phụ tử lại hơn hẳn phụ tử.Hứa Trăn vốn định hai mươi tuổi sau chính thức vào giới, vi sư phụ dưỡng lão tống chung.Kết quả, mười tám tuổi năm đó, một cái tự xưng là hắn ca ca người lại liên hệ đến hắn.Nói mẫu thân qua đời, hỏi hắn muốn hay không tới tế bái.Hứa Trăn suy nghĩ thật lâu, cuối cùng vẫn nghe theo sư phụ đề nghị.Là thanh đăng cổ phật còn là hồng trần thế tục, lại xuống núi nhìn xem mới quyết định.Nhưng mà.Dưới núi chờ đợi hắn lại là...Thân là mười tám tuyến nghệ nhân sinh đôi ca ca đem hắn ném ở nhà bên trong làm thế thân, chính mình chạy! Đường!!"Tiểu sư phụ, ngươi liền giúp ta này một lần đi."Ca ca người đại diện nhìn vẻ mặt mộng so Hứa Trăn, khóc không ra nước mắt nói: "Ta đáp ân tình, đáp mặt mũi, mặt dày mày dạn mới cầu tới này bộ hí.""Kết quả hiện tại lâm trận bệnh loét mũi, ta về sau còn làm người như thế nào?""Xin ngươi, giúp ta một chút, diễn hảo diễn hư cũng không đáng kể!"Hứa Trăn nhìn trước mặt đỏ rực 5 vạn khối tiền, do dự.Hắn nhớ tới góc tây nam mưa dột trai đường, cùng với run run rẩy rẩy Tàng Kinh các, mặc thầm tính tính sổ."Tiểu tăng một lòng hướng phật, chưa được thiền tâm, có thể nào tuỳ tiện tiến vào chuyện hồng trần..."Hứa Trăn một mặt nghiêm túc nói: "Đến thêm tiền." </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Đào An Dật </span></div><a href="/truyen?genre=6"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Đô Thị</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/cam-y-1" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/cam-y-1/150.jpg?1621451276" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/cam-y-1" class="d-block">Cẩm Y</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Nếu như một cá nhân bất hạnh về tới Thiên Khải năm thứ sáu.Lúc này tình trạng vô vọng, yêm đảng hoành hành, bách quan đấu đá, dân chúng lầm than.Đảng phái tranh giành như trước còn tại kéo dài.Yên Vũ Giang Nam bên trong, tài tử như trước mua vui, các giai nhân hát hay múa giỏi.Các lưu dân áo rách quần manh, đói khát đã tới cực hạn.Liêu Đông Hậu Kim thiết kỵ đã mài đao xoèn xoẹt, nhìn thèm thuồng thiên hạ.Mà đúng vào lúc này, Trương Tĩnh Nhất ngư phục gia thân, Tú Xuân Đao tại eo.Hắn trở thành cái này thời đại, lấy hung tàn cùng bạo lực mà nổi tiếng thiên hạ Cẩm Y Vệ Giáo Úy.Tại cái này không nói lý thời đại, vừa vặn trở thành cực kỳ không cần giảng đạo lý người, hắn bước vào cuộc chiến quan trường khốc liệt giữa Đông Xưởng và Cẩm Y Vệ. </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Thượng Sơn Đả Lão Hổ Ngạch </span></div><a href="/truyen?genre=8"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Lịch Sử</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/ta-he-chua-tri-tro-choi" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-he-chua-tri-tro-choi/150.jpg?1625550720" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/ta-he-chua-tri-tro-choi" class="d-block">Ta Hệ Chữa Trị Trò Chơi</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Cảnh sát đồng chí, nếu như ta nói đây là một cái nhàn nhã hệ chữa trị trò chơi, các ngươi tin sao? </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Ngã Hội Tu Không Điều Trứ </span></div><a href="/truyen?genre=11"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huyền Nghi</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/theo-bi-nu-tong-giam-doc-nhan-nuoi-bat-dau" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/theo-bi-nu-tong-giam-doc-nhan-nuoi-bat-dau/150.jpg?1623857275" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/theo-bi-nu-tong-giam-doc-nhan-nuoi-bat-dau" class="d-block">Theo Bị Nữ Tổng Giám Đốc Nhận Nuôi Bắt Đầu</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Tuổi gần ba mươi Trương Phồn Nhược trở lại tự mình bốn tuổi năm đó, lúc này đợi hắn vẫn là một đứa cô nhi,làm không được nghề, cũng nói không được yêu đương, may mắn thêm năm nam thần dưỡng thành hệ thống!Nỗ lực liền có hồi báo, chia ra thu hoạch.Trương Phồn Nhược cảm thấy tương lai đều có thể, thề phải trở thành tổ quốc rất tịnh cái kia nụ hoa!Thẳng đến ngày đó hắn không xem chừng va phải đến một chiếc xe."Người nhà ngươi đâu?""Ba ba chết rồi.""Vạy mẹ ngươi đâu rồi?""Mẹ đi tìm ba ba."Ngày thứ hai, cái nào đó bề ngoài lạnh giá nữ nhân tới cô nhi viện, cố sự bởi vậy bắt đầu. </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Lưu Tam Lương </span></div><a href="/truyen?genre=6"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Đô Thị</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media"><a href="https://metruyenchu.com/truyen/ta-tu-luyen-vo-hoc-co-the-bao-kich" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-tu-luyen-vo-hoc-co-the-bao-kich/150.jpg?1614816849" alt="" width="72"></a>
                                            <div class="media-body">
                                                <h2 class="fz-body text-overflow-1-lines mb-2 "><a href="https://metruyenchu.com/truyen/ta-tu-luyen-vo-hoc-co-the-bao-kich" class="d-block">Ta Tu Luyện Võ Học Có Thể Bạo Kích</a></h2>
                                                <div class="text-secondary fz-14 text-overflow-2-lines"> Đại lão: Tiểu tử tu luyện như thế thuần thục, lại xem dung mạo, chỉ có ta ngày này chín thành Ngô Ngạn Tổ có thể chống lại, xem ra là khó có được một tuyệt thế kỳ tài a, ta tới sờ sờ xương.Lâm Phàm: ...Đại lão: Ồ! Không có khả năng, như thế cặn bã! !Lâm Phàm: ...Đại lão: Ngươi là tu luyện thế nào?Lâm Phàm: Nỗ lực! Chăm chỉ! Tín niệm! Thiếu một thứ cũng không được!【 nhắc nhở: Phát động gấp mười lần bạo kích! ! 】【 nhắc nhở: Đại Lực Ngưu Ma Quyền độ thuần thục +10! 】 </div>
                                                <div class="d-flex align-items-center mt-2 py-1">
                                                    <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Tân Phong </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huyền Huyễn</span></a>
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
                                        <h2 data-v-2a691ca0="" class="h4 mb-0">Đang đọc</h2> <a data-v-2a691ca0="" href="https://pub.truyen.onl/account/library" class="link--see-more ml-auto text-primary">
                                            Xem tất cả
                                        </a>
                                    </div>
                                    <ul data-v-2a691ca0="" class="list-unstyled m-0">
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/tran-yeu-vien-bao-tang" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/tran-yeu-vien-bao-tang/150.jpg?1616044168" src="https://static.cdnno.com/poster/tran-yeu-vien-bao-tang/150.jpg?1616044168" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/tran-yeu-vien-bao-tang">
                                                        Trấn Yêu Viện Bảo Tàng
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    Đã đọc: 1/244
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/tran-yeu-vien-bao-tang/chuong-1" class="float-left"><small data-v-2a691ca0="" class="text-primary">Đọc tiếp</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/150.jpg?1625386130" src="https://static.cdnno.com/poster/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/150.jpg?1625386130" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung">
                                                        Không Thể Tu Tiên Ta Chỉ Có Đi Bồi Dưỡng Hồn Sủng
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    Đã đọc: 74/74
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/chuong-74" class="float-left"><small data-v-2a691ca0="" class="text-primary">Đọc tiếp</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/bat-tu-ta-danh-phai-dong-gia-huyet-toc" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/bat-tu-ta-danh-phai-dong-gia-huyet-toc/150.jpg?1625628237" src="https://static.cdnno.com/poster/bat-tu-ta-danh-phai-dong-gia-huyet-toc/150.jpg?1625628237" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/bat-tu-ta-danh-phai-dong-gia-huyet-toc">
                                                        Bất Tử, Ta Đành Phải Đóng Giả Huyết Tộc
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    Đã đọc: 56/68
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/bat-tu-ta-danh-phai-dong-gia-huyet-toc/chuong-56" class="float-left"><small data-v-2a691ca0="" class="text-primary">Đọc tiếp</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/toan-cau-quai-vat-tho-san" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/toan-cau-quai-vat-tho-san/150.jpg?1622112950" src="https://static.cdnno.com/poster/toan-cau-quai-vat-tho-san/150.jpg?1622112950" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/toan-cau-quai-vat-tho-san">
                                                        Toàn Cầu : Quái Vật Thợ Săn
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    Đã đọc: 1/194
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/toan-cau-quai-vat-tho-san/chuong-1" class="float-left"><small data-v-2a691ca0="" class="text-primary">Đọc tiếp</small></a>
                                        </li>
                                        <li data-v-2a691ca0="" class="media align-items-center py-2 mb-1"><a data-v-2a691ca0="" href="/truyen/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan" class="nh-thumb nh-thumb--32 shadow mr-3"><img data-v-2a691ca0="" alt="book.book_name" width="32" data-src="https://static.cdnno.com/poster/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan/150.jpg?1623941213" src="https://static.cdnno.com/poster/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan/150.jpg?1623941213" lazy="loaded"></a>
                                            <div data-v-2a691ca0="" class="media-body">
                                                <h2 data-v-2a691ca0="" class="fz-body mb-1"><a data-v-2a691ca0="" href="/truyen/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan">
                                                        Nhà Ta Tộc Trưởng Mỗi Ngày Nghĩ Đến Làm Phản
                                                    </a></h2>
                                                <div data-v-2a691ca0="" class="text-muted text-overflow-1-lines">
                                                    Đã đọc: 1/382
                                                    <a data-v-2a691ca0="" href="javascript:void(0)"><small data-v-2a691ca0="" class="text-muted ml-1"><i data-v-2a691ca0="" class="nh-icon icon-trash small"></i></small></a>
                                                </div>
                                            </div> <a data-v-2a691ca0="" href="/truyen/nha-ta-toc-truong-ngay-ngay-nghi-lam-phan/chuong-1" class="float-left"><small data-v-2a691ca0="" class="text-primary">Đọc tiếp</small></a>
                                        </li>
                                        <!---->
                                    </ul>
                                </div>
                            </section>
                            <hr>
                            <section class="nh-section">
                                <div class="d-flex align-items-center mb-3">
                                    <h2 class="h4 mb-0">Hướng dẫn</h2><a href="https://pub.truyen.onl/faqs" class="link--see-more ml-auto text-primary"> Xem tất cả </a>
                                </div>
                                <ul class="list-unstyled m-0 nh-list">
                                    <li><a href="https://pub.truyen.onl/faqs#1" class="d-block py-1 mb-1 text-truncate">Làm sao đổi màu nền, cỡ chữ, font chữ khi đọc trên web/app</a></li>
                                    <li><a href="https://pub.truyen.onl/faqs#2" class="d-block py-1 mb-1 text-truncate">Hoa là gì và dùng để làm gì?</a></li>
                                    <li><a href="https://pub.truyen.onl/faqs#3" class="d-block py-1 mb-1 text-truncate">Làm sao để có Hoa?</a></li>
                                    <li><a href="https://pub.truyen.onl/faqs#4" class="d-block py-1 mb-1 text-truncate">Hoa tồn tại được bao lâu?</a></li>
                                    <li><a href="https://pub.truyen.onl/faqs#5" class="d-block py-1 mb-1 text-truncate">Quy định khi tặng Hoa</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- mới cập nhật -->
                <section class="nh-section py-3">
                    <div class="d-flex align-items-center mb-3 ">
                        <h2 class="h4 mb-0"> Mới cập nhật </h2><a href="/truyen" class="link--see-more ml-3 text-primary"> Xem tất cả </a>
                    </div>
                    <table class="table table-striped table-borderless table-hover border-top fz-14">
                        <tbody>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huyền Huyễn</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/ta-co-sau-cai-hack">Ta Có Sáu Cái Hack</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/ta-co-sau-cai-hack/chuong-220" class="text-overflow-1-lines">Chương 220: Phu nhân</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Cổn Thần</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Nguyễn Như Ý</span></td>
                                <td class="align-middle text-tertiary text-right">một phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Kỳ Ảo</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/anh-hung-vo-dich-chi-ky-si">Anh Hùng Vô Địch Chi Kỵ Sĩ</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/anh-hung-vo-dich-chi-ky-si/chuong-441" class="text-overflow-1-lines">Chương 441: Quyết sách</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Dạ Hàn Thư Sinh</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huyền Linh</span></td>
                                <td class="align-middle text-tertiary text-right">5 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Tiên Hiệp</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/dai-phung-go-mo-cam-canh-nguoi">Đại Phụng Đả Canh Nhân</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/dai-phung-go-mo-cam-canh-nguoi/chuong-901" class="text-overflow-1-lines">Chương 83: Cứu mạng</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Mại Báo Tiểu Lang Quân</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Tiểu Miên Hoa</span></td>
                                <td class="align-middle text-tertiary text-right">5 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huyền Huyễn</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/ta-co-mot-truong-vo-hoc-bang">Ta Có Một Trương Võ Học Bảng</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/ta-co-mot-truong-vo-hoc-bang/chuong-327" class="text-overflow-1-lines">Chương 327: Đạo cảnh cửu trọng, tu thành Mặc Vũ Phân Thân thuật</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Trùng Phong Hỏa Diễm Trư</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Phan Phong</span></td>
                                <td class="align-middle text-tertiary text-right">5 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Đồng Nhân</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/van-gioi-giai-mong-su">Vạn Giới Giải Mộng Sư</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/van-gioi-giai-mong-su/chuong-1049" class="text-overflow-1-lines">Chương 1049: trò giỏi hơn thầy</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Miên Y Vệ</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huyền Linh</span></td>
                                <td class="align-middle text-tertiary text-right">6 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Tiên Hiệp</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/toi-cuong-trang-buc-da-kiem-he-thong">Tối Cường Trang Bức Đả Kiểm Hệ Thống</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/toi-cuong-trang-buc-da-kiem-he-thong/chuong-1710" class="text-overflow-1-lines">Chương 1710: Ngươi còn trị hai lần thu phí?</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Thái Thượng Bố Y</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Nguyễn Như Ý</span></td>
                                <td class="align-middle text-tertiary text-right">8 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Đô Thị</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/cai-nay-hoc-can-ba-khong-don-gian">Cái Này Học Cặn Bã Không Đơn Giản</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/cai-nay-hoc-can-ba-khong-don-gian/chuong-826" class="text-overflow-1-lines">Chương 835: Hỏng bét, lại nổi danh</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Tiêu Thanh Nguyệt</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Itachi</span></td>
                                <td class="align-middle text-tertiary text-right">9 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Tiên Hiệp</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/than-vo-chi-ton">Thần Võ Chí Tôn</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/than-vo-chi-ton/chuong-2525" class="text-overflow-1-lines">Chương 2525: Cam tâm tình nguyện</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Đồi Phế Đích Yên 121</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Dzung Kiều</span></td>
                                <td class="align-middle text-tertiary text-right">9 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Tiên Hiệp</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/ta-tu-trong-chien-dau-du-am-rut-ra-thuoc-tinh">Ta Từ Trong Chiến Đấu Dư Âm Rút Ra Thuộc Tính</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/ta-tu-trong-chien-dau-du-am-rut-ra-thuoc-tinh/chuong-138" class="text-overflow-1-lines">Chương 138: Đánh cược</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Vũ Tam Mao</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Inoha</span></td>
                                <td class="align-middle text-tertiary text-right">9 phút trước</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Tiên Hiệp</span></td>
                                <td class="align-middle w-25">
                                    <h2 class="fz-body m-0 text-overflow-1-lines"><a href="https://metruyenchu.com/truyen/mot-nguoi-dac-dao">Một Người Đắc Đạo</a></h2>
                                </td>
                                <td class="align-middle w-25"><a href="https://metruyenchu.com/truyen/mot-nguoi-dac-dao/chuong-440" class="text-overflow-1-lines">Chương 440: Thập điện lập căn, hưng chi như cổ! 【 rốt cục hai hợp một 】</a></td>
                                <td class="align-middle"><span class="text-overflow-1-lines">Chiến Bào Nhiễm Huyết</span></td>
                                <td class="align-middle text-tertiary"><span class="text-overflow-1-lines">Huyền Linh</span></td>
                                <td class="align-middle text-tertiary text-right">12 phút trước</td>
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
                                <h2 class="h4 mb-3"> Đánh giá cao </h2><a href="/truyen?sort_by=review_score" class="link--see-more ml-auto text-primary"> Xem tất cả </a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="media"><a href="https://metruyenchu.com/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung/150.jpg?1625386130" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="https://metruyenchu.com/truyen/khong-the-tu-tien-ta-chi-co-di-boi-duong-hon-sung" class="d-block">Không Thể Tu Tiên Ta Chỉ Có Đi Bồi Dưỡng Hồn Sủng</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 4 đánh giá </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> Trước Đăng Tiên cảnh đại tu sĩ Vương Triệt bởi vì độ kiếp thất bại, linh hồn xuyên qua đến một cái Hồn thú cùng nhân loại sống chung hòa bình Võ Hồn thế giới.Tại xác định thế giới này không cách nào tu tiên về sau, sinh vô khả luyến(cuộc sống này thật là nhàm chán không có gì đáng để lưu luyến cả) hắn, rơi vào đường cùng chỉ có thể thích ứng thế giới này.Thế là. . ."Caterpie, trăm vạn năm tiến hóa!""Ra đi! Rayquaza. . . A không, Thiên Không Long!" </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Hạ Thụ Cầm </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huyền Huyễn</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="media"><a href="https://metruyenchu.com/truyen/toan-dan-huyen-huyen-gia-toc-duy-nhat-lao-to-tong-gap-tram-lan-thuong-cho" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/toan-dan-huyen-huyen-gia-toc-duy-nhat-lao-to-tong-gap-tram-lan-thuong-cho/150.jpg?1625240539" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="https://metruyenchu.com/truyen/toan-dan-huyen-huyen-gia-toc-duy-nhat-lao-to-tong-gap-tram-lan-thuong-cho" class="d-block">Toàn Dân Huyền Huyễn Gia Tộc: Duy Nhất Lão Tổ Tông, Gấp Trăm Lần Thưởng Cho</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 13 đánh giá </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> « B.faloo mạng tiểu thuyết độc nhất vô nhị ký hợp đồng tiểu thuyết: Toàn dân Huyền Huyễn gia tộc: Duy nhất lão tổ tông, gấp trăm lần thưởng cho »Thế giới kinh biến, toàn cầu mọi người xuyên việt diện tích vô ngần Huyền Huyễn Dị Giới đại lục, trở thành võ học gia tộc Thiếu Tộc Trưởng.Tăng thực lực lên, đề thăng quyền phát biểu, nắm giữ gia tộc quyền bính, cuối cùng trở thành tộc trưởng, là tất cả trước người kỳ chuyện cần làm.Mỗi sinh tồn bảy ngày biết có một lần bảo rương cơ hội, mười cái bảo rương nhiệm một cái mở ra, ngẫu nhiên đạt được công pháp, đan dược các loại(chờ).Trương Sở Huyền cũng là một thành viên trong đó, lại so với những người khác sớm xuyên việt 45 năm, thân là gia tộc duy nhất lão tổ tông, ở khác người còn đang vì tộc trưởng phấn đấu lúc, đã sở hữu gia tộc tối cao quyền quyết định.Không chỉ có như vậy, hắn còn giác tỉnh đặc thù gấp bội năng lực, tiêu hao bất kỳ công pháp nào, đan dược các loại(chờ), đều có thể tuyển trạch hiệu quả hoặc số lượng gấp trăm lần tăng phúc."Keng, phát hiện huyền giai đan dược Trú Nhan Đan, tiêu hao phía sau có thể tuyển chọn trở xuống gấp bội."Một: Trú Nhan Đan (vĩnh bảo thanh xuân )X 100Hai: Duyên Thọ Đan (tăng thọ trăm năm )X 10Ba: Thanh xuân đan (vĩnh bảo thanh xuân, tăng thọ trăm năm )X 1"Chúc mừng ngài trở thành tộc trưởng, gia tộc bản khối đã đối với ngài mở ra.""Chúc mừng ngài trở thành tộc trưởng, kích hoạt tộc trưởng chuyên chúc kỹ năng toàn tộc đồng tâm (đại đạo cấp kỹ năng, mở ra phía sau thực lực vì toàn tộc thành viên thực lực điệp gia tổng cộng, không thời gian cold-down, vô thời gian hạn chế. )"Chúc mừng ngài trở thành tộc trưởng, kích hoạt tộc trưởng chuyên chúc skill bị động đồng bộ (đại đạo cấp kỹ năng, ngài đem bị động thu được thành viên gia tộc ở con đường tu luyện bên trên toàn bộ thu hoạch. )MAIN THEO HƯỚNG PHÁT TRIỂN GIA TỘC, VÌ TỘC TRƯỞNG CÓ THỂ ĐIỆP GIA TOÀN TỘC THỰC LỰC, CHO NÊN PHÁT TRIỂN GIA TỘC LÀ TRÊN HẾT. ĐẦU THÁNG CẦU HOA TƯƠI, CẦU ĐÁNH GIÁ, CẦU BUFF KẸO. </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Hồng Hoang Tu Tiên Giả </span></div><a href="/truyen?genre=3"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Huyền Huyễn</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="media"><a href="https://metruyenchu.com/truyen/game-of-thrones-thuy-long-chi-no" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/game-of-thrones-thuy-long-chi-no/150.jpg?1624855572" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="https://metruyenchu.com/truyen/game-of-thrones-thuy-long-chi-no" class="d-block">Game Of Thrones: Thụy Long Chi Nộ</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 5 đánh giá </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> Xuyên qua trở thành người Andals, người Rhoynar cùng Tiên Dân chi Vương, bảy vương quốc hợp pháp kẻ thống trị và toàn cảnh người bảo vệ, 'Chân Long' Viserys · Targaryen tam thế. </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Tử Dụ Băng Kỳ Lâm </span></div><a href="/truyen?genre=7"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Đồng Nhân</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="media"><a href="https://metruyenchu.com/truyen/tam-quoc-trieu-van-chi-bat-dau-cuoi-dieu-thuyen" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/tam-quoc-trieu-van-chi-bat-dau-cuoi-dieu-thuyen/150.jpg?1624699773" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="https://metruyenchu.com/truyen/tam-quoc-trieu-van-chi-bat-dau-cuoi-dieu-thuyen" class="d-block">Tam Quốc Triệu Vân Chi Bắt Đầu Cưới Điêu Thuyền</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 3 đánh giá </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> ( cố sự nội dung cốt truyện, Tam Quốc ngọt sủng ) trọng sinh tam quốc, hồn xuyên Triệu Vân. Vốn cho rằng là ba mang vừa mở cục, không nghĩ tới lại giác tỉnh mạnh nhất tranh bá hệ thống, trực tiếp vương nổ tung cục. Keng! Túc chủ mở ra tân thủ lễ bao, chúc mừng túc chủ thu hoạch được Triệu Vân chuyên chúc trang bị —— Long Đảm Lượng Ngân Thương. Keng! Chúc mừng túc chủ thành công triệu hoán Truyền Thuyết cấp võ tướng Nhạc Phi. Keng! Chúc mừng túc chủ thành công triệu hoán Truyền Thuyết cấp binh sĩ Yến Vân Thập Bát Kỵ. Lữ Bố: "Ta Lữ Bố thiên hạ vô địch, nhưng Triệu Vân là thiên..." Lưu Bị: "Thiên hạ thương binh khí vận chung tám đấu, Triệu Tử Long độc chiếm một thạch, những người còn lại ngược lại thiếu hai đấu." Tào Tháo: "Nay thiên hạ anh hùng duy vân cùng thao tai." Tôn Sách: "Ta cùng Tử Long là tay chân huynh đệ, nguyện mang theo Giang Đông nhi lang cùng huynh trưởng đồng mưu đại nghiệp." Điêu Thuyền: "Tử Long ca ca, coi như trời nam đất bắc, Tiểu Thiền y nguyên..." Thái Diễm: "Hiểu nhìn sắc trời mộ xem vân, được cũng Tư Quân, ngồi cũng Tư Quân." Chân Mật: "Nguyện vì Tây Nam phong, mất nhập quân trong lòng." Đổng Bạch: "Ta yêu ngươi như vậy, nhưng ngươi lại đem ôn nhu lưu cho người khác." Tiểu Kiều (xấu hổ ): "Phu quân quả nhiên thương pháp tinh xảo, mỗi một thương thấy máu, tinh chuẩn vô cùng."Ngọt sủng nhưng hậu cung :v </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Lão Thiên Thưởng Phạn Cật </span></div><a href="/truyen?genre=8"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Lịch Sử</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="media"><a href="https://metruyenchu.com/truyen/ta-pokemon-dai-su-bat-dau-trieu-hoan-giratina" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/ta-pokemon-dai-su-bat-dau-trieu-hoan-giratina/150.jpg?1622453553" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="https://metruyenchu.com/truyen/ta-pokemon-dai-su-bat-dau-trieu-hoan-giratina" class="d-block">Ta, Pokemon Đại Sư, Bắt Đầu Triệu Hoán Giratina!</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 4 đánh giá </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> « B.faloo mạng tiểu thuyết độc nhất vô nhị ký hợp đồng tiểu thuyết: Ta, Pokemon Đại Sư, Bắt Đầu Triệu Hoán Giratina!»Calvados mang theo « Tối Cường Thủ Hộ Thần » hệ thống, xuyên việt Pokemon thế giới."Tuyển hạng một, cho Giovanni làm công, trở thành Team Rocket cán bộ, thu được không gian Thủ Hộ Thần Thú, Palkia!""Tuyển hạng hai: Cho Tinh Linh liên minh làm công, trở thành liên minh lục soát quan, thu được thời gian Thủ Hộ Thần Thú, Dialga!""Tuyển hạng ba: Trở thành tự do huấn luyện gia, thu được bên trong thế giới Thủ Hộ Thần Thú, Giratina!"« Thủ Hộ Thần Thú sẽ làm vì Bảo Hộ Thần, ở kí chủ gặp phải nguy hiểm tánh mạng, hoặc là một ít không thể nghịch khốn cảnh thời điểm xuất hiện»Đối với lần này, Calvados biểu thị, làm công là không có khả năng đi làm, chỉ có một đường vô địch, làm cái hứng thú cho phép huấn luyện gia mới(chỉ có) phù hợp tính cách của ta.. . .Calvados: Triệu hoán Giratina, chỉ là lữ đồ một bước nhỏ, dưới ức cái mục tiêu, góp đủ sở hữu Thần Thú!Cứ như vậy, Calvados bước lên ung dung vô địch lữ đồ, cũng ở một năm sau. . .Bên trong thế giới mạnh nhất Tử Thần, Giratina hàng lâm Thiên Địa, kinh sợ thế gian toàn bộ địch!Hủy Diệt Chi Thần Mewtwo xuất thế, trong mây Rayquaza, bạn. .Pokemon tư chất: Phổ thông, Hi Hữu, Sử Thi, Truyền Thuyết, Chí Tôn!ẢNH POKEMON CỦA MAIN (SAU KHI DÙNG ĐẶC THÙ TIẾN HÓA):Hắc Kim Tyranitar: ref.vn/kjezfuỞ ĐIỆN THOẠI THÌ VIẾT LẠI LINK RA TRÌNH DUYỆT NHÉ. ĐẶC THÙ TIẾN HÓA GIỐNG Crystal Steelix, toàn thân thủy tinh, hoặc bản Diamond Steelix, toàn thân kim cương.P/S Giratina LÀ THỦ HỘ THẦN, CHỦ YẾU BẢO VỆ MAIN, ĐỂ MAIN AN TOÀN PHÁT TRIỂN, CHỨ KHÔNG PHẢI BẮT ĐẦU LIỀN "Giratina TỚ CHỌN CẬU, DÙNG Shadow Force TẤN CÔNG Caterpie NHÉ". MÀ PHẢI CÂU THÔNG, XÚC TIẾN TÌNH CẢM DẦN MỚI CÓ THỂ NHỜ Giratina RA TAY TRỢ GIÚP.CÓ NGƯỜI NHỜ LÀM TRUYỆN POKEMON. THẤY BỘ NÀY BÊN TRUNG ĐÁNH GIÁ OK.TÁC ĐÃ VIẾT HƠN 850K CHỮ. 1 CHƯƠNG TÍNH 2K CHỮ CŨNG PHẢI HƠN 400C. CẦU HOA TƯƠI, CẦU ĐÁNH GIÁ, CẦU BUFF KẸO, ༼ つ ◕_◕ ༽つ✿ </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Ảnh Hỏa Ảnh Hỏa </span></div><a href="/truyen?genre=7"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Đồng Nhân</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="media"><a href="https://metruyenchu.com/truyen/vu-su-ta-co-the-rut-ra-van-vat" class="nh-thumb nh-thumb--72 shadow mr-3"><img src="https://static.cdnno.com/poster/vu-su-ta-co-the-rut-ra-van-vat/150.jpg?1622269050" alt="" width="72"></a>
                                        <div class="media-body">
                                            <h2 class="fz-body text-overflow-1-lines mb-2"><a href="https://metruyenchu.com/truyen/vu-su-ta-co-the-rut-ra-van-vat" class="d-block">Vu Sư: Ta Có Thể Rút Ra Vạn Vật</a></h2>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="bg-danger rounded-3 h6 my-0 mr-3 text-white px-2 py-1"> 5.00 </div>
                                                <div class="text-success"> 7 đánh giá </div>
                                            </div>
                                            <div class="text-secondary fz-14 text-overflow-2-lines"> Heath xuyên qua dị giới thức tỉnh 【 siêu phàm rút ra hệ thống 】, cũng tại hệ thống trợ giúp hạ đi đến vu sư con đường từng bước một trở thành thần chi.Thực lực thấp, không quan hệ, siêu phàm hệ thống rút ra thuộc tính.Thiên phú không đủ, không quan hệ, siêu phàm hệ thống rút ra thiên phú.Huyết mạch rác rưởi, không quan hệ, siêu phàm hệ thống rút ra cao quý huyết mạch.Vạn vật đều có thể rút ra, rút ra vạn vật.—— —— —— —— —— —— —— —— —— ——Truyền thống vu sư văn, sảng văn, tiết tấu nhanh, toàn bộ hành trình không kiềm chế, nhân vật chính tính cách sát phạt quả đoán, không có bao nhiêu tình cảm hí.Người mới sách mới, quỳ cầu ủng hộ! </div>
                                            <div class="d-flex align-items-center mt-2 py-1">
                                                <div class="d-flex align-items-center mr-auto text-secondary"><span class="truncate-140 text-left"><i class="nh-icon icon-user-edit mr-1"></i> Vu Yêu Vương 13 Hào </span></div><a href="/truyen?genre=20"><span class="d-inline-block border border-primary small px-2 text-primary truncate-100">Kỳ Ảo</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center mb-4">
                            <h2 class="h4 m-0 font-weight-semibold"> Mới đánh giá </h2><a href="/truyen?sort_by=review_score" class="link--see-more ml-auto text-primary"> Xem tất cả </a>
                        </div>
                        <ul class="list-unstyled">
                            <li class="px-4 py-3 pb-4 bg-yellow-white rounded-2 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><a href="https://pub.truyen.onl/account/profile/1045257"><img src="https://static.cdnno.com/user/c4beb8a16e082b8984699dadc44de69f/50.jpg?1600876250" alt="TàThần" width="45" height="45" class="rounded-circle overflow-hidden mr-2"></a></div>
                                    <div class="pl-1">
                                        <div class="text-secondary"><a href="https://pub.truyen.onl/account/profile/1045257" class="font-weight-semibold text-body">TàThần</a> đánh giá </div><a href="https://metruyenchu.com/truyen/co-tich-the-gioi-manh-nhat-vuong-tu" class="text-danger font-weight-semibold">Cổ Tích Thế Giới Mạnh Nhất Vương Tử</a>
                                    </div>
                                    <div class="ml-auto bg-danger rounded-3 h6 my-0 text-white px-2 py-1"> 3.00 </div>
                                </div>
                                <div class="mt-2 pt-1 text-overflow-3-lines"> truyện mới đầu hay về sau như lol. quãng đường đi xin thuốc chữa lời nguyền cuối cùng hoá ra chỉ là đi gom harem. có xin thuốc nhưng lại không dùng.thằng tác thuộc loại đem người thân (vợ) của main ra để tạo kịch tính câu chương vì cạn ý tưởng. lúc thì mấy người vợ và hầu cận suýt bị thiêu chết, lúc thì thằng tác cho người bắt cóc 2 vợ của main. vợ đẹp thế không h**p thì vô lý quá. vì bọn 9★ toàn đứa dâm </div>
                            </li>
                            <li class="px-4 py-3 pb-4 bg-yellow-white rounded-2 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><a href="https://pub.truyen.onl/account/profile/1012205"><img src="https://static.cdnno.com/user/5adce32285184170399314ca389e43fa/50.jpg?1597982172" alt="uchiha end" width="45" height="45" class="rounded-circle overflow-hidden mr-2"></a></div>
                                    <div class="pl-1">
                                        <div class="text-secondary"><a href="https://pub.truyen.onl/account/profile/1012205" class="font-weight-semibold text-body">uchiha end</a> đánh giá </div><a href="https://metruyenchu.com/truyen/bat-tu-ta-danh-phai-dong-gia-huyet-toc" class="text-danger font-weight-semibold">Bất Tử, Ta Đành Phải Đóng Giả Huyết Tộc</a>
                                    </div>
                                    <div class="ml-auto bg-danger rounded-3 h6 my-0 text-white px-2 py-1"> 4.50 </div>
                                </div>
                                <div class="mt-2 pt-1 text-overflow-3-lines"> tính cách nhân vật hợp gu t :))) kiểu hashirama ấy . Nội dung cốt truyện thì chủ yếu xoay quanh đời thường , hơi thiếu 1 tí đánh quái luyện cấp . Bố cục có vẻ hơi sơ lượt nhưng nó rất có tiềm năng để phát triểu :)) </div>
                            </li>
                            <li class="px-4 py-3 pb-4 bg-yellow-white rounded-2 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2"><a href="https://pub.truyen.onl/account/profile/1061703"><img src="https://static.cdnno.com/user/2e84ba5ff66c169a544098de70dfef3f/50.jpg?1604199818" alt="GBeCW96297" width="45" height="45" class="rounded-circle overflow-hidden mr-2"></a></div>
                                    <div class="pl-1">
                                        <div class="text-secondary"><a href="https://pub.truyen.onl/account/profile/1061703" class="font-weight-semibold text-body">GBeCW96297</a> đánh giá </div><a href="https://metruyenchu.com/truyen/toan-dan-huyen-huyen-gia-toc-duy-nhat-lao-to-tong-gap-tram-lan-thuong-cho" class="text-danger font-weight-semibold">Toàn Dân Huyền Huyễn Gia Tộc: Duy Nhất Lão Tổ Tông, Gấp Trăm Lần Thưởng Cho</a>
                                    </div>
                                    <div class="ml-auto bg-danger rounded-3 h6 my-0 text-white px-2 py-1"> 5.00 </div>
                                </div>
                                <div class="mt-2 pt-1 text-overflow-3-lines"> 9/10.-1 đ về đặt tên cảnh giới,1 cảnh giới thêm 2 tên đọc khó chịu vl, lúc tên này lúc tên nọ, khá loạn.Nhưng mà truyện cũng khá hay. </div>
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