@extends('layouts.adminLayout.master')
@section('content')
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>View Categories</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{asset('assets/images/author/avatar.png')}}" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Mahmoud <i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Message</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <!--start main content inner -->
    <div class="col-12">
        <div>
            @if(Session::has('success_message'))
                <div class="alert alert-success" id="fadeOutsuccess">
                    <strong>Success!</strong> {!! session('success_message') !!}
                </div>
            @endif
            @if(Session::has('warning_message'))
                <div class="alert alert-warning" id="fadeOutwarn">
                    <strong>Warning!</strong> {!! session('warning_message') !!}
                </div>
            @endif
            <h4 class="view-product-title pl--10 pt--20"># Displaying all availabl Categories</h4>
            <form action="#">
                <lable class="float-left mrg">Search</lable>
                <input type="text" class="float-right" name="search">
            </form>
        </div>
        <div class="table-responsive mt-5">
            <table class="table table-striped">
                <thead class="tbl-head-txt">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Category Description</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <th>{{$category->id}}</th>
                    <th>{{$category->name}}</th>
                    <th>{{$category->code}}</th>
                    <th>
                        <input type="checkbox" id="cstatus" rel="{{$category->id}}" data-toggle="toggle"
                        @if($category->status==1) checked @endif>
                    </th>
                    <th>{{$category->description}}</th>
                    <th>{{$category->pieces}}</th>
                    <th>

                        <a href="{{url('/admin/edit-category/'.$category->id)}}" title="Edit Category" type="button" class="btn btn-warning " ><span class="fa fa-pencil"></span></a>
                        <a href="{{url('/admin/delete-category/'.$category->id)}}" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>

                    </th>

                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <!--end main content inner -->
@endsection
