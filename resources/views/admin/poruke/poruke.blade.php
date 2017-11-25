@extends('admin.layouts.app')
@section('k7','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Poruka
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Poruke</a></li>
                <li class="active">Show</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Poruka</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Naslov</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Upisi naslov">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kome se salje</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Upisi e-mail">
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <!-- /.box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Tekst poruke
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
                                    <textarea class="textarea" placeholder="Upisite tekst..."
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Posalji poruku</button>
                                <button type="reset" class="btn btn-warning">Izbrisi sve</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->


    @endsection