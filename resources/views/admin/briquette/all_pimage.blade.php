@extends('layouts.master')
@section('title')Briquette @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Briquette </h1>
        <p>List of All</p>
    </div>
    <div>
        <a href="{{ route('admin.Industries_briquette_all') }}" class="btn btn-primary pull-right"> Industries and Possible</a>
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
            <div>
                <a href="{{ route('admin.img_briquette') }}" class="btn btn-primary pull-right">+ Product Image</a>
            </div>
            <h3>Product Image</h3>
            <div class="tile-body">
                <div style="overflow-x:auto;">
                    <table class="table table-hover table-bordered" id="">
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Image </th>
                                <th class="text-center"> Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        @foreach($all_briquette_pimage_info as $briquette_pimage)
                        <tbody>
                            <tr>
                                <td>{{ $briquette_pimage->id}}</td>
                                <td class="center"><img src='{{ asset($briquette_pimage->image) }}'style="height: 80px; width: 80px;"></td>
                                
                                <td class="center">
                                    @if($briquette_pimage->publication_status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($briquette_pimage->publication_status==1)
                                    <a class="btn btn-danger" href="{{ route('admin.unactive_briquette_pimage',$briquette_pimage->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>                               @else
                                    <a class="btn btn-success" href="{{ route('admin.active_briquette_pimage',$briquette_pimage->id) }}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('admin.edit_briquette_pimage',$briquette_pimage->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('admin.delete_briquette_pimage',$briquette_pimage->id) }}" id="delete" >
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