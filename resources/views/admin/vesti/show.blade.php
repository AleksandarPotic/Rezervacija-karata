@extends('admin.layouts.app')
@section('k6','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Vesti
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Vesti</a></li>
                <li class="active">Show</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Svi podaci</h3><br>
                    @include('admin.layouts.errors.error')
                    @can('tidings.create', Auth::user())
                        <a href="{{ route('vesti.create') }}"><button class="btn btn-success">Dodaj novu vest</button></a>
                    @endcan
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Naslov</th>
                            <th>Podnaslov</th>
                            <th>Slug</th>
                            <th>Status</th>
                            @can('tidings.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('tidings.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tidings as $tiding)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $tiding->title }}</td>
                            <td>{{ $tiding->subtitle }}</td>
                            <td>{{ $tiding->slug }}</td>
                            <td>@if($tiding->status == 1) ON @else OFF @endif</td>
                            @can('tidings.update', Auth::user())
                                <td>
                                    <a href="{{ route('vesti.edit',$tiding->id) }}"><button class="btn btn-warning btn-block">Edit</button></a>
                                </td>
                            @endcan
                            @can('tidings.delete', Auth::user())
                                <td>
                                    <form id="delete-form-{{ $tiding->id }}" method="post" action="{{ route('vesti.destroy',$tiding->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $tiding->id }}').submit();
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
                            <th>Naslov</th>
                            <th>Podnaslov</th>
                            <th>Slug</th>
                            <th>Status</th>
                            @can('tidings.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('tidings.delete', Auth::user())
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