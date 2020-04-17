@extends('layouts.master')
@section('title')Category @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Fabric </h1>
        <p>List of All</p>
    </div>
    <a href="{{ route('admin.all_Pdescription_organic') }}" class="btn btn-primary pull-right"> Pdescription</a>
    <a href="{{ route('admin.all_Pimage_organic') }}" class="btn btn-primary pull-right"> Pimage</a>
    <a href="{{ route('admin.all_Specification_organic') }}" class="btn btn-primary pull-right"> Specification</a>
    <a href="{{ route('admin.all_Parmeters_organic') }}" class="btn btn-primary pull-right"> Parmeters</a>
    <a href="{{ route('admin.all_Advantages_organic') }}" class="btn btn-primary pull-right"> Advantages</a>
    <a href="{{ route('admin.all_FAQ_organic') }}" class="btn btn-primary pull-right"> FAQ</a>
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
            <a href="{{ route('admin.Parmeters_organic') }}" class="btn btn-primary pull-right">+ Parmeters</a>
            <h3>Parameters of this product</h3>
            <div class="tile-body">
                <div style="overflow-x:auto;">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Name </th>
                                    <th> Describe </th>
                                    <th class="text-center"> Status </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            @foreach($all_Parmeters_info as $Parmeters)
                            <tbody>
                                <tr>
                                    <td>{{ $Parmeters->id}}</td>
                                    <td>{{ $Parmeters->name}}</td>
                                    <td>{{ $Parmeters->description}}</td>
                                    <td class="center">
                                        @if($Parmeters->publication_status==1)
                                        <span class="label label-success">Active</span>
                                        @else
                                        <span class="label label-danger">Unactive</span>
                                        @endif
                                    </td>
                                    <td class="center">
                                        @if($Parmeters->publication_status==1)
                                        <a class="btn btn-danger" href="{{ route('admin.unactive_Parmeters_organic',$Parmeters->id)}}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                        @else
                                        <a class="btn btn-success" href="{{ route('admin.active_Parmeters_organic',$Parmeters->id) }}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                        @endif
                                        <a class="btn btn-info" href="{{ route('admin.edit_Parmeters_organic',$Parmeters->id) }}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.delete_Parmeters_organic',$Parmeters->id) }}" id="delete" >
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
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush