@extends('welcome')

@section('title', 'Profil')

@section('css')
  <script type="text/javascript" src="{{ asset('css/account/account.css') }}"></script>
@endsection

@section('content')
  <div class="container-fluid upload-details">
       <div class="row">
          <div class="col-lg-12">
             <div class="main-title">
                <h6>Profil</h6>
             </div>
          </div>
       </div>
        <div class="row">
          <div class="card col-sm-6">
            <div class="image">
              <img src="{{  }}" alt="">
            </div>
            <div class="form-group">
               <label class="control-label">Nama <span class="required">*</span></label>
               <input name="name" class="form-control border-form-control" value="{{ Auth::user()->name }}" type="text" id="name_user">
            </div>
            <div class="form-group">
               <label class="control-label">Email <span class="required">*</span></label>
               <input name="email" class="form-control border-form-control" value="{{ Auth::user()->email }}" type="text" id="email_user">
            </div>
            <div class="row">
               <div class="col-sm-12 text-right">
                  <button type="button" class="btn btn-primary" data-toggle="modal" onclick="openModal(this)">Edit Data Diri</button>
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="editProfile">Edit Profile</h4>
                        </div>
                        <div class="modal-body">
                          <form role="form" method="post" id="form-changeName">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="id_name">
                            <div class="slim-content">
                            <div class="slim circle photo-container" style="border-radius:50%;" {{-- data-label="upload image here" --}}
                              data-size="230,230" {{-- Ukuran Gambar--}}
                              data-ratio="1:1"
                              data-jpeg-compression="80"
                              data-status-upload-success="berhasil disimpan"
                              data-force-type="jpg" id="profile-image"
                              value="{{ asset('img/'.$data->photo_path)}}">
                              <input type="file" name="image[]" required />
                            </div>
                          </div>
                            <div class="form-group">
                               <label class="control-label">Nama <span class="required">*</span></label>
                               <input name="name" class="form-control border-form-control" value="{{ Auth::user()->name }}" type="text" id="ma,e">
                            </div>
                            <div class="form-group">
                               <label class="control-label">Email <span class="required">*</span></label>
                               <input name="email" class="form-control border-form-control" value="{{ Auth::user()->email }}" type="text" id="email">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" onclick="save(this)">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <button type="button" name="button" class="btn btn-primary border-none" data-toggle="modal" onclick="openModalPass(this)">Edit Password</button>
                  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="editPass">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="editPass">Edit Password</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <form role="form" action=""  method="post" id="form-changePassword">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label class="control-label" for="current_password" style="float:left;">Password Lama</label>
                              <div class="input-group" id="show_hide_password">
                                <input type="password" name="current_password" class="form-control border-form-control" id="current_password">
                                <div class="input-group-append">
                                  <button type="button" class="btn btn-light" onclick="showAndhidePassword()">
                                    <i class="fa fa-eye-slash"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="form-group" id="show_hide_password_new_passowrd">
                              <label class="control-label" for="newPass" style="float:left;">Password Baru</label>
                              <div class="input-group">
                                <input type="password" name="new_password" class="form-control border-form-control" id="newPass">
                                <div class="input-group-append">
                                  <button type="button" class="btn btn-light" onclick="showAndhideNewPassword()">
                                    <i class="fa fa-eye-slash"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="form-group" id="show_hide_password_re_new_password">
                              <label class="control-label" for="confirmNewPass" style="float:left;">Konfirmasi Password Baru</label>
                              <div class="input-group">
                                <input type="password" name="confirm_new_pass" class="form-control border-form-control" id="confirmNewPass">
                                <div class="input-group-append">
                                  <button type="button" class="btn btn-light" onclick="showAndhideReNewPassword()">
                                    <i class="fa fa-eye-slash"></i>
                                  </button>
                                </div>
                              </div>
                            </div>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" onclick="change_password(this)">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
            </div>
       </div>
       <div class="col-sm-6">
         <div class="row">
           <div class="col-sm-6">
             <div class="video-card">
                <div class="video-card-image">
                   <a class="play-icon" href="/view/1"><i class="fas fa-play-circle"></i></a>
                   <a href="/view/1"><img class="img-fluid" src="img/v1.png" alt=""></a>
                   <div class="time">3:50</div>
                </div>
                <div class="video-card-body">
                   <div class="video-title">
                      <a href="/view/1">There are many variations of passages of Lorem</a>
                   </div>
                   <div class="video-page text-success">
                      Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                   </div>
                   <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                   </div>
                </div>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="video-card">
                <div class="video-card-image">
                   <a class="play-icon" href="/view/1"><i class="fas fa-play-circle"></i></a>
                   <a href="/view/1"><img class="img-fluid" src="img/v1.png" alt=""></a>
                   <div class="time">3:50</div>
                </div>
                <div class="video-card-body">
                   <div class="video-title">
                      <a href="/view/1">There are many variations of passages of Lorem</a>
                   </div>
                   <div class="video-page text-success">
                      Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                   </div>
                   <div class="video-view">
                      1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                   </div>
                </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </div>
@endsection

@section('js')
  <script type="text/javascript" src="{{ asset('js/account/account.js') }}"></script>
@endsection
