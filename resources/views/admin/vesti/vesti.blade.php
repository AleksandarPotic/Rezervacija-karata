@extends('admin.layouts.app')
@section('k6','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Vest
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Vesti</a></li>
                <li class="active">New</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nova vest</h3><br>
                            <a href="{{ route('vesti.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                        @include('admin.layouts.errors.error')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('vesti.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Naslov</label>
                                    <input type="text" class="form-control" name="title" placeholder="Upisi naslov">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Podnaslov</label>
                                    <input type="text" class="form-control" name="subtitle" placeholder="Upisi podnaslov">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Upisi slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Datum</label>
                                    <input type="date" class="form-control" name="date" value="2017-08-19">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Naslovna slika</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="1" name="status">
                                        Status
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <!-- /.box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Tekst vesti
                                    </h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <textarea class="textarea" name="body" placeholder="Upisite tekst..."
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Dodaj vest</button>
                                <button type="reset" class="btn btn-danger">Izbrisi sve</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

    @endsection