@extends('admin.layouts.app')
@section('k9','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dozvole
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Dozvole</a></li>
                <li class="active">New</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nova dozvola</h3><br>
                            <a href="{{ route('permission.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                        @include('admin.layouts.errors.error')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('permission.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Ime dozvole</label>
                                    <input type="text" class="form-control" name="name" placeholder="Upisi ime">
                                </div>
                                <div class="form-group">
                                    <label for="for">Dozvola za</label>
                                    <select name="for" id="for" class="form-control">
                                        <option selected disabled>Dozvola za...</option>
                                        <option value="user">Korisnici</option>
                                        <option value="tiding">Vesti</option>
                                        <option value="match">Utakmice</option>
                                        <option value="sector">Sektori</option>
                                        <option value="reservation">Rezervacije</option>
                                        <option value="other">Drugo</option>
                                    </select>

                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Dodaj dozvolu</button>
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