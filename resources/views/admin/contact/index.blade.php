@extends('layouts.master')
@section('title')Contact @endsection
@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-address-card"></i> Contact</h1>
        <p>List of Contact</p>
    </div>
    <a href="{{ route('admin.add_contact') }}" class="btn btn-primary pull-right">Add-Contact</a>
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
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>WhatsApp</th>
                                <th>Skype</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th class="text-center"> Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        @foreach($all_contact_info as $v_contact)
                        <tbody>
                            <tr>
                                <td>{{ $v_contact->id}}</td>
                                <td class="center">{{ $v_contact->phone}}</td>
                                <td class="center">{{ $v_contact->fax}}</td>
                                <td class="center">{{ $v_contact->whatsapp}}</td>
                                <td class="center">{{ $v_contact->skype}}</td>
                                <td class="center">{{ $v_contact->email}}</td>
                                <td class="center">{{ $v_contact->address}}</td>
                                <td class="center">
                                    @if($v_contact->publication_status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">Unactive</span>
                                    @endif
                                </td>
                                <td class="center">
                                    @if($v_contact->publication_status==1)
                                    <a class="btn btn-danger" href="{{ route('admin.unactive_contact',$v_contact->id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-success" href="{{ route('admin.active_contact',$v_contact->id) }}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                    @endif
                                    <a class="btn btn-info" href="{{ route('admin.edit_contact',$v_contact->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('admin.delete_contact',$v_contact->id) }}" id="delete" >
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