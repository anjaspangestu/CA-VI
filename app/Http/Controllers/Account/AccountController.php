<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Utils\slim;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Video;
use Validator;
use App\Utils\Helper;

class AccountController extends Controller
{
    public function __construct(){
      $this->path 	= 'img/';
      $this->middleware('auth');
    }
    public function index(){
      $data = User::where('id', Auth::id())->first();
      $video = DB::table('videos')
      ->join('categories','categories.id', '=', 'videos.id_kategori')
      ->join('sub_categories', 'sub_categories.id', '=', 'videos.id_subkategori')
      ->select('videos.*','categories.judul_kategori', 'sub_categories.judul_subkategori')
      ->where('id_user', '=', Auth::id())->get();
      return view('user.account.account', compact('data','video'));
    }

    public function changeProfile(Request $request){
      $arr_validation = [
                    // 'name'  => 'required',
                ];

      $nice_name = array(
                    // 'name'  => 'Name',
                      );

      $validator = Validator::make($request->all(), $arr_validation);
      $validator->setAttributeNames($nice_name);
      if ($validator->fails()) {
        $result = Helper::validationErrorsToString($validator->errors());
        return response()
          ->json(['status' => false, 'description' => $result]);

      }
      else {
        try {
          $users = User::find(Auth::id());
          $users->name = $request->name;
          $users->email = $request->email;
          if (isset(Slim::getImages('image')[0])) {

          $image = Slim::getImages('image')[0];

          if ( isset($image['output']['data']) )
              {
                 $name                 = $image['output']['name'];
                 $data                 = $image['output']['data'];
                 $file                 = Slim::saveFile($data, $name, $this->path);
                 $users->photo_path    = $file['name'];
                 $users->photo_type    = substr($file['name'], -4);
              }
          }
          $users->save();

          return response()
            ->json(['status' => true, 'description' => 'Edit Success', 'name'=>$users->name]);
          // if (isset(Slim::getImages('image')[0])) {
          //   $image = Slim::getImages('image')[0];
          //   if ( isset($image['output']['data']) )
          //       {
          //          $name                 = $image['output']['name'];
          //          $data                 = $image['output']['data'];
          //          $file                 = Slim::saveFile($data, $name, $this->path);
          //          $filepath    = $file['name'];
          //          $filetype    = substr($file['name'], -4);
          //       }
          //   }
          //   $users = User::where('id', Auth::user()->id)
          //         ->update(
          //           ['name', $request->name],
          //           ['email', $$request->email],
          //           ['photo_path', $filepath],
          //           ['photo_type', $filetype]
          //         );
          //
          //   return response()
          //     ->json(['status' => true, 'description' => 'Edit Success', 'name'=>$request->name]);

        } catch (\Exception $e) {
          return response()
              ->json(['status' => false, 'description' => $e->getMessage()]);
        }
      }
    }

    public function changePassword(Request $request){
      $arr_validation = [
                    'current_password'  => 'required',
                    'new_password'  => 'required',
                    'confirm_new_pass'  => 'required',
                ];

      $nice_name = array(
                    'current_password'  => 'Password',
                    'new_password'  => 'Password',
                    'confirm_new_pass'  => 'Password',
                      );

      $validator = Validator::make($request->all(), $arr_validation);
      $validator->setAttributeNames($nice_name);

      if ($validator->fails()) {
        $result = Helper::validationErrorsToString($validator->errors());
        return response()
          ->json(['status' => false, 'description' => $result]);

      }
      else {
        $users = User::find(Auth::id());
        if (password_verify($request->current_password, $users->password)) {
          if ($request->new_password == $request->confirm_new_pass) {
            $users->password = bcrypt($request->new_password);
          }else {
            return response()
              ->json(['status' => false, 'description' => 'Password not Match']);
          }

          $users->save();
          return response()
            ->json(['status' => true, 'description' => 'Change Password Successfully']);
        }
      }
    }
}
