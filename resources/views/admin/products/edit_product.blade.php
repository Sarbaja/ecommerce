@extends('layouts.layoutbackend.backend_main')

@section('content')

    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                                <div class="white-box">
                                        <h3 class="settings-heading">Edit Products</h3>
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
                                        <form class="form-horizontal form-material" name="edit_product" id="edit_product" method="post" action="{{ url('/admin/edit-product/' .$productDetails->id) }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="col-md-12">Product Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control form-control-line" name="product_name" id="product_name" value="{{$productDetails->name }}" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Category</label>
                                                <div class="col-sm-12">
                                                    <select name="category_id" class="form-control form-control-line">
                                                        
                                                        <?php echo $categories_dropdown; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Product code</label>
                                                <div class="col-md-12">
                                                    <input type="text"value="{{$productDetails->code }}"  class="form-control form-control-line" name="product_code" id="product_code" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Product Color</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$productDetails->color }}" class="form-control form-control-line" name="product_color" id="product_color" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Product Description</label>
                                                <div class="col-md-12">
                                                    <!-- <input type="text" class="form-control form-control-line" name="description" id="description" required=""> -->
                                                    <textarea rows="5" class="form-control form-control-line" name="product_description" id="product_description" required="">{{$productDetails->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Material & care</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line" name="care" id="care" required="">{{$productDetails->care }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Product Price</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{$productDetails->price }}" class="form-control form-control-line" name="product_price" id="product_price" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Product Image</label>
                                                <div class="col-md-12">
                                                    <input type="file" class="form-control form-control-line" name="product_image" id="product_image">
                                                    <input type="hidden" name="current_image" value="{{ $productDetails->image }}">
                                                    @if(!empty($productDetails->image))
                                                        <img src="{{ asset('images/backend-img/products/small/' .$productDetails->image)}}" style="width:40px;"> <a href="{{ url('/admin/delete-productimg/' .$productDetails->id)}}">Delete</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-2">Feature Item</label>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="" name="feature_item" id="feature_item" @if($productDetails->feature_item == "1") checked @endif value="1"> 
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-2">Enable</label>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="" name="status" id="status" @if($productDetails->status == "1") checked @endif value="1"> 
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn passbtn">Update Product</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection