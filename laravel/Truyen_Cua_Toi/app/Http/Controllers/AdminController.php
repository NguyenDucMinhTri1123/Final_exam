<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\novel;
use App\Models\novel_case;
use App\Models\tag;
use App\Models\tag_list;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //home function
    static public function index($request)
    {
        try {
            if(isset($_SESSION['account'])){
                $email=$_SESSION['account'];
                $account=account::get_one($email);
                $novel_case=novel_case::get_select($email);
                $reading_novel=count($novel_case);
                $user=account::get_list();
                $my_novel=AdminController::get_my_novel($email);
                $wrote_novel_num=AdminController::wrote_novel_count($email);
                $wrote_chapter_num=AdminController::wrote_chapter_count($email);
                $tag_list=tag::get_list();
            }
            if(isset($request['edit_infor'])){
                $name=$request['name'];
                $age=$request['age'];
                if($request['gender']==0)
                    $gender="Bí Mật";
                else if($request['gender']=1)
                    $gender="Nam";
                else if($request['gender']=2)
                    $gender="Nữ";
                else
                    $gender="";
                $user=new account($account->email,$account->password,$name,$age,$account->chap_counter,$gender,$account->role_id);
                $result=account::update_account($user);
                $request['direct'] = "setting";
            }
            else if(isset($request['change_password'])){
                $password=$request['old_password'];
                $new_password=$request['new_password'];
                $confirm_password=$request['new_password_confirmation'];
                account::update_password($email,md5($new_password));
            }
            else if(isset($request['create_novel'])){
                $name=$request['name'];
                $tag_id=$request['tag'];
                $img_link=$request['img_link'];
                $novel_type=$request['novel_type'];
                $note=$request['notes'];
                //tạo taglist trước khi tạo novel
                // tag_list_r là đối tượng tag_list khởi đầu không có novel_id(sẽ được thêm vào sau)
                $tag_list_r=new tag_list("",$tag_id,"");
                // tag_list_id là id của tag_list nắm các tag của novel sắp tạo
                $tag_list_id=tag_list::add($tag_list_r);
                //tạo novel với các biến đã gọi
                $novel= new novel("",$name,$img_link,$account->name,$email,$novel_type,"writing",$note,"0","0",$tag_list_id);
                // result chứa id của novel để cập nhật lại novel_id cho tag_list
                $result=novel::add($novel);
                // thêm novel_id cho tag_list bằng hàm update của chính nó
                AdminController::update_tag_list($result);
            }
            if (isset($request['direct'])) {
                if ($request['direct'] == "novel-case") {
                    //include_once "../Views/cms/admin/index.php";
                    return view('cms/admin/index');
                } else if ($request['direct'] == "notification") {
                    return view('cms/admin/index');
                } else if ($request['direct'] == "setting") {
                    return view('cms/admin/index');
                } else if ($request['direct'] == "author-manage") {
                    return view('cms/admin/index');
                } else if ($request['direct'] == "reader-manage") {
                    return view('cms/admin/index');
                } else if ($request['direct'] == "create-novel") {
                    return view('cms/admin/index');
                } else if ($request['direct'] == "my-novel") {
                    return view('cms/admin/index');
                } else if ($request['direct'] == "novel-setting") {
                    $action = $request['action'];
                    $novel_id=$request['novel-id'];
                    $novel=novel::get_one($novel_id);
                    return view('cms/admin/index',['action'=>$action,'novel_id'=>$novel_id,'novel'=> $novel]);
                } else if ($request['direct'] == "logout") {
                    header('location:' . CUSTOM_URL . 'partial/logout.php');
                } else
                    return view('cms/admin/index');
            } else
                return view('cms/admin/index');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    static public function wrote_novel_count($author_id){
        $my_novel=novel::get_list();
        $count=0;
        if(count($my_novel)>0){
            foreach($my_novel as $novel){
                if($novel->author_id=$author_id)
                $count++;
            }
            return $count;
        }else
        return $count;
    }
    static public function wrote_chapter_count($author_id){
        $my_novel=novel::get_list();
        $count=0;
        if(count($my_novel)>0){
            foreach($my_novel as $novels){
                if($novels->author_id=$author_id){
                    $novel= novel::get_one($novels->id);
                    $count+=  $novel->chapter_number;
                }
            }
            return $count;
        }else
        return $count;
    }
    static public function update_tag_list($novel_id){
        $novel=novel::get_one($novel_id);
        $tag_list_id=$novel->tag_list_id;
        $tag_list=tag_list::get_one($tag_list_id);
        $tag_list_update=  new tag_list($tag_list_id,$tag_list->tag_id,$novel_id);
        $result=tag_list::update_tag_list($tag_list_update);
        return $result;
    }
    static public function update_all_tag_list(){
        $all_novel=novel::get_list();
        foreach($all_novel as $novel){
            $tag_list_id=$novel->tag_list_id;
            $tag_list=tag_list::get_one($tag_list_id);
            $tag_list_update=new tag_list($tag_list_id,$tag_list->tag_id,$novel->id);
            $result=tag_list::update_tag_list($tag_list_update);
        }
    }
    static public function get_my_novel($author_id){
        $novels=novel::get_list();
        $ls=[];
        foreach($novels as $novel){
            if($novel->author_id=$author_id){
                $ls[]=$novel;
            }
        }
        return $ls;
    }
}
