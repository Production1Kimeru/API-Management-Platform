@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Accu Weather API</h1>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success btn-sm">Add</button>
                        <button type="button" class="btn btn-warning btn-sm ml-2">Edit</button>
                    </div>
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
                        <div class="card-body table-responsive p-0" style="height: 65vh;">
                            <table class="table table-head-fixed text-nowrap">
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
                                    <td><span class="badge bg-success">Online</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Gent</td>
                                    <td>30-4-2020</td>
                                    <td>7</td>
                                    <td>ma,vrij</td>
                                    <td><span class="badge bg-success">Online</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Brugge</td>
                                    <td>02-01-2020</td>
                                    <td>2</td>
                                    <td>ma,woe</td>
                                    <td><span class="badge bg-danger">Offline</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Brussel</td>
                                    <td>23-11-2019</td>
                                    <td>9</td>
                                    <td>di,woe</td>
                                    <td><span class="badge bg-secondary">Not Synced</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Leuven</td>
                                    <td>16-01-2018</td>
                                    <td>5</td>
                                    <td>vrij,zat,zon</td>
                                    <td><span class="badge bg-warning">Something wrong</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Hasselt</td>
                                    <td>29-06-2018</td>
                                    <td>2</td>
                                    <td>vrij,zon</td>
                                    <td><span class="badge bg-success">Online</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Bergen-op-zoom</td>
                                    <td>12-12-2017</td>
                                    <td>10</td>
                                    <td>woe,zat,zon</td>
                                    <td><span class="badge bg-success">Online</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Luik</td>
                                    <td>23-02-2017</td>
                                    <td>4</td>
                                    <td>di,do,zon</td>
                                    <td><span class="badge bg-warning">Something wrong</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Henegouwen</td>
                                    <td>23-10-2017</td>
                                    <td>8</td>
                                    <td>All day</td>
                                    <td><span class="badge bg-danger">Offline</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-pause"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Ieper</td>
                                    <td>31-01-2016</td>
                                    <td>1</td>
                                    <td>vrij,zat,zon</td>
                                    <td><span class="badge bg-info">Paused</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-play"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>St.-Vith</td>
                                    <td>29-01-2016</td>
                                    <td>3</td>
                                    <td>vrij,zat,zon</td>
                                    <td><span class="badge bg-info">Paused</span></td>
                                    <td>
                                        <a href="#"><i class="fas fa-play"></i></a>
                                        <a href="#"><i class="fas fa-book ml-2"></i></a>
                                        <a href="#"><i class="fas fa-sync ml-2"></i></a>
                                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
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
