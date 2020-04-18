@extends('layouts.adminLayout.master')
@section('content')
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="#">Home</a></li>

                        <li><span>Edit Category / </span></li>
                        <li>category name</li>
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
    <!-- page container area end -->
    <!--start main content inner -->
    <div class="col-12">
        <div>
            <h4 class="view-product-title pl--10 pt--20"># Edit Category
            </h4>
        </div>
        <div class="container mt-4 ml-5">
            <form>
                <div class="form-group">
                    <label class="lbl-form">Category Name</label>
                    <input type="text" class="form-control inp" placeholder="Enter Category Name" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Code</label>
                    <input type="text" class="form-control inp" placeholder="Enter Category Code" name="code" id="code" required>
                </div>

                <div class="form-group">
                    <label class="lbl-form">Products Quantity</label>
                    <input type="number" class="form-control inp" placeholder="Enter Products Quantity" name="quantity" id="quantity" required>
                </div>

                <div class="reset-button">
                    <input type="submit" class="btn btn-success mb-3" value="Edit Category">
                </div>
            </form>
        </div>
    </div>
    <!--end main content inner -->
@endsection
