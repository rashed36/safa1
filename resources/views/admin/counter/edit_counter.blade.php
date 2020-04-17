@extends('layouts.master')
<title>Edit Counter - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-connectdevelop"></i> Edit Counter</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <form action="{{ route('admin.update_counter',$counter_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <h3 class="tile-title">Edit Counter</h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session()->has('message'))
                <div class="alert alert-{{session('type')}}">
                    {{session('message')}}
                </div>
                @endif
                <hr>
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="establishment">Established</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your Company Established Date"
                        id="establishment"
                        name="establishment"
                        value="{{$counter_info->establishment}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="employees">Employees</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your Number Of Employees"
                        id="employees"
                        name="employees"
                        value="{{$counter_info->employees}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="countries">Countries</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Number of Countries Sell product"
                        id="countries"
                        name="countries"
                        value="{{$counter_info->countries}}"
                        />
                    </div>
                    
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Counter</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_counter')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection