<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    static public function index($request){
        try {
            $email=$_SESSION['account'];
            $account=account::get_one($email);
            if(isset($request['direct']))
            if ($request['direct'] == "logout") {
                header('location:' . CUSTOM_URL . 'partial/logout.php');
            }
            //include_once "../Views/homepage/home_page.php";
            return view('homepage/home_page',['account'=>$account,'email'=>$email]);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
