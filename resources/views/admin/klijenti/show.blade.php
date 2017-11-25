@extends('admin.layouts.app')
@section('k20','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Korisnici
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
                    <h3 class="box-title">Svi korisnici</h3><br>
                    @include('admin.layouts.errors.error')
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Profil</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Izmeni status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>
                                    <div class="user-panel">
                                        <div class="pull-center image">
                                            <img src="{{ asset('uploads/'.$client->image) }}" alt="user image" class="img-circle">
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->lastName }}</td>
                                <td>{{ $client->email }}</td>
                                <td>@if($client->status == 1) ON @else OFF @endif</td>
                                @can('users.update', Auth::user())
                                    <td>
                                        <a href="{{ route('klijenti.edit',$client->id) }}"><button class="btn btn-warning btn-block">Change</button></a>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Index</th>
                            <th>Profil</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Izmeni status</th>
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