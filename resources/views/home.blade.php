@extends('adminlte.page')

@section('content')
    <div class="page-title row">
        <div class="title_left ml-4">
            <h3>Home</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-book"></i>
                        </div>
                        <div class="count">{{ $students->count() }}</div>
                        <h3>Books</h3>
                        <p>
                            <span class="count_bottom"><i class="green"> <a class="green"
                                        href="{!!  route('books.index') !!}">View</a> </i> books</span>
                        </p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="count">{{ $students->count() }}</div>
                        <h3>Students</h3>
                        <p>
                            <span class="count_bottom"><i class="green"> <a class="green"
                                        href="{!!  route('students.index') !!}">View</a> </i> students</span>
                        </p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-exchange"></i>
                        </div>
                        <div class="count">{{ $issuances->count() }}</div>
                        <h3>Issuances</h3>
                        <p>
                            <span class="count_bottom"><i class="green"> <a class="green"
                                        href="{!!  route('issuances.index') !!}">View</a> </i> issuances</span>
                        </p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-exclamation"></i>
                        </div>
                        <div class="count">{{ $overdue->count() }}</div>
                        <h3>Overdue Books</h3>
                        <p>
                            <span class="count_bottom"><i class="green"> <a class="green"
                                        href="{!!  route('issuances.overdue') !!}">View</a> </i> Overdue</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Line graph<small>Sessions</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content"><iframe class="chartjs-hidden-iframe"
                                style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                            <canvas id="lineChart" style="width: 445px; height: 222px;" width="445" height="222"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Bar graph <small>Sessions</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content"><iframe class="chartjs-hidden-iframe"
                                style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                            <canvas id="mybarChart" style="width: 445px; height: 222px;" width="445" height="222"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
