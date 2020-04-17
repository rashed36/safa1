@extends('layouts.master')
<title>Add Slider - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-slideshare"></i> Add Slider</h1>
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
            <h3 class="tile-title">Add Slider</h3>
            <form action="{{ route('admin.save_slider') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Categories">Categories</label>
                        <select class="form-control" id="Categories" name="categories">
                            <option value="organic">organic</option>
                            <option value="paper_cons">paper-cons</option>
                            <option value="briquette">briquette</option>
                            <option value="pet_flakes">pet-flakes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea class="form-control" rows="4" name="description" id="description">{{Request::old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="image">Slider Image</label>
                        <input class="form-control" type="file" id="image" name="slider_image"/>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Category</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_slider')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection