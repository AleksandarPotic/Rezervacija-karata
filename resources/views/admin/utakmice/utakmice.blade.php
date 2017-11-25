@extends('admin.layouts.app')
@section('k2','active')
@section('l2','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Utakmice
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Utakmice</a></li>
                <li class="active">New</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nova Utakmica</h3><br>
                            <a href="{{ route('utakmice.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                        @include('admin.layouts.errors.error')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('utakmice.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Datum</label>
                                    <input type="date" class="form-control" name="date" value="2017-08-19">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vreme</label>
                                    <input type="time" class="form-control" name="time" value="13:45:00">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Domacin</label>
                                    <input type="text" class="form-control" name="nameHome" placeholder="Unesi domacina">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Grb domacina</label>
                                    <input type="file" name="imageHome" id="imageHome">

                                </div>
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gost</label>
                                    <input type="text" class="form-control" name="nameAway" placeholder="Unesi gosta">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Grb gosta</label>
                                    <input type="file" name="imageAway">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Broj karata za jednu rezervaciju</label>
                                    <input type="number" class="form-control" name="ticketsForOne" value="0">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="status" value="1">
                                        Status
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Dodaj utakmicu</button>
                                <button type="reset" class="btn btn-danger">Resetuj podatke</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @endsection