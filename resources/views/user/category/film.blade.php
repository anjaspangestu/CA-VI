@extends('sub')
@section('content')
  <div class="container pb-0">
     <div class="top-mobile-search">
        <div class="row">
           <div class="col-md-12">
              <form class="mobile-search">
                 <div class="input-group">
                   <input type="text" placeholder="Search for..." class="form-control">
                     <div class="input-group-append">
                       <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                     </div>
                 </div>
              </form>
           </div>
        </div>
     </div>
     <div class="video-block section-padding">
        <div class="row">
           <div class="col-md-12">
              <div class="main-title">
                 <h6>Film</h6>
              </div>
           </div>
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v1.png') }}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
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
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v2.png')}}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
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
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v3.png')}}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-danger">
                       Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                    </div>
                    <div class="video-view">
                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v4.png')}}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
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
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v5.png')}}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
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
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v6.png')}}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
                    </div>
                    <div class="video-page text-danger">
                       Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                    </div>
                    <div class="video-view">
                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v7.png')}}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
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
           <div class="col-xl-3 col-sm-6 mb-3">
              <div class="video-card">
                 <div class="video-card-image">
                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                    <a href="#"><img class="img-fluid" src="{{ asset('img/v8.png')}}" alt=""></a>
                    <div class="time">3:50</div>
                 </div>
                 <div class="video-card-body">
                    <div class="video-title">
                       <a href="#">There are many variations of passages of Lorem</a>
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
@endsection
