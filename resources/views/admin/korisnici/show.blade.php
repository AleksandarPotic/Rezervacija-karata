@extends('admin.layouts.app')
@section('k5','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Administratori
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Korisnici</a></li>
                <li class="active">Show</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Svi Admin korisnici</h3><br>
                    @include('admin.layouts.errors.error')
                    @can('users.create', Auth::user())
                        <a href="{{ route('korisnici.create') }}"><button class="btn btn-success">Dodaj novog admina</button></a>
                    @endcan
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Email</th>
                            <th>Uloga</th>
                            <th>Status</th>
                            @can('users.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('users.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastName }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        {{ $role->name }},
                                        @endforeach
                                </td>
                                <td>@if($user->status == 1) ON @else OFF @endif</td>
                                @can('users.update', Auth::user())
                                    <td>
                                        <a href="{{ route('korisnici.edit',$user->id) }}"><button class="btn btn-warning btn-block">Edit</button></a>
                                    </td>
                                @endcan
                                @can('users.delete', Auth::user())
                                    <td>
                                        <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('korisnici.destroy',$user->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $user->id }}').submit();
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
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Email</th>
                            <th>Uloga</th>
                            <th>Status</th>
                            @can('users.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('users.delete', Auth::user())
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