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
                                        <h3 class="settings-heading">Add Product Images</h3>
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
                                        <form class="form-horizontal form-material" name="add_images" id="add_attribute" method="post" action="{{ url('/admin/add-images/'.$productDetails->id) }}" enctype="multipart/form-data">
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
                                                <label class="col-md-12">Alternate Product Image (s)</label>
                                                <div class="col-md-12">
                                                    <input type="file" class="form-control form-control-line" name="image[]" id="image" multiple="multiple" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn passbtn">Add Images</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                            <div class="white-box">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" id="table1">
                                            <thead>
                                                <tr style="color:white;background-color: #00AAFF !important;">
                                                    <th class="text-center">Image product_id</th>
                                                    <th class="text-center">Product ID</th>
                                                    <th class="text-center">Images</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($productImages as $image)
                                                    <tr>
                                                        <td>{{$image->id}}</td>
                                                        <td>{{$image->product_id}}</td>
                                                        <td><img style="width:50px;" src="{{asset('images/backend-img/products/small/' .$image->image)}}"></td>
                                
                                                        <td><a href="javascript:" rel="{{ $image->id }}" rel1="delete-alt-image" title="Delete Alternate Image" class="deleteRecord btn btn-danger">DELETE</a></td>
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