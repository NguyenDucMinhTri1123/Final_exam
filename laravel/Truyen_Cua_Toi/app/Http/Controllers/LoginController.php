<?php

namespace App\Http\Controllers;
session_start();

use App\Models\account;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        try {
            
            if(isset($request['add_new_user'])){
                $name=$request['name'];
                $email=$request['email'];
                $password=$request['pass'];
                $confirm_password=$request['confirm_pass'];
                if($password!=$confirm_password){
                    $alert="Password not match";
                    $account= new account('','','','','','','');
                    return view('login/register',['alert'=>$alert,'account'=>$account]);
                    //include_once "../Views/login/register.php";
                }
                else if(account::check_match_email($email)==true){
                    $account= new account('','','','','','','');
                    $alert="Email was aready used";
                    //include_once "../Views/login/register.php";
                    return view('login/register',['alert'=>$alert,'account'=>$account]);
                }
                else{
                    $account= new account($email,md5($password),$name,null,0,null,2);
                    $result= account::add($account);
                    //include_once "../Views/login/login.php";
                    return view('login/login',['resul'=>$result,'account'=>$account]);
                }
            }
            else if(isset($request['login'])){
                $email=$request['email'];
                $password=$request['pass'];
                $result= account::check_login($email,md5($password));
                if($result==false){
                    $alert="Password or Email not match";
                    //include_once "../Views/login/login.php";
                    return view('login/login',['alert'=>$alert]);
                }else {
                    $_SESSION['account']=$result;
                    //$alert=$result;
                    //include_once "../Views/login/login.php";
                    header('location:'.SITE___URL.'');
                }
            }
            else if(isset($request['register'])){
                $account= new account('','','','','','','');
                //include_once "../Views/login/register.php";
                return view('login/register',['account'=>$account]);
            }
            else{
                return view('login/login');
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
