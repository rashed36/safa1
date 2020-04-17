@extends('layouts.master')
@section('title')Slider @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-slideshare"></i> Slider</h1>
        <p>List of Slider</p>
    </div>
    <a href="{{ route('admin.add_slider') }}" class="btn btn-primary pull-right">Add-Slider</a>
</div>
<div class="alert-success alert-dismissible" role="alert"style="text-align: center";>
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
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div style="overflow-x:auto;">
                    <table class="table table-hover table-bordered" id="">
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Name </th>
                                <th> Categories </th>
                                <th> Description </th>
                                <th> slide </th>
                                <th class="text-center"> Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        @foreach($all_slider_info as $v_slider)
                        <tbody>
                            <tr>
                                <td>{{ $v_slider->id}}</td>
                                <td class="center">{{ $v_slider->name}}</td>
                                <td class="center">{{ $v_slider->categories}}</td>
                                <td class="center">{{ $v_slider->description}}</td>
                                <td class="center"><img src='{{ asset($v_slider->slider_image) }}'style="height: 80px; width: 80px;"></td>
                                <td class="center">
                                    @if($v_slider->publication_status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($v_slider->publication_status==1)
                                    <a class="btn btn-danger" href="{{ route('admin.unactive_slider',$v_slider->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-success" href="{{ route('admin.active_slider',$v_slider->id) }}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('admin.edit_slider',$v_slider->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('admin.delete_slider',$v_slider->id) }}" id="delete" >
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush