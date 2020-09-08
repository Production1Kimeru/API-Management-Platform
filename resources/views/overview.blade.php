@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">API Overview</h1>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-add">Add</button>
                        <button type="button" class="btn btn-warning btn-sm ml-2">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm ml-2">Remove</button>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{--<li class="breadcrumb-item"><a href="#">Home</a></li><--}}
                        <li class="breadcrumb-item active">Overview/...</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <!-- Modal Add -->
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New API</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>Name API</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name API">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option selected="selected">Universal</option>
                                <option>News</option>
                                <option>Random</option>
                                <option>Company specified</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <label>API Key</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="API Key">
                        </div>

                        <!-- textarea -->
                        <label>Description API</label>
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Add API</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.Modal Add -->


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <a href="/overview/accuweather">
                        <div class="card card-primary card-outline" >
                            <h5 class="card-header">Accu Weather</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    API to give weather expectations.
                                </p>
                                <p href="#" class="card-text text-right" style="color: grey;">Added 19/07/2020</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="card card-primary card-outline" >
                            <h5 class="card-header">Rails</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    API to give time schedule of Belgium train net.
                                </p>
                                <p href="#" class="card-text text-right" style="color: grey;">Added 19/07/2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-lg-3">
                    <a href="#">
                        <div class="card card-danger card-outline" >
                            <h5 class="card-header">De Tijd</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    Financial and Political News Belgium
                                </p>
                                <p href="#" class="card-text text-right" style="color: grey;">Added 19/07/2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-lg-3">
                    <a href="#">
                        <div class="card card-success card-outline" >
                            <h5 class="card-header">Random Jokes</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    API that generates random jokes.
                                </p>
                                <p href="#" class="card-text text-right" style="color: grey;">Added 19/07/2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-lg-3">
                    <a href="#">
                        <div class="card card-warning card-outline" >
                            <h5 class="card-header">Appointment Dentist</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    Shows all the appointments and info.
                                </p>
                                <p href="#" class="card-text text-right" style="color: grey;">Added 19/07/2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
