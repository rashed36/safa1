@extends('layouts.master')
<title>Edit-Social-Link - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-link"></i> Edit-Social-Link</h1>
    </div>
</div>
<div class="tile">
    <form action="{{ route('admin.update_social_link',$social_link_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <h3 class="tile-title">Edit-Social Links</h3>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="social_facebook">Facebook Profile</label>
                <input
                class="form-control"
                type="text"
                placeholder="Enter facebook profile link"
                id="social_facebook"
                name="facebook"
                value="{{$social_link_info->facebook}}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="social_twitter">Twitter Profile</label>
                <input
                class="form-control"
                type="text"
                placeholder="Enter twitter profile link"
                id="social_twitter"
                name="twitter"
                value="{{$social_link_info->twitter}}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="social_instagram">Instagram Profile</label>
                <input
                class="form-control"
                type="text"
                placeholder="Enter instagram profile link"
                id="social_instagram"
                name="instagram"
                value="{{$social_link_info->instagram}}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="social_linkedin">LinkedIn Profile</label>
                <input
                class="form-control"
                type="text"
                placeholder="Enter linkedin profile link"
                id="social_linkedin"
                name="linkedin"
                value="{{$social_link_info->linkedin}}"
                />
            </div>
        </div>
        <div class="tile-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Social-links</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="{{ route('admin.all_social_link')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        </div>
    </form>
</div>
@endsection