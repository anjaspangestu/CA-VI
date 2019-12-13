@extends('upload-file')

@section('title', 'Upload Vide')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/upload-video/upload-video.css') }}">
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
@endsection

@section('content')
  <div class="container-fluid upload-details">
     <div class="row">
        <div class="col-lg-12">
           <div class="main-title">
              <h6>Upload Details</h6>
           </div>
        </div>
        <form id="submitvideo" onsubmit="return false">
            {{ csrf_field() }}
        {{-- Tampilan upload:awal --}}
        <div class="col-lg-2">
          <div class="box">
  					<input type="file" name="video_path" id="video">
  				</div>
        </div>
        <div class="col-lg-10">
           <div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.</div>

           <div class="osahan-progress">
              <div class="progress">
                 <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"   aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
              </div>
              <div class="osahan-close">
                 <a href="#"><i class="fas fa-times-circle"></i></a>
              </div>
           </div>
        </div>
        {{-- Tampilan Upload:akhir --}}
     </div>

     <div class="row">
        <div class="col-lg-10">
          <hr>
               <div class="osahan-form">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label for="e1">Judul Video</label>
                              <input type="text" placeholder="Judul Video" id="e1" class="form-control" name="judul_video">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label for="e2">Tentang</label>
                              <textarea rows="3" id="e2" name="deskripsi" class="form-control" placeholder="Deskripsi Video"></textarea>
                           </div>
                        </div>
                     </div>


                     <div class="row ">
                        <div class="col-lg-2 col-xs-6 col-4">
                           <div class="main-title">
                              <h6>Kategori</h6>
                           </div>
                        </div>
                        <div class="col-lg-2 col-xs-6 col-4">
                           <div class="main-title">
                              <h6>Sub Kategori</h6>
                           </div>
                        </div>

                     </div>
                     <div class="row category-checkbox">
                        <!-- checkbox 1col -->
                        <div class="col-lg-2 col-xs-6 col-4">
                          @foreach ($kategori as $item)
                          <div class="custom-control custom-checkbox">
                               <input type="checkbox" class="custom-control-input value" name="id_kategori" value="{{ $item->id }}" id="datacategories">
                               <label class="custom-control-label" for="datacategories">{{ $item->judul_kategori }}</label>
                          </div>
                          @endforeach
                        </div>
                        <!-- checkbox 2col -->
                        <div class="col-lg-2 col-xs-6 col-4">
                           <div id="submenu"></div>
                           <a href="#" data-toggle="modal" data-target="#exampleModal">
                             <i class="fa fa-plus-square"></i> Tambah
                           </a>
                           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">Tambah Sub-kategori</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                   ...
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                   <button type="button" class="btn btn-primary">Tambah</button>
                                 </div>
                               </div>
                             </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="osahan-area text-center mt-3">
                     <button class="btn btn-outline-primary" onclick="submitVideo()">Upload</button>
                  </div>
           </form>
           <hr>
           <div class="terms text-center">
              <p class="mb-0">Tulis sesuatu di sini sehingga tampilan menjadi cantik</p>
              <p class="hidden-xs mb-0">Bakalan Jelek Kalau Ini Harus Di Hapus</p>
           </div>
        </div>
     </div>
  </div>





@endsection

@section('scrips')

  <script type="text/javascript" src="{{ asset('js/upload-video/upload-video.js') }}"></script>

@endsection
