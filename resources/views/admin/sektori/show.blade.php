@extends('admin.layouts.app')
@section('k3','active')
@section('l2','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sektori
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Sektori</a></li>
                <li class="active">Show</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Svi podaci</h3><br>
                    @include('admin.layouts.errors.error')
                @can('sectors.create', Auth::user())
                        <a href="{{ route('sektori.create') }}"><button class="btn btn-success">Dodaj novi sektor</button></a>
                    @endcan
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Naziv</th>
                            <th>Id Utakmice</th>
                            <th>Cena(RSD)</th>
                            <th>Gledaoca</th>
                            <th>Trenutno gledalaca</th>
                            <th>Procenat</th>
                            <th>Status</th>
                            @can('sectors.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('sectors.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sectors as $sector)
                            <tr>
                                <td>{{ $sector->id }}</td>
                                <td>{{ $sector->name }}</td>
                                <td>
                                    @foreach ($matches as $match)
                                        @if($match->id == $sector->match_id)
                                            {{ $match->nameHome }} : {{ $match->nameAway }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $sector->price }}</td>
                                <td>{{ $sector->viewer }}</td>
                                <td>{{ $sector->totalViewer }}</td>
                                <td>
                                    <li><!-- Task item -->
                                        <small class="pull-right">{{ $sector->procent }}%</small>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-@if($sector->procent <= 25)green @elseif($sector->procent > 25 && $sector->procent <= 50)aqua @elseif($sector->procent > 50 && $sector->procent <= 75)yellow @elseif($sector->procent > 75)red @endif" style="width: {{ $sector->procent }}%" role="progressbar"
                                                 aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </li>
                                </td>
                                <td>@if($sector->status == 1) ON @else OFF @endif</td>
                                @can('sectors.update', Auth::user())
                                    <td>
                                        <a href="{{ route('sektori.edit',$sector->id) }}"><button class="btn btn-warning btn-block">Edit</button></a>
                                    </td>
                                @endcan
                                @can('sectors.delete', Auth::user())
                                    <td>
                                        <form id="delete-form-{{ $sector->id }}" method="post" action="{{ route('sektori.destroy',$sector->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $sector->id }}').submit();
                                                }else{
                                                event.preventDefault();
                                                }"><button class="btn btn-danger btn-block">Delete</button></a>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Index</th>
                            <th>Naziv</th>
                            <th>Id Utakmice</th>
                            <th>Cena(RSD)</th>
                            <th>Gledaoca</th>
                            <th>Trenutno gledalaca</th>
                            <th>Procenat</th>
                            <th>Status</th>
                            @can('sectors.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('sectors.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection