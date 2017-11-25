@extends('admin.layouts.app')
@section('k20','active')
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Korisnici
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Korisnici</a></li>
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
                            <h3 class="box-title">Korisnici</h3>
                            @include('admin.layouts.errors.error')
                            <a href="{{ route('klijenti.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('klijenti.update',$client->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="status" value="1" @if( $client->status == 1 ) checked @endif>Status</label>
                                    </div>
                                </div>
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
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