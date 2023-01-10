<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function classes(){
        return view('class');
    }

    public function team(){
        return view('team');
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        return view('blog');
    }

    public function detail(){
        return view('detail');
    }

    public function testimony(){
        return view('testimony');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    // this function is use to fetch all the data's in the database

    public function getAllPost(){
        $posts = DB::table('posts')->get();
        return view('post',compact('posts'));
    }
}
