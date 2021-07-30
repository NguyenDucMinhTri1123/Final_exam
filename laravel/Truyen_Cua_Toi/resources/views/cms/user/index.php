<?php 
    include_once "../Views/partial/head.php";
    if(isset($_SESSION['account'])){
        $email=$_SESSION['account'];
        $account=account::get_one($email);
    }
    include_once "../Views/partial/header.php";
    include_once "../Views/partial/cms/user-sidebar.php";
    if(isset($request['direct'])){
        if($request['direct']=="novel-case"){
            include_once "../Views/partial/cms/novel-case.php";
        }
        else if($request['direct']=="notification"){
            include_once "../Views/partial/cms/blank.php";
        }
        else if($request['direct']=="setting"){
            include_once "../Views/partial/cms/user-setting.php";
        }
        else if($request['direct']=="create-novel"){
            include_once "../Views/partial/cms/author-novel.php";
        }
        else if($request['direct']=="my-novel"){
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