@extends('admin.layouts.app')
@section('k5','active')
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Administratori
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Korisnici</a></li>
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
                        <h3 class="box-title">AdminKorisnici</h3>
                        @include('admin.layouts.errors.error')
                        <a href="{{ route('korisnici.index') }}"><button class="btn btn-warning">Nazad</button></a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('korisnici.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Name">Ime</label>
                                <input type="text" class="form-control" name="name" placeholder="Unesi ime" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="LastName">Prezime</label>
                                <input type="text" class="form-control" name="lastName" placeholder="Unesi prezime" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Unesi e-mail" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Unesi sifru" value="{{ old('password') }}">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Unesi ponovo sifru">
                            </div>
                            <div class="form-group">
                                <label for="Status">Status</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="status" value="1" @if( old('status') == 1 ) checked @endif>Status</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ConfirmPassword">Uloga</label>
                                <div class="row">
                                    @foreach($roles as $role)
                                        <div class="col-lg-3">
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="role[]" value="{{ $role->id }}">{{ $role->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Dodaj korisnika</button>
                            <button type="reset" class="btn btn-danger">Resetuj podatke</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>

    @endsection