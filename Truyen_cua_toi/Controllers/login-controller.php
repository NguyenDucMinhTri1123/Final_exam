<?php
session_start();
include_once "../Models/DBs.php";
include_once "../Models/account.php";
class LoginController
{
    //home function
    static public function index($request){
        try {
            
            if(isset($request['add_new_user'])){
                $name=$request['name'];
                $email=$request['email'];
                $password=$request['pass'];
                $confirm_password=$request['confirm_pass'];
                if($password!=$confirm_password){
                    $alert="Password not match";
                    $account= new account('','','','','','','');
                    include_once "../Views/login/register.php";
                }
                else if(account::check_match_email($email)==true){
                    $account= new account('','','','','','','');
                    $alert="Email was aready used";
                    include_once "../Views/login/register.php";
                }
                else{
                    $account= new account($email,md5($password),$name,null,0,null,2);
                    $result= account::add($account);
                    include_once "../Views/login/login.php";
                }
            }
            else if(isset($request['login'])){
                $email=$request['email'];
                $password=$request['pass'];
                $result= account::check_login($email,md5($password));
                if($result==false){
                    $alert="Password or Email not match";
                    include_once "../Views/login/login.php";
                }else {
                    $_SESSION['account']=$result;
                    //$alert=$result;
                    //include_once "../Views/login/login.php";
                    header('location:'.SITE__URL.'');
                }
            }
            else if(isset($request['register'])){
                $account= new account('','','','','','','');
                include_once "../Views/login/register.php";
            }
            else{
                include_once "../Views/login/login.php";
            }

        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    
}