@extends('layouts.layoutbackend.backend_main')

@section('content')

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                                <div class="white-box">
                                        @if(Session::has('message_error'))
                                        <div class="alert alert-danger alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                                    <strong>{!! session('message_error') !!}</strong>
                                        </div>
                                    @endif
                                    @if(Session::has('message_success'))
                                        <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                                    <strong>{!! session('message_success') !!}</strong>
                                        </div>
                                    @endif
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="table1">
                                                <thead>
                                                    <tr style="color:white;background-color: #00AAFF !important;">
                                                        <th class="text-center">CMS Id</th>
                                                        <th class="text-center">Title</th>
                                                        <th class="text-center">URL</th>
                                                        <th class="text-center">Description</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Created On</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($cmsPages as $cms)
                                                        <tr>
                                                            <td>{{$cms->id}}</td>
                                                            <td>{{$cms->title}}</td>
                                                            <td>{{$cms->url}}</td>
                                                            <td>{{$cms->description}}</td>
                                                            <td>@if($cms->status == 1)Active @else Inactive @endif</td>
                                                            <td>{{$cms->created_at}}</td>
                                                            
                                                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{ $cms->id }}" Title="Product Information">Info</button>
                                                                <a href="/admin/edit-cms-page/{{$cms->id}}" class="btn btn-primary" title="Edit Product">EDIT</a>  
                                                                <a href="/admin/delete-cms-page/{{$cms->id}}" class="delCms btn btn-danger" title="Delete Product">DELETE</a></td>
                                                        </tr>

                                                        <!-- The Modal -->
                                                        <div class="modal fade" id="myModal{{ $cms->id }}">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                    
                                                                            <!-- Modal Header -->
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">{{$cms->title}} - Details</h4>
                                                                            
                                                                            </div>
                                                                            
                                                                            <!-- Modal body -->
                                                                            <div class="modal-body">
                                                                                <p>ID: {{$cms->id}}</p>
                                                                                <p>Title: {{$cms->title}}</p>
                                                                                <p>URL: {{$cms->url}}</p>
                                                                                <p>Description: {{$cms->description}}</p>
                                                                                <p>Status: @if($cms->status == 1)Active @else Inactive @endif</p>
                                                                                <p>Created At: {{$cms->created_at}}</p>
                                                                            </div>
                                                                            
                                                                            <!-- Modal footer 
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div> -->
                                                                        
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- End Modal -->

                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>

@endsection