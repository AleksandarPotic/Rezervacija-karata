@extends('admin.layouts.app')
@section('k3','active')
@section('l2','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Rezervacije
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Rezervacije</a></li>
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
                            <h3 class="box-title">Rezervacije</h3><br>
                            <a href="{{ route('rezervacija.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                    @include('admin.layouts.errors.error')
                    <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('rezervacija.update',$reservation->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status rezervacije</label>
                                    <div class="form-group">
                                        <select name="status" class="form-control" id="sel1">
                                            <option value="Rezervisano" @if($reservation->status == 'Rezervisano') selected @endif>Rezervisano</option>
                                            <option value="Poslato" @if($reservation->status == 'Poslato') selected @endif>Poslato</option>
                                            <option value="Preuzeto" @if($reservation->status == 'Preuzeto') selected @endif>Preuzeto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Izmeni status</button>
                                <button type="reset" class="btn btn-danger">Resetuj podatke</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection