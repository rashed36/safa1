@extends('layouts.master')
<title>Edit Contact - {{ config('app.name') }}</title>
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-address-card"></i> Edit Contact</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="tile">
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
            <form action="{{ route('admin.update_contact',$contact_info->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <h3 class="tile-title">Edit Contact</h3>
                <hr>
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="Phone">Phone</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your Phone Number"
                        id="Phone"
                        name="phone"
                        value="{{$contact_info->phone}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Fax">Fax</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your Fax Number"
                        id="Fax"
                        name="fax"
                        value="{{$contact_info->fax}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="WhatsApp">WhatsApp</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your WhatsApp Number"
                        id="WhatsApp"
                        name="whatsapp"
                        value="{{$contact_info->whatsapp}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Skype">Skype</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your Fax Number"
                        id="Skype"
                        name="skype"
                        value="{{$contact_info->skype}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Email">Email</label>
                        <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Your Email Address"
                        id="Email"
                        name="email"
                        value="{{$contact_info->email}}"
                        />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Address">Address</label>
                        <textarea
                        class="form-control"
                        type="text"
                        name="address"
                        id="Address"
                        placeholder="Enter Your Address"
                        cols="135"
                        rows="3">{{$contact_info->address}}</textarea>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Contact</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.all_contact')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection