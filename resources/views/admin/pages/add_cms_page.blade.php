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
                                        <h3 class="settings-heading">Add CMS Page</h3>
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
                                        <form class="form-horizontal form-material" name="add_cms_page" id="add_cms_page" method="post" action="{{ url('/admin/add-cms-page') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="col-md-12">Title</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control form-control-line" name="title" id="title" required=""> </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">CMS Page URL</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control form-control-line" name="url" id="url" required=""> </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-12">Description</label>
                                                <div class="col-md-12">
                                                    <!-- <input type="text" class="form-control form-control-line" name="description" id="description" required=""> -->
                                                    <textarea rows="5" class="form-control form-control-line" name="description" id="description" required=""></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                    <label class="col-md-12">Meta Title</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-control-line" name="meta_title" id="meta_title"> </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                        <label class="col-md-12">Meta Description</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control form-control-line" name="meta_description" id="meta_title"> </div>
                                            </div>

                                            <div class="form-group">
                                                    <label class="col-md-12">Meta Keywords</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-control-line" name="meta_keywords" id="meta_keywords"> </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                    <label class="col-md-2">Enable</label>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" class="" name="status" id="status" value="1"> 
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn passbtn">Add CMS Page</button>
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