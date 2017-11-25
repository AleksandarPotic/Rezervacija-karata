@extends('admin.layouts.app')
@section('k9','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dozvole
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Dozvole</a></li>
                <li class="active">Show</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Dozvole</h3><br>
                    @include('admin.layouts.errors.error')
                    <a href="{{ route('permission.create') }}"><button class="btn btn-success">Dodaj novu dozvolu</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Ime</th>
                            <th>Dozvola za</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->for }}</td>
                            <td>
                                <a href="{{ route('permission.edit',$permission->id) }}"><button class="btn btn-warning btn-block">Edit</button></a>
                            </td>
                            <td>
                                <form id="delete-form-{{ $permission->id }}" method="post" action="{{ route('permission.destroy',$permission->id) }}" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $permission->id }}').submit();
                                }else{
                                    event.preventDefault();
                                        }"><button class="btn btn-danger btn-block">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Index</th>
                            <th>Ime</th>
                            <th>Dozvola za</th>
                            <th>Edit</th>
                            <th>Delete</th>
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