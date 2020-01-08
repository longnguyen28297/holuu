@extends('admin.layouts.index')
@section('adminCont')
<div class="card mb-3">
  <div class="card-header">
 {{$topic_detail->title}}</div>
<div class="col-md-12">
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
	</div>
	@if($topic_detail->censor==0)
	@can('admin')
            <a href="{{asset('admin/censor_topic')}}/{{$topic_detail->slug}}" class="btn btn-success">Duyệt</a>
            @endcan
            @endif
</div>
@stop()