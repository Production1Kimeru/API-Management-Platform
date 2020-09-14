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
                        <button type="button" class="btn btn-warning btn-sm ml-2" data-toggle="modal" data-target="#modal-edit">Edit</button>
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
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox11" value="MondayStart">
                                            <label for="weekdaysCheckbox11" class="custom-control-label">Monday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker11" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker11" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker11" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker12" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker12" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker12" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox21" value="TuesdayStart">
                                            <label for="weekdaysCheckbox21" class="custom-control-label">Tuesday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker21" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker21" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker21" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker22" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker22" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker22" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox31" value="WednesdayStart">
                                            <label for="weekdaysCheckbox31" class="custom-control-label">Wednesday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker31" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker31" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker31" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker32" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker32" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker32" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox41" value="ThursdayStart">
                                            <label for="weekdaysCheckbox41" class="custom-control-label">Thursday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker41" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker41" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker41" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker42" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker42" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker42" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox51" value="FridayStart">
                                            <label for="weekdaysCheckbox51" class="custom-control-label">Friday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker51" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker51" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker51" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker52" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker52" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker52" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox61" value="SaturdayStart">
                                            <label for="weekdaysCheckbox61" class="custom-control-label">Saturday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker61" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker61" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker61" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker22" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker22" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker22" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox71" value="SundayStart">
                                            <label for="weekdaysCheckbox71" class="custom-control-label">Sunday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker71" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker71" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker71" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker72" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker72" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker22" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
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
        <!-- Modal Edit -->
        <div class="modal fade" id="modal-edit">
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
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox81" value="MondayStart">
                                            <label for="weekdaysCheckbox81" class="custom-control-label">Monday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker81" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker81" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker81" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker82" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker82" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker82" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox91" value="TuesdayStart">
                                            <label for="weekdaysCheckbox91" class="custom-control-label">Tuesday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker91" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker91" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker91" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker92" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker92" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker92" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox101" value="WednesdayStart">
                                            <label for="weekdaysCheckbox101" class="custom-control-label">Wednesday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker101" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker101" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker101" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker102" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker102" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker102" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox111" value="ThursdayStart">
                                            <label for="weekdaysCheckbox111" class="custom-control-label">Thursday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker111" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker111" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker111" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker112" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker112" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker112" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox121" value="FridayStart">
                                            <label for="weekdaysCheckbox121" class="custom-control-label">Friday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker121" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker121" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker121" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker122" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker122" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker122" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox131" value="SaturdayStart">
                                            <label for="weekdaysCheckbox131" class="custom-control-label">Saturday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker131" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker131" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker131" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker132" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker132" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker132" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="weekdaysCheckbox141" value="SundayStart">
                                            <label for="weekdaysCheckbox141" class="custom-control-label">Sunday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker141" data-target-input="nearest">
                                            <input type="text" placeholder="Start Time" class="form-control datetimepicker-input" data-target="#datetimepicker141" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker141" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker142" data-target-input="nearest">
                                            <input type="text" placeholder="End Time" class="form-control datetimepicker-input" data-target="#datetimepicker142" style="height: 30px;"/>
                                            <div class="input-group-append" data-target="#datetimepicker142" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 30px;" ><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-warning">Save Changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.Modal Edit -->

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
