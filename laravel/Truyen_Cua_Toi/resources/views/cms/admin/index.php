<?php 
    include_once "../Views/partial/head.php";
    include_once "../Views/partial/header.php";
    include_once "../Views/partial/cms/admin-sidebar.php";
    if(isset($request['direct'])){
        if($request['direct']=="novel-case"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "../Views/partial/cms/novel-case.php";
        }
        else if($request['direct']=="notification"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "../Views/partial/cms/blank.php";
        }
        else if($request['direct']=="setting"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "../Views/partial/cms/user-setting.php";
        }
        else if($request['direct']=="author-manage"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "author-manage.php";
        }
        else if($request['direct']=="reader-manage"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "reader-manage.php";
        }
        else if($request['direct']=="create-novel"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "../Views/partial/cms/author-novel.php";
        }
        else if($request['direct']=="my-novel"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "../Views/partial/cms/my-novel.php";
        }
        else if($request['direct']=="novel-setting"){
            if(isset($request['action'])){
                $action=$request['action'];
            }
            include_once "../Views/partial/cms/novel-setting.php";
        }
        else
            include_once "../Views/partial/cms/blank.php";
            
    }else
        include_once "../Views/partial/cms/user-infor.php";
    include_once "../Views/partial/footer.php";
?>