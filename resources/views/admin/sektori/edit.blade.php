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
                            <h3 class="box-title">Sektori</h3><br>
                            <a href="{{ route('sektori.index') }}"><button class="btn btn-warning">Nazad</button></a>
                        </div>
                    @include('admin.layouts.errors.error')
                    <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('sektori.update',$sector->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Naziv sektora</label>
                                    <input type="text" class="form-control" name="name" placeholder="Unesi naziv" value="{{ $sector->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cena(RSD)</label>
                                    <input type="number" class="form-control" name="price" value="{{ $sector->price }}">
                                </div>
                                <div class="form-group">
                                    <label>Izaberi utakmicu</label>
                                    <select class="form-control select2" name="match_id" style="width: 100%;">
                                        @foreach($matches as $match)
                                        <option @if($sector->match_id == $match->id) selected @endif value="{{ $match->id }}">{{ $match->nameHome }} : {{ $match->nameAway }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kopacitet</label>
                                    <input type="number" class="form-control" name="viewer"  value="{{ $sector->viewer }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trenutno gledalaca</label>
                                    <input type="number" class="form-control" name="totalViewer"  value="{{ $sector->totalViewer }}" disabled>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="1" name="status" @if($sector->status == 1) checked @endif>
                                        Status
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Izmeni sektor</button>
                                <button type="reset" class="btn btn-danger">Resetuj podatke</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection