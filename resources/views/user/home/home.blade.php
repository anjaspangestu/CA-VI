@extends('welcome')

@section('title', 'CAVI')

@section('content')
  <div class="container pb-0">
     <div class="video-block section-padding sl-ml90">
        <div class="row">
           <div class="col-md-12">
              <div class="main-title">
                 <h6>Video Terbaru</h6>
              </div>
           </div>
           @foreach ($videos as $item)
           <div class="col-xl-3 col-sm-6 mb-3">
               <div class="video-card">
                  <div class="video-card-image">
                     <a class="play-icon" href="/view/{{ $item->slug_video }}"><i class="fas fa-play-circle"></i></a>
                  <a href="/view/{{ url('read', $item->slug_video) }}"><img class="img-fluid" src="img/v2.png" alt=""></a>
                     <div class="time">3:50</div>
                  </div>
                  <div class="video-card-body">
                     <div class="video-title">
                        <a href="/view/{{'read', $item->slug_video }}">{{ $item->judul_video }}</a>
                     </div>
                     <div class="video-page text-success">
                        {{ $item->judul_kategori }}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                     </div>
                     <div class="video-view">
                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                     </div>
                  </div>
               </div>
            </div>
           @endforeach
        </div>
     </div>
  </div>

@endsection
