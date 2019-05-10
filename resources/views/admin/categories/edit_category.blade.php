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
                                        <h3 class="settings-heading">Edit Category</h3>
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
                                        <form class="form-horizontal form-material" name="create_category" id="create_category" method="post" action="{{ url('/admin/edit-category/'.$categoryDetails->id) }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="col-md-12">Category Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control form-control-line" name="category_name" id="category_name" value="{{ $categoryDetails->name }}" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Main Category</label>
                                                <div class="col-sm-12">
                                                    <select name="parent_id" class="form-control form-control-line">
                                                        <option value="0">Main Category</option>
                                                        @foreach($categorylevel as $level)
                                                            <option value="{{ $level->id }}" @if($level->id == $categoryDetails->parent_id) selected @endif>{{ $level->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Category Description</label>
                                                <div class="col-md-12">
                                                    <!-- <input type="text" class="form-control form-control-line" name="description" id="description" required=""> -->
                                                    <textarea rows="5" class="form-control form-control-line" name="description" id="description" required="">{{ $categoryDetails->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Category Url</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control form-control-line" name="url" id="url" value="{{ $categoryDetails->url }}" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-2">Enable</label>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="" name="status" id="status" @if($categoryDetails->status == "1") checked @endif value="1"> 
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn passbtn">Update Category</button>
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