@extends('welcome')
@section('title', 'Upload')

@section('content')
  <form class="" action="/upload-video" method="post">
    <div class="content-wrapper">
      <div class="container-fluid pt-5 pb-5">
         <div class="row">
            <div class="col-md-8 mx-auto text-center upload-video pt-5 pb-5">
               <h1><i class="fas fa-file-upload text-primary"></i></h1>
               <input style="padding-left:90px;" type="file" name="file">
               <h4 class="mt-5">Select Video files to upload</h4>
               <p class="land">or drag and drop video files</p>
               <div class="mt-4">
                  <button class="btn btn-outline-primary" type="submit">Upload Video</button>
               </div>
            </div>
         </div>
      </div>
    </div>
  </form>
@endsection
