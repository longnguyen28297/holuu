@extends('layouts.master')
@section('content')
@if(isset($indexing_topic)&&$indexing_topic!='')
			<div class="tittle-wrap">
				<h2>
					<span>{{$indexing_topic->name}}</span>
				</h2>
			</div>
			@if(isset($listTopicFlIndexing_first)&&$listTopicFlIndexing_first!='')
			<div class="top-l">
				<div class="row">
					<div class="anh col-md-7 col-xs-12">
						<a href="{{asset('chi-tiet')}}/{{$listTopicFlIndexing_first->slug}}"><img src="{{asset('public/images')}}/{{$listTopicFlIndexing_first->images}}"></a>
					</div>
					<div class="col-md-5 col-xs-12">
						<div class="top">
							<a title="Lễ ra mắt Hội đồng Họ Dương huyện Đắk Mil, tỉnh Đắk Nông" href="{{asset('chi-tiet')}}/{{$listTopicFlIndexing_first->slug}}">
								<h3>
									{{$listTopicFlIndexing_first->title}}
								</h3>
							</a>

							<div class="post-information">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<span>{{$listTopicFlIndexing_first->created_at}}</span> 
								<i class="fa fa-edit"></i>
							</div>
							<div class="text-content">
								<p>
									{{$listTopicFlIndexing_first->summary}}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			<div class="spacer"></div>

			<div class="bot">
				<div class="row">
					<!-- anh1 -->
					@foreach($listTopicFlIndexing->skip(1) as $topic)
					<div class="img-bot col-md-6 col-xs-12">
						<div class="img-small">
							<a href="{{asset('chi-tiet')}}/{{$topic->slug}}"> <img src="{{asset('public/images')}}/{{$topic->images}}" style="width: 100%; height: 200px;">
							</a>
						</div>
						<div class="text-content">
							<a title="{{$topic->title}}" href="{{asset('chi-tiet')}}/{{$topic->slug}}">
								<h3>
									{{$topic->title}}
								</h3>
							</a>
							<div class="post-information">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<span>{{$topic->created_at}}</span> 
								<i class="fa fa-edit">
									<?php 
                                                            $creator=DB::table('users')->where('id',$topic->creator)->first();
                                                            echo $creator->name;
                                                        ?>
								</i>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<!-- phân trang -->
			<div class="pagination-box clearfix">
				<div class="navigation">
					{!!$listTopicFlIndexing->render()!!}
				</div>
			</div>
	@endif
@stop()