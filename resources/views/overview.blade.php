@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">API Overview</h1>
                    <button type="button" class="btn btn-success btn-sm">Add</button>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Remove</button>

                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{--<li class="breadcrumb-item"><a href="#">Home</a></li><--}}
                        <li class="breadcrumb-item active">Overview</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <a href="#">
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
                                    API thet generates random jokes.
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
