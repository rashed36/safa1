@extends('layouts.master')
@section('title')Paper Cons @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Paper Cons </h1>
        <p>List of All</p>
    </div>
    <a href="{{ route('admin.all_PDescribe_paperCons') }}" class="btn btn-primary pull-right"> PDescribe</a>
    <a href="{{ route('admin.all_Pimage_paperCons') }}" class="btn btn-primary pull-right"> Pimage</a>
    <a href="{{ route('admin.all_Features_paperCons') }}" class="btn btn-primary pull-right"> Features</a>
    <a href="{{ route('admin.all_Specification_paperCons') }}" class="btn btn-primary pull-right"> Specification</a>
    <a href="{{ route('admin.all_Applications_paperCons') }}" class="btn btn-primary pull-right"> Applications</a>
    <a href="{{ route('admin.all_POverview_paperCons') }}" class="btn btn-primary pull-right"> POverview</a>
    <a href="{{ route('admin.all_Orvdescribe_paperCons') }}" class="btn btn-primary pull-right"> Orv Describe</a>
    <a href="{{ route('admin.all_Pattern_paperCons') }}" class="btn btn-primary pull-right"> Pattern</a>
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
        <a href="{{ route('admin.POverview_paperCons') }}" class="btn btn-primary pull-right">+ POverview</a>
        <h3>Product Overview</h3>
        <div class="tile-body">
            <div style="overflow-x:auto;">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="">
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> ANGLE </th>
                                <th> LENGTH (IN MM) </th>
                                <th> WEIGHT (IN G) </th>
                                <th> INSIDE DIAMETER BASE (IN MM) </th>
                                <th> FINISH </th>
                                <th class="text-center"> Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        @foreach($all_POverview_info as $pdescribe)
                        <tbody>
                            <tr>
                                <td>{{ $pdescribe->id}}</td>
                                <td>{{ $pdescribe->product_angle}}</td>
                                <td>{{ $pdescribe->length}}</td>
                                <td>{{ $pdescribe->weight}}</td>
                                <td>{{ $pdescribe->insidebase}}</td>
                                <td>{{ $pdescribe->finish}}</td>
                                <td class="center">
                                    @if($pdescribe->publication_status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($pdescribe->publication_status==1)
                                    <a class="btn btn-danger" href="{{ route('admin.unactive_POverview_paperCons',$pdescribe->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-success" href="{{ route('admin.active_POverview_paperCons',$pdescribe->id) }}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('admin.edit_POverview_paperCons',$pdescribe->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('admin.delete_POverview_paperCons',$pdescribe->id) }}" id="delete" >
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