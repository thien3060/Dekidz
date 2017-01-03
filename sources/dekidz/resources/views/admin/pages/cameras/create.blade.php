@extends($layout)

@section('content-header')
    <h1>
        Add New Camera
        &middot;
        <small>{!! link_to_route('admin.cameras.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.cameras.form')
    </div>

@stop

@section('script')

@endsection
