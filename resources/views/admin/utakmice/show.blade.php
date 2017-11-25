@extends('admin.layouts.app')
@section('k2','active')
@section('l2','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Utakmice
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Utakmice</a></li>
                <li class="active">Show</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Svi podaci</h3><br>
                    @include('admin.layouts.errors.error')
                    @can('matches.create', Auth::user())
                        <a href="{{ route('utakmice.create') }}">
                            <button class="btn btn-success">Dodaj novu utakmicu</button>
                        </a>
                    @endcan
                </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Index</th>
                        <th>Datum</th>
                        <th>Sat</th>
                        <th>Domacin</th>
                        <th>Gost</th>
                        @can('matches.update', Auth::user())
                            <th>Edit</th>
                        @endcan
                        @can('matches.delete', Auth::user())
                            <th>Delete</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($matches as $match)
                        <tr>
                            <td>{{ $match->id }}</td>
                            <td>{{ $match->date }}</td>
                            <td>{{ $match->time }}</td>
                            <td>{{ $match->nameHome }}</td>
                            <td>{{ $match->nameAway }}</td>
                            @can('matches.update', Auth::user())
                                <td>
                                    <a href="{{ route('utakmice.edit',$match->id) }}"><button class="btn btn-warning btn-block">Edit</button></a>
                                </td>
                            @endcan
                            @can('matches.delete', Auth::user())
                                <td>
                                    <form id="delete-form-{{ $match->id }}" method="post" action="{{ route('utakmice.destroy',$match->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $match->id }}').submit();
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
                        <th>Datum</th>
                        <th>Sat</th>
                        <th>Domacin</th>
                        <th>Gost</th>
                        @can('matches.update', Auth::user())
                            <th>Edit</th>
                        @endcan
                        @can('matches.delete', Auth::user())
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