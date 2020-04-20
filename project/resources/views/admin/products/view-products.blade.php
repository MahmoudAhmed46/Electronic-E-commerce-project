@extends('layouts.adminLayout.master')
@section('content')
    <!-- page title area end -->

    <!--start main content inner -->
    <div class="col-12">
        <div>
            @if(Session::has('success_message'))
                <div class="alert alert-success" id="fadeOutsuccess">
                    <strong>Success!</strong> {!! session('success_message') !!}
                </div>
            @endif
            @if(Session::has('danger_message'))
                <div class="alert alert-danger" id="fadeOutwarn">
                    <strong>Warning!</strong> {!! session('danger_message') !!}
                </div>
            @endif
            <h4 class="view-product-title pl--10 pt--20"># Displaying all availabl Products</h4>
            <form action="#">
                <lable class="float-left mrg">Search</lable>
                <input type="text" class="float-right" name="search">
            </form >
        </div>
        <div class="table-responsive mt-5">
            <form action="{{url('/admin/view-products')}}" method="post">
                @csrf
            <table class="table table-striped">
                <thead class="tbl-head-txt">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>CategoryID</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Pieces</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <th>{{$product->id}}</th>
                    <th>{{$product->name}}</th>
                    <th>{{$product->cat_id}}</th>
                    <th>{{$product->code}}</th>
                    <th><img src="{{asset('/uploads/products/' .$product->image)}}" style="width: 150px; height: 100px;"></th>
                    <th>{{$product->price}}</th>
                    <th>{{$product->quantity}}</th>

                    <th>
                        <a href="{{url('/admin/add-images/'.$product->id)}}" title="Add Images" type="button" class="btn btn-info " ><span class="fa fa-image"></span></a>
                        <a href="{{url('/admin/edit-products/'.$product->id)}}" title="Edit Products" type="button" class="btn btn-warning" ><span class="fa fa-pencil"></span></a>
                        <a href="{{url('/admin/delete-product/'.$product->id)}}" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>


                    </th>

                </tr>
              @endforeach
                </tbody>
            </table>
            </form>
        </div>
    </div>
    <!--end main content inner -->

    </div>
    <!-- main content area end -->
    </div>
    <!-- page container area end -->
@endsection