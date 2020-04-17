@extends('layouts.master')
@section('title')Pet Flakes @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Pet Flakes </h1>
        <p>List of All</p>
    </div>
    <div>
        <a href="{{ route('admin.all_petImage') }}" class="btn btn-primary">Product image</a>
        <a href="{{ route('admin.all_petspecifaction') }}" class="btn btn-primary">Specification</a>
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
            
            <a href="{{ route('admin.add_petImage') }}" class="btn btn-primary pull-right">+ Product image</a>
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
                        @foreach($all_pet_pimage_info as $pet_pimage)
                        <tbody>
                            <tr>
                                <td>{{ $pet_pimage->id}}</td>
                                <td class="center"><img src='{{ asset($pet_pimage->image) }}'style="height: 80px; width: 80px;"></td>
                                
                                <td class="center">
                                    @if($pet_pimage->publication_status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($pet_pimage->publication_status==1)
                                    <a class="btn btn-danger" href="{{ route('admin.unactive_pet_pimage',$pet_pimage->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-success" href="{{ route('admin.active_pet_pimage',$pet_pimage->id) }}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('admin.edit_pet_pimage',$pet_pimage->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('admin.delete_pet_pimage',$pet_pimage->id) }}" id="delete" >
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