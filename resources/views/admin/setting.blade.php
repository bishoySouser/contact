@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Setting Contact Form</div>

                <div class="card-body">
                    @if (Session::has('info'))
                        <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                            {{ Session::get('info') }}
                        </div>
                        </div>
                    @endif
                    @if (count( $errors->all() ) )
                    <div class="row">
                        <div class="col-md-12">
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        </div>
                    </div>
                    @endif
                    <form action="{{ url('/setting', ["id" => $setting->id]) }}" method="Post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" name="id" value="{{ $setting->id }}">
                        <div class="form-group">
                            <label>Header Message</label>
                        <input type="text" name="header" value="{{$setting->header}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Footer Message</label>
                            <input type="text" name="footer" value="{{$setting->footer}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection