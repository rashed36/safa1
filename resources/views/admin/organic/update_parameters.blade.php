@extends('layouts.master')
<title>Update Parameters of this product - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Update Parameters of this product</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Update</h3>
            <form action="{{ route('admin.update_Parmeters_organic',$parameters_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control " type="text" name="name" id="name" value="{{$parameters_info->name}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea class="form-control" rows="4" name="description" id="description">{{$parameters_info->description}}</textarea>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_Parmeters_organic') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection