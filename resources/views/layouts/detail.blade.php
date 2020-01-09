@extends('layouts.master')
@section('content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
<div class="row">
	<div class="col-md-12">
		<h2 class="post-title">{{$topic_detail->title}}</h2>
		<div class="post-information">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<span><?php
			$date=date_create($topic_detail->created_at);
			echo date_format($date,"d/m/Y H:i:s");
			?></span>&emsp;
			<i class="fa fa-edit">
				<?php 
				$creator = DB::table('users')->where('id',$topic_detail->creator)->first();
				echo $creator->name;
				?>
			</i>&ensp;
			<i class="fa fa-eye" aria-hidden="true"> {{$topic_detail->views}}</i>
		</div>
		<!-- Bản Tin -->
		<p>
			<strong>
				{{$topic_detail->summary}}
			</strong>
		</p>
		<p>
			<?php echo htmlspecialchars_decode($topic_detail->content); ?>
		</p>
		<?php 
			$keyword = explode(',', $topic_detail->keyword);
			foreach ($keyword as $word) {
		?>
		<a href="{{asset('search?key=')}}{{$word}}"><span class="badge badge-secondary">{{$word}}</span></a>
	<?php } ?>
	<br>
	<br>
		<p style="text-align: right;">
			&nbsp;
		</p>

		<!-- Icon-Share -->
		
		<div class="icon-share">
			<p><strong>Chia Sẻ:</strong></p>
			<a title="FaceBook" href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}">
				<span><i class="fab fa-facebook"></i></span>
			</a>
			<a title="Google" href="https://plus.google.com/share?url={{url()->full()}}">
				<span><i class="fab fa-google-plus"></i></span>
			</a>
			<a title="Twitter" href="https://twitter.com/share?text=dongholuu&url={{url()->full()}}">
				<span><i class="fab fa-twitter-square"></i></span>
			</a>
			<p><strong>Fanpage:</strong></p>
			<div class="fb-like" data-href="@if(isset($info)&&$info!=''&&$info->facebook!=''){{$info->facebook}}@endif" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
		</div>{{$info->facebook}}

		<!-- Tab links -->
		<div class="tab">
			<button class="tablinks active" onmouseover="openCity(event, 'thongtin')">Thông tin tác
			giả</button>
			<button class="tablinks" onmouseover="openCity(event, 'baiviet')">Bài viết khác</button>
		</div>
		@if(isset($info)&&$info!='')
		<div id="thongtin" class="tabcontent">
			<div class="tab-thongtin">
				<div class="avatar">
					<img width="100" height="100" src="{{asset('public/images/logo')}}/{{$info->logo}}">
				</div>
				<div class="text">
					<h5>
						{{$info->name}}
						<span>websiteholuu</span>
					</h5>

					<p>
						<?php 
						echo ($info->content);
						?>
					</p>

				</div>
			</div>
		</div>
		@endif
		<div id="baiviet" class="tabcontent">
			<div class="row">
				@foreach ($topic_new->take(3) as $topic)
				<div class="img-baiviet col-md-4">
					<a href="{{asset('chi-tiet')}}/{{$topic->slug}}">
						<img src="{{asset('public/images')}}/{{$topic->images}}" alt="">
					</a>

					<div class="post-content">
						<a href="{{asset('chi-tiet')}}/{{$topic->slug}}">
							<h3>
								{{$topic->title}}
							</h3>
						</a>
					</div>
					<div class="post-information">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<span>{{$topic->created_at}}</span>&emsp;
						<i class="fa fa-edit">
						</i>&ensp;
					</div>
				</div>
				@endforeach


			</div>
		</div>
	</div>
</div>

<div class="tittle-wrap">
	<h2>
		<span>BÀI VIẾT LIÊN QUAN</span>
	</h2>
</div>

<div class="row">
	@foreach ($same_topic as $topic)
	<div class="img-baiviet col-md-4">
		<a href="{{asset('chi-tiet')}}/{{$topic->slug}}">
			<img src="{{asset('public/images')}}/{{$topic->images}}" alt="">
		</a>

		<div class="post-content">
			<a href="{{asset('chi-tiet')}}/{{$topic->slug}}">
				<h3>
					{{$topic->title}}
				</h3>
			</a>
		</div>
		<div class="post-information">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<span>{{$topic->created_at}}</span>&emsp;
			<i class="fa fa-edit">
			</i>&ensp;
		</div>
	</div>
	@endforeach
</div>
@stop