@extends($layout)

@section('content-header')
    <h1>
        Config Video Links
    </h1>
@stop

@section('content')
    <div>
        {!! Form::open(['route' => 'admin.post_video_link']) !!}
        <div class="row">
            <div class="col-sm-6">
                @foreach($links as $key => $link)
                    <div class="form-group">
                        {!! Form::label(@$key, @$key.':') !!}
                        {!! Form::text(@$key, @$link, ['class' => 'form-control']) !!}
                        {!! $errors->first(@$key, '<div class="text-danger">:message</div>') !!}
                    </div>
                @endforeach
                <div class="form-group">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop
