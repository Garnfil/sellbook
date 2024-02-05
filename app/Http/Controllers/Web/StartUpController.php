<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StartUp\StoreRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class StartUpController extends Controller
{
    public function index(Request $request) {
        
        $users = User::count();
        if($users > 0) return redirect()->route('home');

        return view('startup');
    } 

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $user = User::create(array_merge($data, ['email_verified_at' => Carbon::now(), 'status' => 'active']));

        $role = Role::create(['name' => 'Super-Admin']);
        $user->assignRole($role);

        return redirect()->route('home');
    }
}
