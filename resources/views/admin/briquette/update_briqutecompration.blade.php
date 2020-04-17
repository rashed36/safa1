@extends('layouts.master')
<title>update Briquette Comparison with other fuels - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Update Briquette Comparison with other fuels</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Update Briquette Comparison with other fuels</h3>
            <form action="{{ route('admin.update_briquette_comparison',$comparison_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="name">Factor <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="factor" id="name" value="{{$comparison_info->factor}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Briquettes <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="briquettes" id="name" value="{{$comparison_info->briquettes}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Wood <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="wood" id="name" value="{{$comparison_info->wood}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Coal <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="coal" id="name" value="{{$comparison_info->coal}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Furnace oil <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="furnaceoid" id="name" value="{{$comparison_info->furnaceoid}}"/>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.comparison_briquette_all') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection