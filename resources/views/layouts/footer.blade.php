<section class="footer-wrapper">
    <div class="container footer">
      <div class="row">
         @if(isset($info)&&$info!='')
        <div class="col-md-3 col-sm-6 footer-one">
          <div class="logo-footer"> <img src="{{asset('images/logo')}}/{{$info->logo}}" class="img-fluid" alt=""> </div>
          <div class="footer-one-content">
            <h4>{{$info->name}}</h4>
            <p><?php echo htmlspecialchars_decode($info->content); ?></p>
          </div>
        </div>
        @endif
        <div class="col-md-3 col-sm-6 footer-two">
          <div class="widget fbt-vc-inner clearfix">
            <div class="widget-title">
              <h2>TIN XEM NHIỀU</h2>
            </div>
            @foreach($topic_topview->take(5) as $topic)
            <div class="post-item ">
              <div class="row">
                <div class="col-sm-4 col-xs-3">
                  <div class="img-thumb"> 
                      
                      <a href="{{asset('chi-tiet')}}/{{$topic->slug}}"> <img src="{{asset('images')}}/{{$topic->images}}" class="img-fluid" alt="">
                    </a> </div>
                </div>
                <div class="col-sm-8 col-xs-9 ">
                  <div class="post-content"> 
                      <a title=" VIỆT NAM" href="{{asset('chi-tiet')}}/{{$topic->slug}}">
                    <h3> {{$topic->title}}</h3>
                    </a> </div>
                  <div class="post-information clearfix">
                    <ul class="date-footer">
                      <li class="text-footer"><span><i class="fas fa-calendar-alt"></i></span> {{$topic->created_at}}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-3 col-sm-6 footer-there">
             <div class="img-title">
              <h2>HÌNH ẢNH</h2>
                 <a href="#" id="details"> Xem tất cả</a>
            </div>
            <div class="img-footer">
                <div class="row">
                  @foreach($images8 as $images)
                <div class="col-md-6 ">
                    <div class="zoom-img">
                       <a class="fancybox" href="" data-fancybox-group="gallery" title=""><img src="{{asset('images')}}/{{$images->images}}"  class="img-fluid" alt="1"></a>
                    </div>
                    </div>
                    @endforeach
                </div>  
            </div>
          </div>
        <div class="col-md-3 col-sm-6 footer-four">
          <div class="title-statistic">
                <h2>THỐNG KÊ CẬP NHẬT</h2>
              
            <ul  class="category-list">
                  <li >
                      <a href="#">Truy cập trong ngày<span class="count">11,193</span>
                      </a>
                  </li>
                  <li >
                      <a href="#">Truy cập trong Tháng <span class="count">556,901</span>
                      </a>
                  </li>
                 <li >
                      <a href="#">Tổng Số Truy cập<span class="count">25,822,474</span>
                      </a>
                  </li>
              </ul>
            </div>
            <div class="title-statistic">
                <h2>THỐNG KÊ CẬP NHẬT</h2>
             <a href="#" id="detail"> Xem tất cả</a>
                <ul  class="category-list">
                  @if(isset($count_topic_other_city)&&$count_topic_other_city!='')
                  <li >
                      <a href="#">Khác<span class="count">({{$count_topic_other_city}} tin)</span>
                      </a>
                  </li>
                  @endif
                  @foreach($citys as $city)
                  <li >
                      <a href="#">{{$city->name}} <span class="count">({{$city->count_topic}} tin)</span>
                      </a>
                  </li>
                  @endforeach
              </ul>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!--Footer-End-->
  <!--Footer-Last Start-->
  <section>
      <div class="footer-last">
      <div class="container">
        @if(isset($info)&&$info!='')
          <div class="row">
          <div class="col-md-4 col-sm-12 footer-last-right text-justify">
              <div class="title-footer-last-right">
              <h3 style="text-transform: uppercase;">{{$info->name}} </h3>
              <p>© 2009-2018 Họ Dương Việt Nam. All rights reserved</p>
              
              </div>
                  
              </div>
              <div class="col-md-4 col-sm-12 footer-last-center ">
                  <div class="title-footer-last-center">
              <p>Địa chỉ: {{$info->address}}</p> 
          <span class=""> Điện thoại: {{$info->phone}} - Fax: {{$info->fax}} - Email: {{$info->email}}</span>
              </div>
                  </div>
              <div class="col-md-4 col-sm-12 footer-last-left text-center">
                  <div class="icon-footer">
                  <a href="">
                      <span><i class="fab fa-google-plus-g"></i></span>
                      </a>
                      <a href="">
                      <span><i class="fab fa-facebook-square"></i></span>
                      </a>
                      <a href="">
                      <span><i class="fab fa-twitter-square"></i></span>
                      </a>
                  </div>
              </div>
          </div>
          @endif
          </div>
      </div>
      </section>