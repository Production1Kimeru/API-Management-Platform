@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Accu Weather API</h1>
                    <button type="button" class="btn btn-success btn-sm">Add</button>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Remove</button>

                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{--<li class="breadcrumb-item"><a href="#">Home</a></li><--}}
                        <li class="breadcrumb-item active"><a href="/overview">Overview</a></li>
                        <li class="breadcrumb-item active">Accu Weather</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Created Custom API'S</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Locatie</th>
                                    <th>Last Update</th>
                                    <th># Parameters</th>
                                    <th>Schedule</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Antwerpen</td>
                                    <td>11-7-2020</td>
                                    <td>5</td>
                                    <td>ma,di,woe</td>
                                    <td><span class="tag tag-success">Online</span></td>
                                    <td>
                                        <i class="far fa-calendar-alt ml-2"></i>
                                        <i class="fas fa-book ml-2"></i>
                                        <i class="fas fa-sync ml-2"></i>
                                        <i class="fas fa-trash-alt ml-2"></i>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Gent</td>
                                    <td>30-4-2020</td>
                                    <td>7</td>
                                    <td>ma,vrij</td>
                                    <td><span class="tag tag-success">Online</span></td>
                                    <td>
                                        <i class="far fa-calendar-alt ml-2"></i>
                                        <i class="fas fa-book ml-2"></i>
                                        <i class="fas fa-sync ml-2"></i>
                                        <i class="fas fa-trash-alt ml-2"></i>
                                    </td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </div>

@endsection
