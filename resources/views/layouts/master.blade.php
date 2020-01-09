<!DOCTYPE html>
<html lang="en">
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
  <!-- font-chu -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet">

  <!-- slider-bar -->
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.css')}}">
  <!-- style -->
  <link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/scss/header.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/scss/trangchu.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/scss/footer.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/xaydung.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/chitiet.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/right.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.css')}}">


  <title>Bản tin điện tử họ Lưu Việt Nam</title>
</head>
<body>
@include('layouts.header')
  <main>
        <div class="container">
            <div class="row home">
                <div class="main col-lg-9 col-md-9 col-sm-8">
                  <div class="top-small">
          <div class="tc">
            <a title="Trang chủ" href="{{asset('home')}}">
              <span>Trang chủ /&nbsp;</span>
              <meta content="1" property="position">
            </a>
          </div>
          <?php if(isset($tags_topic)&&$tags_topic!=''){?>
          <div class="xdt">
            <a title="{{$tags_topic->name}}" href="{{asset('indexing')}}/{{$tags_topic->slug}}">
              <span>{{$tags_topic->name}} /&nbsp;</span>
              <meta content="1" property="position">
            </a>
          </div>
          <?php } ?>
          
          <?php if(isset($indexing_topic)&&$indexing_topic!=''){?>
          <div class="xdt">
            <a title="{{$indexing_topic->name}}" href="{{asset('indexing')}}/{{$indexing_topic->slug}}">
              <span>{{$indexing_topic->name}} /&nbsp;</span>
              <meta content="1" property="position">
            </a>
          </div>
          <?php } ?>
          <?php if(isset($topic_detail)&&$topic_detail!=''){?>
          <div class="xdt">
            <a title="{{$topic_detail->title}}" href="">
              <span>{{$topic_detail->title}} &nbsp;</span>
              <meta content="1" property="position">
            </a>
          </div>
          <?php } ?>
        </div>
  <!--HeaderLine End-->
  @yield('content')
</div>
<div class="banner-right col-lg-3 col-md-3 col-sm-4">

    @foreach($topic_topview->take(3) as $topic)
    <div class="post-item-banner clearfix">
        <div class="img-thumb">
            <a href="{{asset('chi-tiet')}}/{{$topic->slug}}"><img src="{{asset('images')}}/{{$topic->images}}" alt="" class="img-fluid"></a>
        </div>
        <div class="post-content-banner">
            <a href="{{asset('chi-tiet')}}/{{$topic->slug}}">
                <h4 title="{{$topic->title}}">{{$topic->title}}</h4>
            </a>
            <div class="post-information-banner clearfix">
                <ul>
                    <li><i class="fas fa-calendar-alt"></i><span> <?php
                    $date=date_create($topic->created_at);
                    echo date_format($date,"d/m/Y H:i:s");
                    ?></span></li>
                    <li><i class="fas fa-edit"> </i><a href="#">@foreach($creator as $creator)
        @if($creator->id==$topic_detail->creator)
        {{$creator->name}}
        @endif
        @endforeach</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <div class="tab-wrap">

        <ul class="nav tab-titles">
            <li class="active"><a href="#tab1">MỚI NHẤT</a></li>
            <li><a href="#tab2">XEM NHIỀU </a></li>
        </ul>
        <div id="tab1" class="tab-content" style="display: block;">
            <ul>
                @foreach ($topic_new as $topic)
                <li class="post-item-small">
                    <div class="row">
                        <div class="col-md-4 col-xs-3">
                            <div class="img-thumb">
                                <a href="{{asset('chi-tiet')}}/{{$topic->slug}}"><img src="{{asset('images')}}/{{$topic->images}}" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-9 no-padding-left">
                            <div class="post-content">
                                <a href="{{asset('chi-tiet')}}/{{$topic->slug}}">{{$topic->title}} </a>
                            </div>
                            <div class="post-info clearfix">
                                <i class="fas fa-calendar-alt"><span> <?php
                                $date=date_create($topic->created_at);
                                echo date_format($date,"d/m/Y H:i:s");
                                ?></span></i>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>

        <div id="tab2" class="tab-content">
            <ul>
                @foreach ($topic_topview as $topic)
                <li class="post-item-small">
                    <div class="row">
                        <div class="col-md-4 col-xs-3">
                            <div class="img-thumb">
                                <a href="{{asset('chi-tiet')}}/{{$topic->slug}}"><img src="{{asset('images')}}/{{$topic->images}}" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-9 no-padding-left">
                            <div class="post-content">
                                <a href="chi-tiet/{{$topic->id}}">{{$topic->title}} </a>
                            </div>
                            <div class="post-info clearfix">
                                <i class="fas fa-calendar-alt"><span> <?php
                                $date=date_create($topic->created_at);
                                echo date_format($date,"d/m/Y H:i:s");
                                ?></span></i>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="video">
        <h2><span>video</span> </h2>
    </div>
    @foreach ($videos as $video)
    <a href=#>
        <video class="embed-responsive" controls>
            <source src="{{asset('videos')}}/{{$video->video}}" type="video/mp4">
              Your browser does not support the video tag.
          </video>
      </a>
      @endforeach
      <div class="lienket">
        <div class="name">
            <h2><span>liên kết</span></h2>

        </div>
        <div class="scroll">
            <ul>@foreach ($link as $link)
                <a href="{{$link->link}}">
                    <li>{{$link->title}}</li>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="noibat">
        <div class="name">
            <h2><span>Tin nổi bật</span> </h2>
        </div>
        <ul>
            @foreach($topic_topview->take(5) as $topic)
            <li class="post-item-small">
                <div class="row">
                    <div class="col-md-4 col-xs-3">
                        <div class="img-thumb">
                            <a href="{{asset('chi-tiet')}}/{{$topic->id}}"><img src="{{asset('images')}}/{{$topic->images}}" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-9 no-padding-left">
                        <div class="post-content">
                            <a href="{{asset('chi-tiet')}}/{{$topic->id}}">{{$topic->title}}</a>
                        </div>
                        <div class="post-info clearfix">
                            <i class="fas fa-calendar-alt"><span> {{$topic->created_at}}</span></i>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
  </div>
</main>


    <!-- tab-hover -->


</div>
<!-- back to top -->
<div class="back-to-top"><i class="fas fa-arrow-up"></i></div>
</div>
</div>
  @include('layouts.footer')
  <!--Footer-Last End-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
  <!-- style-js -->
  
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  
  <script src="{{asset('frontend/js/cycle.all.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>

  <script src="{{asset('frontend/js/slider.js')}}"></script>
  <script src="{{asset('frontend/js/tab-hover.js')}}"></script>
  <script src="{{asset('frontend/js/back-to-top.js')}}"></script>
  <script src="{{asset('frontend/js/chitiet.js')}}"></script>
  
  
  </body>
  
  </html>
  