<?php

namespace App\Http\Controllers\ViewVideo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Video;
use App\Like;
use App\Comment;
use App\User;

class ViewVideoController extends Controller
{
    public function index($slug_video){
      // $video = DB::table('videos')
      //             ->where('videos.slug_video','=', $slug_video)
      //             ->join('users','users.id', '=', 'videos.id_user')
      //             ->select('videos.*','users.photo_path', 'users.name')
      //             ->first();
      $video = Video::where('slug_video', $slug_video)->firstOrFail();
      $user = User::where('id', $video->id_user)->first();
      $comment = Comment::where('comments.id_video',$video->id)->get();
      $like = Like::where('id_video', $video->id)->count();
      return view('user.view_video.view_video', compact('user','video','comment', 'like'));
    }

    public function likeVideo(Request $request){
      try {
        $video = Video::where('id', $request->id_video)->first();
        $datalike = new Like;
        $datalike->likes += 1;
        $datalike->id_member = Auth::id();
        $datalike->id_video = $video->id;
        $datalike->save();

        return response()
          ->json(['status' => true, 'description' => 'Berhasil Menambahkan Data !!!']);

      } catch (\Exception $e) {
        return response()
          ->json(['status' => false, 'description' => $e]);
      }
    }

    public function commentVideo(Request $request){
      try {
        $datacomment = new Comment;
        $datacomment->komentar = $request->komentar;
        $datacomment->id_member = Auth::id();
        $datacomment->id_video = $request->id_video;
        $datacomment->save();

        return response()
          ->json(['status' => true, 'description' => 'Data Berhasil Ditambahkan !!!']);

      } catch (\Exception $e) {
        return response()
          ->json(['status' => true, 'description' => $e]);
      }
    }

    public function commentView(Request $request){
      try {
        $comment = DB::table('comments')->where('id_video')
                  ->join('users','users.id', '=', 'comments.id_member')
                  ->select('comments.*','users.photo_path', 'users.name')
                  ->get();
        $comment = Comment::all();

        if($comment->count()==0){
          $html = "";
        }
        else{
          $html = "";
          foreach ($comment as $key) {
            $html .= "<div class='channels-card-image'>";
            $html .= "<div class='row'>";
            $html .= "<div class='col-2'>";
            $html .= "<a href='#'><img src='". asset("img/profile_pict/".$key->photo_path) ."' class='img-fluid' alt='people' style='width:50px;height:50px;margin-left:25px;'></a>";
            $html .= "</div>";
            $html .= "<div class='col-10'>";
            $html .= "<div class='form-group'>";
            $html .= "<p><b>". $key->id_member ."</b><br>". $key->created_at ."</p>";
            $html .= "<span>". $key->komentar ."</span>";
            $html .= "</div>";
            $html .= "</div>";
            $html .= "</div>";
            $html .= "</div>";
            $html .= "<hr>";
          }
          return response()
          ->json(['status' => true, 'description' => 'done !!!', 'data'=> $html]);
        }
      } catch (\Exception $e) {
        return response()
        ->json(['status' => false, 'description'=> $e]);
      }
    }

}
