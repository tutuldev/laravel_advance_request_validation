<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        // return "<h1>welcome to Controller Lecture</h1>";
        return view('welcome');
    }
    // public function showUser(string $id){
    //     return view('user',['id'=>$id]);
    // }

    // when key and value is same then use compact
    public function showUser(string $id){
        return view('user',compact('id'));
    }

    public function showBlog(){
        return view('blog');
    }
}
