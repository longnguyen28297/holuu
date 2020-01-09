@extends('layouts.master')
@section('content')
			<div class="tittle-wrap">
				<h2>
					<span>Tìm kiếm</span>
				</h2>
			</div>
			<div class="spacer"></div>

			<div class="bot">
				<div class="row">
					<!-- anh1 -->
					@foreach($topic_search as $topic)
					<div class="img-bot col-md-6 col-xs-12">
						<div class="img-small">
							<a href="{{asset('chi-tiet')}}/{{$topic->slug}}"> <img src="{{asset('images')}}/{{$topic->images}}" style="width: 100%; height: 200px;">
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
									@foreach($creator as $creator)
				@if($creator->id==$topic_detail->creator)
				{{$creator->name}}
				@endif
				@endforeach
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
					{!!$topic_search->render()!!}
				</div>
			</div>

@stop()