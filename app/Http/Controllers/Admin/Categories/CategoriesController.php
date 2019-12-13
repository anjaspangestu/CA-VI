<?php

namespace App\Http\Controllers\Admin\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategories;
use App\Categories;
use Illuminate\Support\Facades\Auth;
use App\User;


class CategoriesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $item = Categories::get();
        return view('admin.category.category', compact('item'));
    }

    public function showSubCategories(){
        $subcategories = SubCategories::where('id_kategori', $request->idkategori)->get();
        return response()
        ->json(['status' => true, 'description' => $subcategories]);
    }

    public function edit(Request $request){

        $data = SubCategories::where('id','id')
                ->update(['judul_subkategori'=>$request->subcategories]);

        return response()
        ->json(['status' => true, 'description' => 'sub kategori berhasil di ubah']);
    }


    
}
