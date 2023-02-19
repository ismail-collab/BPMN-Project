<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class userController extends Controller {
    

   
function addUser(Request $req){
    $data= Http::post('http://localhost:9090/adduser', [
        "username"=> $req->input('username'),
        "password"=> $req->input('password'),
        "name"=> $req->input('fullname')
      
    ]);
    return redirect('Crud');
}


function printUser(Request $req){
    $UserList=Http::post('http://localhost:9090/showUsers');
    $data['USERS']=json_decode($UserList);
      return view('Crud',$data);
}



}
