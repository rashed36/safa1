@extends('layouts.master')
@section('title')Social-Link @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-link"></i> Social-Link </h1>
        <p>List of Social-Link</p>
    </div>
    <a href="{{ route('admin.social_link') }}" class="btn btn-primary pull-right">Add-Social-Link</a>
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
                                <th>facebook</th>
                                <th>twitter</th>
                                <th>instagram</th>
                                <th>linkedin</th>
                                <th class="text-center"> Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        @foreach($all_social_link_info as $v_social_link)
                        <tbody>
                            <tr>
                                <td>{{ $v_social_link->id}}</td>
                                <td class="center">{{ $v_social_link->facebook}}</td>
                                <td class="center">{{ $v_social_link->twitter}}</td>
                                <td class="center">{{ $v_social_link->instagram}}</td>
                                <td class="center">{{ $v_social_link->linkedin}}</td>
                                <td class="center">
                                    @if($v_social_link->publication_status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($v_social_link->publication_status==1)
                                    <a class="btn btn-danger" href="{{ route('admin.unactive_social_link',$v_social_link->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-success" href="{{ route('admin.active_social_link',$v_social_link->id) }}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('admin.edit_social_link',$v_social_link->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('admin.delete_social_link',$v_social_link->id) }}" id="delete" >
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