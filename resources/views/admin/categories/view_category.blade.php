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
                                        <table class="table table-bordered table-hover" id="table">
                                                <thead>
                                                    <tr style="color:white;background-color: #00AAFF !important;">
                                                        <th class="text-center">Category Id</th>
                                                        <th class="text-center">Category Name</th>
                                                        <th class="text-center">Category Type</th>
                                                        <th class="text-center">Category Description</th>
                                                        <th class="text-center">Category Url</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($categories as $category)
                                                        <tr>
                                                            <td>{{$category->id}}</td>
                                                            <td>{{$category->name}}</td>
                                                            <td>{{$category->parent_id}}</td> <!-- how to display parent id category name -->
                                                            <td>{{$category->description}}</td>
                                                            <td>{{$category->url}}</td>
                                                            <td><a href="/admin/edit-category/{{$category->id}}" class="btn btn-primary">EDIT</a>  <a href="{{ url('/admin/delete-category/' .$category->id) }}" class="delCategory btn btn-danger">DELETE</a></td>
                                                        </tr>
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