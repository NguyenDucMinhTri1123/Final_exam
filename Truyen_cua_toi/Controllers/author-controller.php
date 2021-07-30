<?php
include_once "../Models/DBs.php";
include_once "../Models/account.php";

class AuthorController
{
    //home function
    static public function index($request)
    {
        try {
            
            if (isset($request['direct'])) {
                if ($request['direct'] == "novel-case") {
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "notification") {
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "setting") {
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "author-manage") {
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "reader-manage") {
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "create-novel") {
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "my-novel") {
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "novel-setting") {
                    $action = $request['action'];
                    include_once "../Views/cms/author/index.php";
                } else if ($request['direct'] == "logout") {
                    header('location:' . CUSTOM_URL . 'partial/logout.php');
                } else
                    include_once "../Views/cms/author/index.php";
            } else
                include_once "../Views/cms/author/index.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
