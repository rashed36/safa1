@extends('layouts.master')
<title>Update Product FAQ - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Update Product FAQ</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Update</h3>
            <form action="{{ route('admin.update_FAQ_organic',$FAQ_organic_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="qusno">Qus No <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control " type="text" name="qusno" id="qusno" value="{{$FAQ_organic_info->qusno}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="qus">Qus </label>
                        <textarea class="form-control" rows="4" name="qus" id="qus">{{$FAQ_organic_info->qus}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Ans">Ans</label>
                        <textarea class="form-control" rows="4" name="ans" id="Ans">{{$FAQ_organic_info->ans}}</textarea>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_FAQ_organic') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection