@extends('layouts.master')
@section('title')Pattern Cons @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-product-hunt"></i> Pattern Cons </h1>
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
        <a href="{{ route('admin.pattern_paperCons') }}" class="btn btn-primary pull-right">+ Pattren</a>
        <h3>Pattern Image</h3>
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
                    @foreach($all_cons_Pattern_info as $pattern_pimage)
                    <tbody>
                        <tr>
                            <td>{{ $pattern_pimage->id}}</td>
                            <td class="center"><img src='{{ asset($pattern_pimage->image) }}'style="height: 80px; width: 80px;"></td>
                            
                            <td class="center">
                                @if($pattern_pimage->publication_status==1)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Unactive</span>
                                @endif
                            </td>
                            <td class="center">
                                @if($pattern_pimage->publication_status==1)
                                <a class="btn btn-danger" href="{{ route('admin.unactive_pattern_paperCons',$pattern_pimage->id)}}">
                                    <i class="halflings-icon white thumbs-down"></i>
                                </a>
                                @else
                                <a class="btn btn-success" href="{{ route('admin.active_pattern_paperCons',$pattern_pimage->id) }}">
                                    <i class="halflings-icon white thumbs-up"></i>
                                </a>
                                @endif
                                <a class="btn btn-info" href="{{ route('admin.edit_pattern_paperCons',$pattern_pimage->id) }}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{ route('admin.delete_pattern_paperCons',$pattern_pimage->id) }}" id="delete" >
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