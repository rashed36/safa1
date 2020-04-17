@extends('layouts.master')
<title>Add Briquette Comparison with other fuels - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Add Briquette Comparison with other fuels</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Add </h3>
            <form action="{{ route('admin.save_briquettecomparison') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="Factor">Factor <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="factor" id="Factor" value="{{old('factor')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Briquettes">Briquettes <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="briquettes" id="Briquettes" value="{{old('briquettes')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Wood">Wood <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="wood" id="Wood" value="{{old('wood')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Coal">Coal <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="coal" id="Coal" value="{{old('coal')}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Furnace">Furnace oil <span class="m-l-5 text-danger"> </span></label>
                        <input class="form-control " type="text" name="furnaceoid" id="Furnace" value="{{old('furnaceoid')}}"/>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.comparison_briquette_all') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection