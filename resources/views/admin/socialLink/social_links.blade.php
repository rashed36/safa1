@extends('layouts.master')

<title>Add-Social-Link - {{ config('app.name') }}</title>

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-link"></i> Add-Social-Link</h1>
    </div>
</div>
<div class="alert-success alert-dismissible col-md-8 mx-auto" role="alert"style="text-align: center";>
    <button class="close" type="button" data-dismiss="alert">×</button>
    <?php
    $message=Session::get('message');
    if($message)
    {
    echo $message;
    Session::put('message',NULL);
    }
    ?>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <form action="{{ route('admin.save_social_link') }}" method="POST" role="form">
                @csrf
                <h3 class="tile-title">Add-Social Links</h3>
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="social_facebook">Facebook Profile</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter facebook profile link"
                        id="social_facebook"
                        name="facebook"
                        value="{{old('facebook')}}"
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
                        value="{{old('twitter')}}"
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
                        value="{{old('instagram')}}"
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
                        value="{{old('linkedin')}}"
                        />
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Category</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_social_link')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection