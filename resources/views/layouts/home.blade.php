@extends('layouts.master')
@section('content')
<!-- tin moi  -->
                    <section>
                        <div class="row">
                            <!-- tin trai -->
                            @if(isset($topic_first))
                            <div class="col-md-8 small-section">
                                <div class="post-item-tc clearfix">
                                    <div class="img-thumb">
                                        <a href="{{asset('chi-tiet')}}/{{$topic_first->slug}}"><img src="{{asset('public/images')}}/{{$topic_first->images}}" class="img-fluid"
                                                alt="{{$topic_first->title}}"></a>
                                    </div>
                                    <div class="post-content-tc">
                                        <a title="{{$topic_first->title}}" href="{{asset('chi-tiet')}}/{{$topic_first->slug}}">
                                            <h3>{{$topic_first->title}}</h3>
                                        </a>
                                        <div class="post-information clearfix">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"> <span>{{$topic_first->created_at}}</span></i></li>
                                                <li><i class="fas fa-edit"> </i><a href="#"><?php $creator= DB::table('users')->where('id',$topic_first->creator)->first();
                                                    echo $creator->name;
                                                 ?></a></li>

                                            </ul>
                                        </div>
                                        <div class="text-content">
                                            <p>{{$topic_first->summary}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- tin phai -->
                            <div class="col-md-4 no-padding">
                                <div class="hot-new">
                                    <ul>@foreach($topic_new->skip(1)->take(4) as $topic)
                                        <li class="post-item-small">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-3">
                                                    <div class="img-thumb">
                                                        <a href="{{asset('chi-tiet')}}/{{$topic->slug}}"><img src="{{asset('public/images')}}/{{$topic->images}}" class="img-fluid"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-9 no-padding-left">
                                                    <div class="post-content">
                                                        <a href="{{asset('chi-tiet')}}/{{$topic->slug}}">
                                                            <p>{{$topic->title}} </p>
                                                        </a>
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
                        </div>
                    </section>
                    <!-- slider -->
                    <section>
                        <div class="row slider">
                            <div class="owl-carousel owl-theme col-md-12">
                                @foreach($all_topic as $topic)
                                <div class="item">
                                    <a href="{{asset('chi-tiet')}}/{{$topic->slug}}">
                                        <img src="{{asset('public/images')}}/{{$topic->images}}" alt="">
                                        <p>{{$topic->title}}</p>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            @if(isset($banner_slider))
                            <div class="col-md-12"><img width="100%" src="{{asset('public/images/banner')}}/{{$banner_slider->images}}" alt=""></div>
                            @endif

                        </div>
                    </section>
                    <!-- tin tuc co ban -->
                    <section>
                        <div class="row">
                                @foreach ($tags_home as $tag)
                            <div class="col-md-6 ">
                                <div class="main-new">
                                    <div class="title-name">
                                        <h3><span> {{$tag->name}}</span></h3>
                                    </div>
                                    <?php 
                                        $id_index='';
                                        $indexing = DB::table('indexing')->select('id')->where('id_tags',$tag->id)->get();
                                        foreach ($indexing as $index) {
                                            $id_index.=$index->id.',';
                                        }
                                        $topicFTags = DB::table('topic')->where('id_index',trim($id_index,','))->where('censor','1')->get();
                                        $topicFTags_first=$topicFTags->first();
                                        ?>
                                        @if(isset($topicFTags_first))
                                    <div class="post-item-main clearfix">
                                        <div class="img-thumb">
                                            <a href="{{asset('chi-tiet')}}/{{$topicFTags_first->slug}}"><img src="{{asset('public/images')}}/{{$topicFTags_first->images}}" class="img-fluid"
                                                    alt="Ảnh giao lưu họ Dương"></a>
                                        </div>
                                        <div class="post-content-main">
                                            <a title="Thanh niên Họ Dương giao lưu cùng nhóm Naboardgames" href="{{asset('chi-tiet')}}/">
                                                <h3>{{$topicFTags_first->title}}</h3>
                                            </a>
                                            <div class="post-information-main clearfix">
                                                <ul>
                                                    <li><i class="fas fa-calendar-alt"> <span>{{$topicFTags_first->created_at}}</span></i></li>
                                                    <li><i class="fas fa-edit"> </i><a href="#">
                                                        <?php 
                                                            $creator=DB::table('users')->where('id',$topicFTags_first->creator)->first();
                                                            echo $creator->name;
                                                        ?>
                                                    </a></li>

                                                </ul>
                                            </div>
                                            <div class="text-main">
                                                <p>{{$topicFTags_first->summary}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="post-item">
                                        <ul>
                                            <?php foreach ($topicFTags->skip(1) as $topic){ ?>
                                            <li class="post-item-small">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-3">
                                                        <div class="img-thumb">
                                                            <a href="{{asset('chi-tiet')}}/{{$topic->slug}}"><img src="{{asset('public/images')}}/{{$topic->images}}" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-9 no-padding-left">
                                                        <div class="post-content">
                                                            <a href="{{asset('chi-tiet')}}/">
                                                                <p>{{$topic->title}} </p>
                                                            </a>
                                                        </div>
                                                        <div class="post-info clearfix">
                                                            <i class="fas fa-calendar-alt"><span> {{$topic->created_at}}</span></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- end -->
                        </div>
                    </section>


                    <!-- slide thư viện -->
                    @foreach($tags_library as $tag)
                    <section>
                        <div class="main-new">
                            <div class="title-name">
                                <h3><span> {{$tag->name}}</span></h3>
                            </div>
                            <div class="owl-carousel owl-theme col-md-12">
                                 <?php 
                                        $id_index='';
                                        $indexing = DB::table('indexing')->select('id')->where('id_tags',$tag->id)->get();
                                        foreach ($indexing as $index) {
                                            $id_index.=$index->id.',';
                                        }
                                        $topicFTags = DB::table('topic')->where('id_index',trim($id_index,','))->where('censor','1')->get();
                                        $topicFTags_first=$topicFTags->first();
                                        foreach ($topicFTags as $topic){
                                        ?>
                                <div class="item"><a href="{{asset('chi-tiet')}}/{{$topic->slug}}"><img src="{{asset('public/images')}}/{{$topic->images}}" alt="">
                                        <p>{{$topic->title}}</p>
                                    </a></div>
                                        <?php } ?>
                            </div>
                        </div>
                    </section>
                    @endforeach
@stop()