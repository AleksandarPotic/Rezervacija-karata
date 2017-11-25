@extends('admin.layouts.app')
@section('k3','active')
@section('l2','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sektori
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Sektori</a></li>
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
                            <h3 class="box-title">Novi Sektor</h3><br>
                            <a href="{{ route('sektori.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                        @include('admin.layouts.errors.error')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('sektori.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Naziv sektora</label>
                                    <input type="text" class="form-control" name="name" placeholder="Unesi naziv">
                                </div>
                                <div class="form-group">
                                    <label>Izaberi utakmicu</label>
                                    <select class="form-control select2" name="match_id" style="width: 100%;">
                                        @foreach($matches as $match)
                                            <option value="{{ $match->id }}">{{ $match->nameHome }} : {{ $match->nameAway }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cena(RSD)</label>
                                    <input type="number" class="form-control" name="price" value="1000">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kopacitet</label>
                                    <input type="number" class="form-control" name="viewer" value="2000">
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
                                <button type="submit" class="btn btn-primary">Dodaj sektor</button>
                                <button type="reset" class="btn btn-danger">Resetuj podatke</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @endsection