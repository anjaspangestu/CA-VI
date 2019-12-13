<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SportsController extends Controller
{
    public function index(){
      return view('user.category.sports');
    }
}
