<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roles;

class RoleController extends Controller
{
    public function addRole(Request $request) {

        $request->validate([
            'roletype' => 'required',
        ]);
        $role = new roles();
        $role -> roletype = $request->roletype;
        $selection = $request->input('roletype');
        $role->save();
        switch ($selection) {
            case 'Employer':
                return redirect()->route('Employerdetails');
                break;
            case 'Worker':
                return redirect()->route('WorkerDetails');
                break;
            default:
                return redirect()->route('Error');
                break;
            }
    }

    public function Enrol(Request $request){
        return view ('Enrol');
    }

}
