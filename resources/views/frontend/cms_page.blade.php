@extends('layouts.layoutfrontend.frontend_main')
@section('content')

<div class="main-content-wrapper">

        
        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                            <h1 class="page-title">{{$cmsPageDetails->title}}</h1>
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="current"><span>{{$cmsPageDetails->title}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <div class="container" style="padding:30px;">
            <div class="row">
                <div class="col-md-12">
                    <p>{{$cmsPageDetails->description}}</p>
                </div>
            </div>
        </div>

</div>

@endsection