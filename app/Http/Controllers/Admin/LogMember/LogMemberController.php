<?php

namespace App\Http\Controllers\Admin\LogMember;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index(){
        return view('admin.log-member.log-member');
    }
}
