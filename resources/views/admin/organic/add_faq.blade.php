@extends('layouts.master')
<title>Add Product FAQ - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Add Product FAQ</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Add</h3>
            <form action="{{ route('admin.save_FAQ_organic') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="Qus">Qus No <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control " type="text" name="qusno" id="Qus" value="{{old('qusno')}}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Qus">Qus </label>
                            <textarea class="form-control" rows="4" name="qus" id="Qus">{{Request::old('qus')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Ans">Ans</label>
                            <textarea class="form-control" rows="4" name="ans" id="Ans">{{Request::old('ans')}}</textarea>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.all_FAQ_organic') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection