@extends('layouts.master')
<title>Add Product Overview - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Add Product Overview</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Add </h3>
            <form action="{{ route('admin.save_POverview_paperCons') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="ANGLE">ANGLE <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="productAngle" id="ANGLE" value="{{old('productAngle')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="LENGTH">LENGTH (IN MM) <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="length" id="LENGTH" value="{{old('length')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="WEIGHT">WEIGHT (IN G) <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="weight" id="WEIGHT" value="{{old('weight')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="INSIDE">INSIDE DIAMETER BASE (IN MM) <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="insidebase" id="INSIDE" value="{{old('insidebase')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="FINISH">FINISH <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="finish" id="FINISH" value="{{old('finish')}}"/>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_POverview_paperCons') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection