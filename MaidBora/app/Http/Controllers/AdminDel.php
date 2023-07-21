<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Model\joblist;

class AdminDel extends Controller
{
    public function deleteUser($id){
        $user = User::find($id);
        if ($user) {
            $user->delete();
            Session::flash('success', 'User deleted successfully');
            return redirect(route('dashboard'));
    }
}

    public function deleteJobPost(){

    }
}
