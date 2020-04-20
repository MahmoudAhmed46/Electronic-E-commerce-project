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
                        <li><span>Edit Product / </span></li>
                        <li>Product name</li>
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
            <h4 class="view-product-title pl--10 pt--20"># Edit the Product</h4>
        </div>
        <div class="container mt-4 ml-5">
            <form action="{{url('/admin/edit-products/'.$products->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="lbl-form">Product Name</label>
                    <input type="text" class="form-control inp" value="{{$products->name}}" name="product_name" id="product_name" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Under Category</label>
                    <select name="cat_id" id="cat_id" class="form-control inp">
                        <option value='' selected disabled> select </option>
                        @foreach($categories as $category)
                            <option value={{$category->id}} @if($category->id==$products->cat_id) selected @endif>
                                {{$category->name}} </option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Code</label>
                    <input type="text" class="form-control inp" value="{{$products->code}}" name="product_code" id="product_code" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Product Price</label>
                    <input type="number" class="form-control inp" value="{{$products->price}}" name="product_price" id="product_price" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Product Quantity</label>
                    <input type="number" class="form-control inp" value="{{$products->quantity}}"  name="quantity" id="quantity" required>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Product Description</label>
                    <textarea name="product_description" id="product_description" value="{{$products->description}}" class="form-control inp"></textarea>
                </div>
                <div class="form-group">
                    <label class="lbl-form">Picture upload</label>
                    <input type="file" name="img">
                </div>
                <div class="reset-button">
                    <input type="submit" class="btn btn-success mb-3" value="Edit Product">
                </div>
            </form>
        </div>
    </div>
    <!--end main content inner -->
@endsection
