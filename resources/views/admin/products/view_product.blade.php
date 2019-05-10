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
                                                        <th class="text-center">Product Id</th>
                                                        <th class="text-center">Category Id</th>
                                                        <th class="text-center">Category Name</th>
                                                        <th class="text-center">Product Name</th>
                                                        <th class="text-center">Product Code</th>
                                                        <th class="text-center">Product Color</th>
                                                        <th class="text-center">Product Description</th>
                                                        <th class="text-center">Product Price</th>
                                                        <th class="text-center">Product Image</th>
                                                        <th class="text-center">Feature Item</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($products as $product)
                                                        <tr>
                                                            <td>{{$product->id}}</td>
                                                            <td>{{$product->category_id}}</td>
                                                            <td>{{$product->category_name}}</td>
                                                            <td>{{$product->name}}</td>
                                                            <td>{{$product->code}}</td>
                                                            <td>{{$product->color}}</td>
                                                            <td>{{$product->description}}</td>
                                                            <td>{{$product->price}}</td>
                                                            <td>
                                                                @if(!empty($product->image))
                                                                    <img src="{{ asset('/images/backend-img/products/small/' .$product->image)}}" style="width:60px;">
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($product->feature_item == 1)
                                                                Yes
                                                                @else 
                                                                No
                                                                @endif
                                                            </td>
                                                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{ $product->id }}" Title="Product Information">Info</button><a href="/admin/edit-product/{{$product->id}}" class="btn btn-primary" title="Edit Product">EDIT</a>  <a href="javascript:" rel="{{ $product->id }}" rel1="delete-product" class="deleteRecord btn btn-danger" title="Delete Product">DELETE</a><a href="/admin/add-features/{{$product->id}}" class="btn btn-primary" title="Add Attribute">+</a><a href="/admin/add-images/{{$product->id}}" class="btn btn-info" title="Add Images">Image</a></td>
                                                        </tr>

                                                        <!-- The Modal -->
                                                        <div class="modal fade" id="myModal{{ $product->id }}">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                    
                                                                            <!-- Modal Header -->
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">{{$product->name}} - Details</h4>
                                                                            
                                                                            </div>
                                                                            
                                                                            <!-- Modal body -->
                                                                            <div class="modal-body">
                                                                                <p>ID: {{$product->id}}</p>
                                                                                <p>Name: {{$product->name}}</p>
                                                                                <p>Category Id: {{$product->category_id}}</p>
                                                                                <p>Product Code: {{$product->code}}</p>
                                                                                <p>Product Price: {{$product->price}}</p>
                                                                                <p>Description: {{$product->description}}</p>
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