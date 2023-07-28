<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    function getAllUserData()
    {
       return Users::all();
    }

    function getByUserId($id)
    {
         return Users::find($id);
    }

    function addUser(Request $req)
    {
        $users = new Users;
        $users->name = $req->name;
        $users->phone_no = $req->phone_no;
        $users->email = $req->email;
        $result= $users->save();
            if($result){
                    return ["Result"=>"Data Added Successfully!!"];
            }
            else{
                return ["Result"=>"Something is Wrong!!"];
            }
    }

      function updateUser(Request $req)
    {
        $users =  Users::find($req->id);
        $users->name = $req->name;
        $users->phone_no = $req->phone_no;
        $users->email = $req->email;
        $result= $users->save();
            if($result){
                    return ["Result"=>"Data Updated Successfully!!"];
            }
            else{
                return ["Result"=>"Something is Wrong!!"];
            }
    }

     function deleteUser($id)
    {
        $users =  Users::find($id);
        $result= $users->delete();
            if($result){
                    return ["Result"=>"Data Deleted Successfully!!"];
            }
            else{
                return ["Result"=>"Something is Wrong!!"];
            }
    }
}
