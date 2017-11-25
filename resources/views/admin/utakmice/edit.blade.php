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
                <li class="active">Edit</li>
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
                            <h3 class="box-title">Izmeni Utakmicu</h3><br>
                            <a href="{{ route('utakmice.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                    @include('admin.layouts.errors.error')
                    <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('utakmice.update',$match->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Datum</label>
                                    <input type="date" class="form-control" name="date" value="{{ $match->date }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vreme</label>
                                    <input type="time" class="form-control" name="time" value="{{ $match->time }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Domacin</label>
                                    <input type="text" class="form-control" name="nameHome" value="{{ $match->nameHome }}" placeholder="Unesi domacina">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Grb domacina</label>
                                    <input type="file" name="imageHome" value="{{ $match->imageHome }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gost</label>
                                    <input type="text" class="form-control" name="nameAway" value="{{ $match->nameAway }}" placeholder="Unesi gosta">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Grb gosta</label>
                                    <input type="file" name="imageAway" value="{{ $match->imageAway }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Broj karata za jednu rezervaciju</label>
                                    <input type="number" class="form-control" name="ticketsForOne" value="{{ $match->ticketsForOne }}">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="1" name="status" @if($match->status == 1) checked @endif>
                                        Status
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Izmeni utakmicu</button>
                                <button type="reset" class="btn btn-danger">Resetuj podatke</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection