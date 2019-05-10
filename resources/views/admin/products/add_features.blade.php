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
                                        <h3 class="settings-heading">Add Product Attributes</h3>
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
                                        <form class="form-horizontal form-material" name="add_attribute" id="add_attribute" method="post" action="{{ url('/admin/add-features/'.$productDetails->id) }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="product_id" value="{{ $productDetails->id}}">
                                            <div class="form-group">
                                                <label class="col-md-3">Product Name</label>
                                                <label class="col-md-3"><strong>{{ $productDetails->name }}</strong></label>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3">Product Code</label>
                                                <label class="col-md-3"><strong>{{ $productDetails->code }}</strong></label>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3">Product Color</label>
                                                <label class="col-md-3"><strong>{{ $productDetails->color }}</strong></label>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3"></label>
                                                <div class="field_wrapper">
                                                    <div>
                                                        <input type="text" name="sku[]" id="sku" placeholder="SKU" required=""/>
                                                        <input type="text" name="size[]" id="size" placeholder="Size" required=""/>
                                                        <input type="text" name="price[]" id="price" placeholder="Price" required=""/>
                                                        <input type="text" name="stock[]" id="stock" placeholder="Stock" required=""/>

                                                        <a href="javascript:void(0);" class="add_button" title="Add field"><span style="font-size:25px;">+</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn passbtn">Add Attributes</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                            <div class="white-box">
                                <form action="{{ url('/admin/edit-attributes/'. $productDetails->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="table-responsive">
                        
                                        <table class="table table-bordered table-hover" id="table1">
                                                <thead>
                                                    <tr style="color:white;background-color: #00AAFF !important;">
                                                        <th class="text-center">Attribute Id</th>
                                                        <th class="text-center">SKU</th>
                                                        <th class="text-center">Size</th>
                                                        <th class="text-center">Price</th>
                                                        <th class="text-center">Stock</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($productDetails['attributes'] as $product)
                                                        <tr>
                                                            <td><input type="hidden" name="idAttr[]" value="{{$product->id}}">{{$product->id}}</td>
                                                            <td>{{$product->sku}}</td>
                                                            <td>{{$product->size}}</td>
                                                            <td><input type="text" name="price[]" value="{{$product->price}}"></td>
                                                            <td><input type="text" name="stock[]" value="{{$product->stock}}"></td>
                                                            
                                                            <td><input type="submit" value="Update" class="btn btn-primary">
                                                                <a href="javascript:" rel="{{ $product->id }}" rel1="delete-attribute" class="deleteRecord btn btn-danger">DELETE</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection