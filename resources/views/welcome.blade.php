@extends('layouts.home')
@section('home')

    <main>
        <div class="container">
            <div class="row home">
            <div class="main col-lg-9 col-md-9 col-sm-8">
                    <!-- tin moi  -->
                    <section>
                        <div class="row">
                            <!-- tin trai -->
                            <div class="col-md-8 small-section">
                                <div class="post-item-tc clearfix">
                                    <div class="img-thumb">
                                        <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" class="img-fluid"
                                                alt="Ảnh giao lưu họ Dương"></a>
                                    </div>
                                    <div class="post-content-tc">
                                        <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="{{route('chitiet')}}">
                                            <h3>Thanh niên họ Lưu giao lưu cùng nhóm Naboardgames</h3>
                                        </a>
                                        <div class="post-information clearfix">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"> <span>19/07/2019</span></i></li>
                                                <li><i class="fas fa-edit"> </i><a href="#">Ban thông tin truyền
                                                        thông</a></li>

                                            </ul>
                                        </div>
                                        <div class="text-content">
                                            <p>Vào 20h00 tối 18/7/2019, các bạn thanh niên Họ Lưu đã được giao lưu
                                                trực tuyến cùng nhóm Naboardgames gồm các anh Dương Việt Khánh, Nguyễn
                                                Đặng Việt Anh, chị Trần Thu Phương </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tin phai -->
                            <div class="col-md-4 no-padding">
                                <div class="hot-new">
                                    <ul>
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content">
                                                        <a href="{{route('chitiet')}}">
                                                            <p>Thanh niên Họ Lưu giao lưu </p>
                                                        </a>
                                                    </div>
                                                    <div class="post-info clearfix">
                                                        <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content">
                                                        <a href="{{route('chitiet')}}">
                                                            <p>Thanh niên Họ lưu giao lưu </p>
                                                        </a>
                                                    </div>
                                                    <div class="post-info clearfix">
                                                        <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                alt=""></a>

                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content">
                                                        <a href="{{route('chitiet')}}">
                                                            <p>Thanh niên Họ Lưu giao lưu </p>
                                                        </a>
                                                    </div>
                                                    <div class="post-info clearfix">
                                                        <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content ">
                                                        <a href="{{route('chitiet')}}">
                                                            <p>Thanh niên Họ Lưu giao lưu </p>
                                                        </a>
                                                    </div>
                                                    <div class="post-info clearfix">
                                                        <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content ">
                                                        <a href="{{route('chitiet')}}">
                                                            <p>Thanh niên Họ Lưu giao lưu </p>
                                                        </a>
                                                    </div>
                                                    <div class="post-info clearfix">
                                                        <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content">
                                                        <a href="{{route('chitiet')}}">
                                                            <p>Thanh niên Họ Lưu giao lưu </p>
                                                        </a>
                                                    </div>
                                                    <div class="post-info clearfix">
                                                        <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- slider -->
                    <section>
                        <div class="row slider">
                            <div class="owl-carousel owl-theme col-md-12">
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                            </div>
                            <div class="col-md-12"><img width="100%" src="{{asset('public/frontend/images/banner.jpg')}}" alt=""></div>

                        </div>
                    </section>
                    <!-- tin tuc co ban -->
                    <section>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Lịch sử dòng họ</span></h3>
                                    </div>
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature1.jpg')}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="{{route('chitiet')}}">
                                                <h3>Thanh niên họ Lưu giao lưu cùng nhóm Naboardgames</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>19/07/2019</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">Ban thông tin truyền
                                                            thông</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>Vào 20h00 tối 18/7/2019, các bạn thanh niên Họ Lưu đã được giao lưu
                                                    trực tuyến cùng nhóm Naboardgames gồm các anh Dương Việt Khánh,
                                                    Nguyễn
                                                    Đặng Việt Anh, chị Trần Thu Phương </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <ul>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="{{route('chitiet')}}">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="{{route('chitiet')}}">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="{{route('chitiet')}}"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="{{route('chitiet')}}">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Thông tin sự kiện</span></h3>
                                    </div>
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>Thanh niên họ Lưu giao lưu cùng nhóm Naboardgames</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>19/07/2019</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">Ban thông tin truyền
                                                            thông</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>Vào 20h00 tối 18/7/2019, các bạn thanh niên Họ Lưu đã được giao lưu
                                                    trực tuyến cùng nhóm Naboardgames gồm các anh Dương Việt Khánh,
                                                    Nguyễn
                                                    Đặng Việt Anh, chị Trần Thu Phương </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <ul>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Khuyến học khuyến tài</span></h3>
                                    </div>
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>Thanh niên họ Lưu giao lưu cùng nhóm Naboardgames</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>19/07/2019</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">Ban thông tin truyền
                                                            thông</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>Vào 20h00 tối 18/7/2019, các bạn thanh niên Họ Lưu đã được giao lưu
                                                    trực tuyến cùng nhóm Naboardgames gồm các anh Dương Việt Khánh,
                                                    Nguyễn
                                                    Đặng Việt Anh, chị Trần Thu Phương </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <ul>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Người tốt việc tốt</span></h3>
                                    </div>
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>Thanh niên họ Lưu giao lưu cùng nhóm Naboardgames</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>19/07/2019</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">Ban thông tin truyền
                                                            thông</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>Vào 20h00 tối 18/7/2019, các bạn thanh niên Họ Lưu đã được giao lưu
                                                    trực tuyến cùng nhóm Naboardgames gồm các anh Dương Việt Khánh,
                                                    Nguyễn
                                                    Đặng Việt Anh, chị Trần Thu Phương </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <ul>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Cộng đồng họ Lưu</span></h3>
                                    </div>
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>Thanh niên họ Lưu giao lưu cùng nhóm Naboardgames</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>19/07/2019</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">Ban thông tin truyền
                                                            thông</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>Vào 20h00 tối 18/7/2019, các bạn thanh niên Họ Lưu đã được giao lưu
                                                    trực tuyến cùng nhóm Naboardgames gồm các anh Dương Việt Khánh,
                                                    Nguyễn
                                                    Đặng Việt Anh, chị Trần Thu Phương </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <ul>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> Góp ý và phản hồi</span></h3>
                                    </div>
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="#">
                                                <h3>Thanh niên họ Lưu giao lưu cùng nhóm Naboardgames</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>19/07/2019</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">Ban thông tin truyền
                                                            thông</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>Vào 20h00 tối 18/7/2019, các bạn thanh niên Họ Lưu đã được giao lưu
                                                    trực tuyến cùng nhóm Naboardgames gồm các anh Dương Việt Khánh,
                                                    Nguyễn
                                                    Đặng Việt Anh, chị Trần Thu Phương </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <ul>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" class="img-fluid"
                                                                    alt=""></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="#">
                                                                <p>Báo cáo sơ kết 6 tháng đầu năm 2019 và phương hướng
                                                                    hoạt động </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> 19/07/2019</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- slide thư viện -->

                    <section>
                        <div class="main-new">
                            <div class="title-name">
                                <h3><span> Thư viện</span></h3>
                            </div>
                            <div class="owl-carousel owl-theme col-md-12">
                                <div class="item"><a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="#"><img src="{{asset('public/frontend/images/feature2.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                                <div class="item"><a href="#"><img src="{{asset('public/frontend/images/feature1.jpg')}}" alt="">
                                        <p>Thanh niên họ Lưu giao lưu ...</p>
                                    </a></div>
                            </div>
                        </div>
                    </section>
                </div>
@stop