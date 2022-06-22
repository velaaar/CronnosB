<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
}
public function destroy($id){
    $user= user::find($id)->delete();
    return redirect()->route('users.index')->with('message','SE HA ELIMINADO EL USUARIO');
}
}
