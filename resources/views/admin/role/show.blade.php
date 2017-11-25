@extends('admin.layouts.app')
@section('k8','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Uloge
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Uloge</a></li>
                <li class="active">Show</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Uloga</h3><br>
                    @include('admin.layouts.errors.error')
                    <a href="{{ route('role.create') }}"><button class="btn btn-success">Dodaj novu ulogu</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Ime</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a href="{{ route('role.edit',$role->id) }}"><button class="btn btn-warning btn-block">Edit</button></a>
                            </td>
                            <td>
                                <form id="delete-form-{{ $role->id }}" method="post" action="{{ route('role.destroy',$role->id) }}" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $role->id }}').submit();
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