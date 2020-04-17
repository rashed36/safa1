@extends('layouts.master')
<title>Update Product Overview - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Update Product Overview</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Update </h3>
            <form action="{{ route('admin.update_POverview_paperCons',$POverview_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="ANGLE">ANGLE <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="productAngle" id="ANGLE" value="{{$POverview_info->product_angle}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="LENGTH">LENGTH (IN MM) <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="length" id="LENGTH" value="{{$POverview_info->length}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="WEIGHT">WEIGHT (IN G) <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="weight" id="WEIGHT" value="{{$POverview_info->weight}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="INSIDE">INSIDE DIAMETER BASE (IN MM) <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="insidebase" id="INSIDE" value="{{$POverview_info->insidebase}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="FINISH">FINISH <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="finish" id="FINISH" value="{{$POverview_info->finish}}"/>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_POverview_paperCons') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection