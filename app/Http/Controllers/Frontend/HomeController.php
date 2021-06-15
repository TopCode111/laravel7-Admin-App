<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = DB::table('users')->join('role_user', 'users.id','=','role_user.user_id')->select('users.id','users.first_name','users.last_name','users.email','users.profession','users.avatar_type','users.avatar_location','users.country','users.self_introduction','role_user.role_id')->get();
        return view('frontend.index')->with('users',$users);
    }
}
