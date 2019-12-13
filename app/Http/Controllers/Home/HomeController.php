<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Video;

class HomeController extends Controller
{
  public function index()
  {

      if  (Auth::check()) {
        if (Auth::user()->role_id == 2) {
          $videos = DB::table('videos')
          ->join('categories','categories.id', '=', 'videos.id_kategori')
          ->join('sub_categories', 'sub_categories.id', '=', 'videos.id_subkategori')
          ->select('videos.*','categories.judul_kategori', 'sub_categories.judul_subkategori')->get();
          return view('user.home.home', compact('videos'));
        }
        elseif (Auth::user()->role_id == 1) {
          return view('admin.log-member.log-member');
        }
      }
      else {
        $videos = Video::all();
        return view('user.home.home', compact('videos'));
      }
  }

  public function showByCategories($request){
      $categories = Video::where('id_kategori', $request)->get();
      return view('category.film', compact('categories'));
  }
}
