@extends('layouts.adminLayout.master')
@section('content')
    <!-- page title area end -->

    <!--start main content inner -->
    <div class="col-12">
        <div>
            <h4 class="view-product-title pl--10 pt--20"># Displaying all availabl Products</h4>
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
                    <th>CategoryID</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Pieces</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <th>mobile Huwai Y7</th>
                    <th>12</th>
                    <th>MH125</th>
                    <th><img src="{{asset('assets\images\products\mob.jpg')}}" style="width: 150px; height: 100px;"></th>
                    <th>4700</th>
                    <th>27</th>

                    <th>
                        <a href="{{url('/admin/add-images')}}" title="Add Images" type="button" class="btn btn-info " ><span class="fa fa-image"></span></a>
                        <a href="{{url('/admin/edit-products')}}" title="Edit Products" type="button" class="btn btn-warning" ><span class="fa fa-pencil"></span></a>
                        <a href="#" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>


                    </th>

                </tr>
                <tr>
                    <th>3</th>
                    <th>mobile Huwai Y7</th>
                    <th>12</th>
                    <th>MH125</th>
                    <th><img src="{{asset('assets\images\products\mob.jpg')}}" style="width: 150px; height: 100px;"></th>
                    <th>4700</th>
                    <th>27</th>

                    <th>
                        <a href="{{url('/admin/add-images')}}" title="Add Images" type="button" class="btn btn-info " ><span class="fa fa-image"></span></a>
                        <a href="{{url('/admin/edit-products')}}" title="Edit Products" type="button" class="btn btn-warning" ><span class="fa fa-pencil"></span></a>
                        <a href="#" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>


                    </th>

                </tr>
                <tr>
                    <th>2</th>
                    <th>mobile Huwai Y7</th>
                    <th>12</th>
                    <th>MH125</th>
                    <th><img src="{{asset('assets\images\products\mob.jpg')}}" style="width: 150px; height: 100px;"></th>
                    <th>4700</th>
                    <th>27</th>

                    <th>

                        <a href="{{url('/admin/add-images')}}" title="Add Images" type="button" class="btn btn-info " ><span class="fa fa-image"></span></a>
                        <a href="{{url('/admin/edit-products')}}" title="Edit Products" type="button" class="btn btn-warning" ><span class="fa fa-pencil"></span></a>
                        <a href="#" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>

                    </th>

                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <!--end main content inner -->

    </div>
    <!-- main content area end -->
    </div>
    <!-- page container area end -->
@endsection