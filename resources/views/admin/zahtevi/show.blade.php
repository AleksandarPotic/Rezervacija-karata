@extends('admin.layouts.app')
@section('k10','active')
@section('l1','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Zahtevi
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Zahtevi</a></li>
                <li class="active">Show</li>
            </ol>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Svi zahtevi</h3><br>
                    @include('admin.layouts.errors.error')
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Index</th>
                            <th>Ime korisnika</th>
                            <th>Utakmica</th>
                            <th>Naziv sektora</th>
                            <th>Broj karata</th>
                            <th>Accept</th>
                            <th>Discard</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($requirements as $requirement)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    @foreach($users as $user)
                                        @if($user->id == $requirement->user_id)
                                            {{ $user->name }} {{ $user->lastName }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($sectors as $sector)
                                        @if($sector->id == $requirement->sector_id)
                                            @foreach($matches as $match)
                                                @if($match->id == $sector->match_id)
                                                    {{ $match->nameHome }} : {{ $match->nameAway }}
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($sectors as $sector)
                                        @if($sector->id == $requirement->sector_id)
                                            {{ $sector->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $requirement->tickets }}</td>
                                <td>
                                    <form id="update-form-{{ $requirement->id }}" method="post" action="{{ route('zahtevi.accept',$requirement->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                    </form>
                                    <a href="" onclick="if(confirm('Da li ste sigurni da zelite da prihvatite zahtev?')){
                                            event.preventDefault();
                                            document.getElementById('update-form-{{ $requirement->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"><button class="btn btn-success btn-block">Accept</button></a>
                                </td>
                                <td>
                                    <form id="delete-form-{{ $requirement->id }}" method="post" action="{{ route('zahtevi.discard',$requirement->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $requirement->id }}').submit();
                                            }else{
                                            event.preventDefault();
                                            }"><button class="btn btn-danger btn-block">Discard</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Index</th>
                            <th>Ime korisnika</th>
                            <th>Utakmica</th>
                            <th>Naziv sektora</th>
                            <th>Broj karata</th>
                            <th>Accept</th>
                            <th>Discard</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection