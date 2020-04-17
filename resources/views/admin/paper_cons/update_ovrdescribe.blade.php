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
            <h3 class="tile-title">Update</h3>
            <form action="{{ route('admin.update_Orvdescribe_paperCons',$Orvdescribe_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="description1">Description1</label>
                        <textarea class="form-control" rows="4" name="description1" id="description1">{{$Orvdescribe_info->description1}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description2">Description2</label>
                        <textarea class="form-control" rows="4" name="description2" id="description2">{{$Orvdescribe_info->description2}}</textarea>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_Orvdescribe_paperCons') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection