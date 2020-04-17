@extends('layouts.master')
<title>Update About - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-share"></i> Update About</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Update About</h3>
            <form action="{{ route('admin.update_about',$about_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="image">Profile Image</label>
                        <input class="form-control" type="file" id="image" name="profile_image" value="{{$about_info->profile_image}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea class="form-control" rows="4" name="description" id="description">{{$about_info->description}}</textarea>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update About</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_about')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection