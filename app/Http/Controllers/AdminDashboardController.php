<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard(){

//        session(['branch' => 'New York']);

        $activeBranch = session('branch');

        return view('admin.dashboard',compact('activeBranch'));
    }

    public function updateSession(Request $request)
    {
        $value = $request->input('value');


         session(['branch' => $request->branch]);

        $activeBranch = session('branch');

        return response()->json(['status' => 'success','branch' => $activeBranch]);
    }




}
