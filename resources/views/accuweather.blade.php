@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Accu Weather API</h1>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-add">Add</button>
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
                        <label>Location</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Location">
                        </div>

                        <div class="form-group">
                            <label>Parameters</label>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">Headline.EffectiveDate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                        <label for="customCheckbox2" class="custom-control-label">Headline.EffectiveEpochDate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                        <label for="customCheckbox3" class="custom-control-label">Headline.Text	</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                        <label for="customCheckbox4" class="custom-control-label">Headline.Category</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="option5">
                                        <label for="customCheckbox5" class="custom-control-label">Headline.EndDate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="option6">
                                        <label for="customCheckbox6" class="custom-control-label">DailyForecasts.Sun.Rise</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="option7">
                                        <label for="customCheckbox7" class="custom-control-label">DailyForecasts.Sun.EpochRise</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="option8">
                                        <label for="customCheckbox8" class="custom-control-label">DailyForecasts.Sun.Set</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="option9">
                                        <label for="customCheckbox9" class="custom-control-label">Headline.EndEpochDate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="option10">
                                        <label for="customCheckbox10" class="custom-control-label">Headline.MobileLink</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="option11">
                                        <label for="customCheckbox11" class="custom-control-label">Headline.Link</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option12">
                                        <label for="customCheckbox12" class="custom-control-label">DailyForecasts.Date</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox13" value="option13">
                                        <label for="customCheckbox13" class="custom-control-label">DailyForecasts.EpochDate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox14" value="option14">
                                        <label for="customCheckbox14" class="custom-control-label">DailyForecasts.Moon.Rise</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox15" value="option15">
                                        <label for="customCheckbox15" class="custom-control-label">DailyForecasts.Moon.EpochRise</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Schedule</label>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox1" value="Monday">
                                        <label for="weekdaysCheckbox1" class="custom-control-label">Monday</label>

                                        

                                    </div>

                                    <!-- /.input group -->
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox2" value="Thuesday">
                                        <label for="weekdaysCheckbox2" class="custom-control-label">Thuesday</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox3" value="Wednesday">
                                        <label for="weekdaysCheckbox3" class="custom-control-label">Wednesday</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox4" value="Thursday">
                                        <label for="weekdaysCheckbox4" class="custom-control-label">Thursday</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox5" value="Friday">
                                        <label for="weekdaysCheckbox5" class="custom-control-label">Friday</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox6" value="Saturday">
                                        <label for="weekdaysCheckbox6" class="custom-control-label">Saturday</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox7" value="Sunday">
                                        <label for="weekdaysCheckbox7" class="custom-control-label">Sunday</label>
                                    </div>
                                </div>


                            </div>
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
