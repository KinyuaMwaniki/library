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
                            <span class="count_bottom"><i class="green"> <a class="green" href="{!!  route('books.index') !!}">View</a> </i> books</span>
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
                            <span class="count_bottom"><i class="green"> <a class="green" href="{!!  route('students.index') !!}">View</a> </i> students</span>
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
                            <span class="count_bottom"><i class="green"> <a class="green" href="{!!  route('issuances.index') !!}">View</a> </i> issuances</span>
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
                            <span class="count_bottom"><i class="green"> <a class="green" href="{!!  route('issuances.overdue') !!}">View</a> </i> Overdue</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

