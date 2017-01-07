@extends($layout)

@section('content-header')
	<h1>
		{{ trans('admin.menus.dashboard.title') }}
		<small>{{ trans('admin.dashboard.control') }}</small>
	</h1>
@stop

@section('content')

<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>
					{!! DB::table('students')->count() !!}
				</h3>

				<p>
					{{ trans('admin.dashboard.student') }}
				</p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="{!! route('admin.students.index') !!}" class="small-box-footer">
				{{ trans('admin.dashboard.more_info') }} <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3>
					{!! Pingpong\Admin\Entities\Article::onlyPost()->count() !!}
				</h3>

				<p>
					{{ trans('admin.dashboard.article') }}
				</p>
			</div>
			<div class="icon">
				<i class="fa fa-book"></i>
			</div>
			<a href="{!! route('admin.articles.index') !!}" class="small-box-footer">
				{{ trans('admin.dashboard.more_info') }} <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>
					{!! DB::table('staffs')->count() !!}
				</h3>

				<p>
					{{ trans('admin.dashboard.staff') }}
				</p>
			</div>
			<div class="icon">
				<i class="fa fa-flag"></i>
			</div>
			<a href="{!! route('admin.staffs.index') !!}" class="small-box-footer">
				{{ trans('admin.dashboard.more_info') }} <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>
					{!! user()->count() !!}
				</h3>

				<p>
					{{ trans('admin.dashboard.user') }}
				</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="!! route('admin.users.index') !!}" class="small-box-footer">
				{{ trans('admin.dashboard.more_info') }} <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
</div>
<!-- /.row -->
@stop

@section('script')
	<script src="{!! admin_asset('components/raphael/raphael-min.js') !!}"></script>
	<script src="{!! admin_asset('adminlte/js/plugins/morris/morris.min.js') !!}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{!! admin_asset('adminlte/js/AdminLTE/dashboard.js') !!}" type="text/javascript"></script>

@stop
