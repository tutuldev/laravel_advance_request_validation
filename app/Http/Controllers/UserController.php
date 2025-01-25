<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        // // all data all column
        $users = DB::table('users')->get();
         return view('allusers',['data'=>$users]);

    }


    // request validaction
    public function addUser(UserRequest $req){

        // return $req->all();
        // only show this column data
        // return $req->only('username','usercity');

        // with out show this column data
        return $req->except('username','usercity');

    }

    // form validaction
    // public function addUser(Request $req){
    //     // $req->validate([
    //     //     'username' => 'required',
    //     //     'useremail' => 'required|email',
    //     //     'userpass' => 'required|alpha_num|min:8',
    //     //     // 'userage' => 'required|numeric|min:18',
    //     //     // 'userage' => 'required|numeric|max:18',
    //     //     'userage' => 'required|numeric|between:18,21',
    //     //     'usercity' => 'required',
    //     // ],
    //     // [
    //     //            "username.required"=>"User Name is required!",
    //     //            "useremail.required"=>"User Email is required!",
    //     //            "useremail.email"=>"Enter the correct email address.",
    //     //            "userage.required"=>"User Age is required!",
    //     //            "userage.numeric"=>"User age MUst be numeric.",
    //     //            "userage.between"=>"User age MUst be 18 to 21 .",
    //     //            "usercity.required"=>"User City is required!",

    //     // ]);

    //     return $req->all();
    // }








    // update page
    public function updatePage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);
        // return $user;
        return view('updateuser',['data' => $user]);
    }


    // update method start
    public function updateUser(Request $req,$id){
        $user = DB::table('users')
        ->where('id',$id)
        ->update([
            'name'=>$req->username,
            'email'=>$req->useremail,
            'age'=>$req->userage,
            'city'=>$req->usercity
        ]);
        if ($user){
            return redirect()->route('home');
            // echo "<h1>Data update Successfully.</h1>";
        }
    }
    // update method end

    // delete method start
    public function deleteUser(string $id){
        $user = DB::table('users')
        ->where('id',$id)
        ->delete();
        if ($user){
            return redirect()->route('home');
            // echo "<h1>Data Delete Successfully.</h1>";
        }
    }
    // delete method end

}
