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
                        <li><span>View Banners</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
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
            <h4 class="view-product-title pl--10 pt--20"># Displaying all availabl Banners</h4>
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
                    <th>header</th>
                    <th>content</th>
                    <th>Image</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <th>mobile</th>
                    <th>This is Mobile Phone</th>
                    <th>1</th>
                    <th><img src="assets\images\products\mob.jpg" style="width: 150px; height: 100px;"></th>
                    <th>

                        <a href="#" title="Add Attributes" type="button" class="btn btn-warning " ><span class="fa fa-pencil"></span></a>
                        <a href="#" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>

                    </th>

                </tr>
                <tr>
                    <th>1</th>
                    <th>mobile</th>
                    <th>This is Mobile Phone</th>
                    <th>1</th>
                    <th><img src="assets\images\products\mob.jpg" style="width: 150px; height: 100px;"></th>
                    <th>

                        <a href="#" title="Add Attributes" type="button" class="btn btn-warning " ><span class="fa fa-pencil"></span></a>
                        <a href="#" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>

                    </th>

                </tr>
                <tr>
                    <th>1</th>
                    <th>mobile</th>
                    <th>This is Mobile Phone</th>
                    <th>1</th>
                    <th><img src="assets\images\products\mob.jpg" style="width: 150px; height: 100px;"></th>
                    <th>

                        <a href="#" title="Add Attributes" type="button" class="btn btn-warning " ><span class="fa fa-pencil"></span></a>
                        <a href="#" title="Delete Products" type="button" class="btn btn-danger " ><span class="fa fa-trash-o"></span> </a>

                    </th>

                </tr>


                </tbody>
            </table>

        </div>
    </div>
    <!--end main content inner -->
@endsection