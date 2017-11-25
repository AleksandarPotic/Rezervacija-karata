@extends('admin.layouts.app')
@section('k8','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Uloge
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Uloge</a></li>
                <li class="active">New</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nova uloga</h3><br>
                            <a href="{{ route('role.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                        @include('admin.layouts.errors.error')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('role.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Ime uloge</label>
                                    <input type="text" class="form-control" name="name" placeholder="Upisi ime">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="col-lg-2">
                                    <label for="name">Korisnici</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'user')
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-2">
                                    <label for="name">Vesti</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'tiding')
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @endif
                                        @endforeach
                                </div>
                                <div class="col-lg-2">
                                    <label for="name">Utakmice</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'match')
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @endif
                                        @endforeach
                                </div>
                                <div class="col-lg-2">
                                    <label for="name">Sektori</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'sector')
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @endif
                                        @endforeach
                                </div>
                                <div class="col-lg-2">
                                    <label for="name">Rezervacije</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'reservation')
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @endif
                                        @endforeach
                                </div>
                                <div class="col-lg-2">
                                    <label for="name">Drugo</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'other')
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @endif
                                        @endforeach
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Dodaj ulogu</button>
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