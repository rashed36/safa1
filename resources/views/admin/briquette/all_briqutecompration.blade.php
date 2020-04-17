@extends('layouts.master')
@section('title')Briquette @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Briquette </h1>
        <p>List of All</p>
    </div>
    <div>
        <a href="{{ route('admin.Industries_briquette_all') }}" class="btn btn-primary pull-right">Industries and Possible</a>
        <a href="{{ route('admin.comparison_briquette_all') }}" class="btn btn-primary pull-right"> Briquette Comparison</a>
        <a href="{{ route('admin.img_briquette_all') }}" class="btn btn-primary pull-right">Product Image</a>
    </div>
    
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
            <a href="{{ route('admin.comparison_briquette') }}" class="btn btn-primary pull-right">+  Briquette Comparison</a>
            <h3>Briquette Comparison with other fuels</h3>
            <div class="tile-body">
                <div style="overflow-x:auto;">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Factor </th>
                                    <th> Briquettes </th>
                                    <th> Wood </th>
                                    <th> Coal </th>
                                    <th> Furnace oil </th>
                                    <th class="text-center"> Status </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            @foreach($all_comparison_info as $details)
                            <tbody>
                                <tr>
                                    <td>{{ $details->id}}</td>
                                    <td>{{ $details->factor}}</td>
                                    <td>{{ $details->briquettes}}</td>
                                    <td>{{ $details->wood}}</td>
                                    <td>{{ $details->coal}}</td>
                                    <td>{{ $details->furnaceoid}}</td>
                                    
                                    <td class="center">
                                        @if($details->publication_status==1)
                                        <span class="label label-success">Active</span>
                                        @else
                                        <span class="label label-danger">Unactive</span>
                                        @endif
                                    </td>
                                    <td class="center">
                                        @if($details->publication_status==1)
                                        <a class="btn btn-danger" href="{{ route('admin.unactive_briquette_comparison',$details->id)}}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                        @else
                                        <a class="btn btn-success" href="{{ route('admin.active_briquette_comparison',$details->id) }}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                        @endif
                                        <a class="btn btn-info" href="{{ route('admin.edit_briquette_comparison',$details->id) }}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.delete_briquette_comparison',$details->id) }}" id="delete" >
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