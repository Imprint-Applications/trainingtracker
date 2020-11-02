<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModule;
use App\Models\Module;
use Illuminate\Http\Request;
use Auth;
use Datatables;

class UsersController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
        $allModules = UserModule::where('user_id', '=', 1)
            ->join('modules', 'user_modules.modules_id', '=', 'modules.id')
            ->get();
        $compModules = UserModule::all();
        // dd($allModules);
        return view('/dashboard', compact([
            'allModules' => $allModules,
            // 'compModules' => $compModules,
        ]));
    }
}
