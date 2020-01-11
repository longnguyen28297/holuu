<!--Banner-->
  <div class="banner">  
      </div>
<!--banner-mobile-->
  <div class="header-moblie">
    @if(isset($banner_header)&&$banner_header!='')
  <img src="{{asset('images/banner')}}/{{$banner_header->images}}" class="img-fluid" alt="">
  @endif
  </div>
  <!--Header Start-->
  <header>
      <div class="container-fluid">
        <div class="row ">
            <div class="header-main col-mg-12">
                
            </div>
        </div>
      </div>
  </header>
  <!--Header End-->
  <!-- Menu Navigation Start -->
  <div class="menu-fixed">
    <div class="navbar dark navbar-default megamenu clearfix menu-wrap">
      <div class="container">
        <div class="row">
          <div class="menu-main">
            <nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="{{route('home')}}"><i class="fas fa-home"></i></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span><i class="fa fa-bars" aria-hidden="true"></i></span></button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                <ul class="navbar-nav nav justify-content-center">
                	@foreach ($tags_menu as $tag)
                  <li class="nav-item"> <a class="nav-link" href="{{asset('tags')}}/{{$tag->slug}}">{{$tag->name}}</a>
                    <div class="dropdown">
                      <div class="dropdown-menu">
                      	<?php 
                        $indexing = DB::table('indexing')->where('id_tags',$tag->id)->paginate();
                        foreach ($indexing as $index) {
                        ?>
                      	<a class="dropdown-item" href="{{asset('indexing')}}/{{$index->slug}}">{{$index->name}}</a>
                      <?php } ?>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menu Navigation End -->
  <!--HeaderLine Start-->
  <section id="newsticker">
    <div class="headline-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-1 col-sm-2 col-xs-3 headerline-left">
            <div class="headline-title ">
              <h3>TIN VẮN</h3>
            </div>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-9 headerline-slide">
            <ul class="ticker clearfix inline-block">
              @foreach($all_topic as $topic)
              <li><a href="{{asset('chi-tiet')}}/{{$topic->slug}}">{{$topic->title}}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 headerline-right">
            <!-- Search Form start -->
            <div class="form-Search">
              <form role="search" method="get" action="{{asset('search')}}" class="form-right">
                <input type="text" class="search-field" placeholder="Tìm kiếm..." name="key">
                <button type="submit" id="search-submit"> <i class="fa fa-search"></i></button>
              </form>
              <!-- Search Form end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
