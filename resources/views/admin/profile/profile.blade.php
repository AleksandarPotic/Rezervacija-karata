@extends('admin.layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Profil
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Profil</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-lg-6 col-lg-offset-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/'.Auth::user()->image) }}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{ Auth::user()->name }} {{ Auth::user()->lastName }}</h3>
                        <p class="text-muted text-center">{{ Auth::user()->email }}</p>

                        <form role="form" action="{{ route('admin.profileImage') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-lg-4 col-lg-offset-4"><input type="file" name="image"></div><br><br>
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <div class="col-lg-12"><input type="submit" class="btn btn-primary btn-block" value="Promeni sliku"></div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection