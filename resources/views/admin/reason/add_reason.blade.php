@extends('layouts.master')
<title>Add Reason - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-registered"></i> Add Reason</h1>
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
            <form action="{{ route('admin.save_reason') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <h3 class="tile-title">Add Reason</h3>
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
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="Reason">Reason</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your Company Established Date"
                        id="Reason"
                        name="reason"
                        value="{{old('reason')}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="details">Details</label>
                        <textarea class="form-control" type="text" name="details" id="details" cols="135" rows="4">{{Request::old('details')}}</textarea>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Reason</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_reason')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection