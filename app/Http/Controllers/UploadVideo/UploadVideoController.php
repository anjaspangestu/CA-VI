<?php

namespace App\Http\Controllers\UploadVideo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categories;
use App\SubCategories;

class UploadVideoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user');
    }


  public function index(){
      $kategori = Categories::get();
      return view('user.upload_video.upload_video', compact('kategori'));
  }

  public function store(Request $request){
      $id_video = Video::max('id') + 1;
      
      try{
        $namefile = $request->file('video_path');
        $video = new Video;
        $video->judul_video = $request->judulvideo;
        $video->slug_video = str_random(15);
        $video->id_kategori = $request->kategori;
        $video->id_subkategori = $request->subkategori;
        $video->id_user = Auth::user()->id;
        $video->deskripsi = $request->deskripsi;
        $video->video_path = $namefile->getClientOriginalName();
        $video->video_type = $namefile->getClientOriginalExtension();
        $video->status_verifikasi = 1;
        $video->save();
        $namafile->move(public_path('video/'),$video->video_path);

        return response()
        ->json(['status' => true, 'description' => 'Data Berhasil Ditambahkan']);
      }catch(Exception $e){
        return response()
        ->json(['status' => false, 'description' => $e]);
      }
  }

  public function getSubCategories (Request $request){
    try {
      $subkategori = SubCategories::where('kategori_id', $request->id_kategori);
      $html = "";
      foreach ($subkategori as $data) {
        $html .="";
        $html .= "<div class='custom-control custom-checkbox'>";
        $html .= "<input type='checkbox' class='custom-control-input' id='". $data->id ."'>";
        $html .= "<label class='custom-control-label' for='". $data->id ."'>". $data->judul_kategori ."</label>";
        $html .= "</div>";
      }
      return response()
        ->json(['status' => true, 'description' => 'done !', 'data' => $html]);

    } catch (\Exception $e) {
      return response()
        ->json(['status' => false, 'description' => $e->getMessage()]);
    }
  }
}
