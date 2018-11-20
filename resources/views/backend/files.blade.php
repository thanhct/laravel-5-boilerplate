@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Files!</strong>
                </div><!--card-header-->
                <div class="card-body">
                    <form action="{{ url('admin/fileUpload') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="uploadFiles[]" multiple required="true"><input type="submit" value="uploadFile">
                    </form>

                    @foreach($files as $file)
                        <br/>
                        <a href="{{$file}}" target="_blank">{{$file}}</a>
                    @endforeach
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
