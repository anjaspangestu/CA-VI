<?php

namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
      return view('admin.setting.setting');
    }
}
