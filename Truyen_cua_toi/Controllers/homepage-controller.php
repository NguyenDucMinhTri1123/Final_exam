<?php
include_once "../Models/DBs.php";
include_once "../Models/account.php";
class HomePageController
{
    //home function
    static public function index($request){
        try {
            $email=$_SESSION['account'];
            $account=account::get_one($email);
            if(isset($request['direct']))
            if ($request['direct'] == "logout") {
                header('location:' . CUSTOM_URL . 'partial/logout.php');
            }
            include_once "../Views/homepage/home_page.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    
}