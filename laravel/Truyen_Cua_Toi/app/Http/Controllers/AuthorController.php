<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    static public function index($request)
    {
        try {
            
            if (isset($request['direct'])) {
                if ($request['direct'] == "novel-case") {
                    //include_once "../Views/cms/author/index.php";
                    return view('cms/author/index');
                } else if ($request['direct'] == "notification") {
                    return view('cms/author/index');
                } else if ($request['direct'] == "setting") {
                    return view('cms/author/index');
                } else if ($request['direct'] == "author-manage") {
                    return view('cms/author/index');
                } else if ($request['direct'] == "reader-manage") {
                    return view('cms/author/index');
                } else if ($request['direct'] == "create-novel") {
                    return view('cms/author/index');
                } else if ($request['direct'] == "my-novel") {
                    return view('cms/author/index');
                } else if ($request['direct'] == "novel-setting") {
                    $action = $request['action'];
                    return view('cms/author/index');
                } else if ($request['direct'] == "logout") {
                    header('location:' . CUSTOM_URL . 'partial/logout.php');
                } else
                    return view('cms/author/index');
            } else
                return view('cms/author/index');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
