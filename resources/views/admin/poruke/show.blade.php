@extends('admin.layouts.app')
@section('k7','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Poruke
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Poruke</a></li>
                <li class="active">Show</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Svi podaci</h3><br>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Ime</th>
                            <th>Naslov</th>
                            <th>Email</th>
                            <th>Poruka</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->title }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->body }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Index</th>
                            <th>Ime</th>
                            <th>Naslov</th>
                            <th>Email</th>
                            <th>Poruka</th>
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