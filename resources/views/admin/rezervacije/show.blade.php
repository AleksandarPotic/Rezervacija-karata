@extends('admin.layouts.app')
@section('k1','active')
@section('l1','active')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Rezervacije
                <small>Potrebno je popuniti sve elemente</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i> Rezervacije</a></li>
                <li class="active">Show</li>
            </ol>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Svi podaci</h3><br>
                    @include('admin.layouts.errors.error')
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Ime korisnika</th>
                            <th>Utakmica</th>
                            <th>Naziv sektora</th>
                            <th>Broj karata</th>
                            <th>Ukupna cena(RSD)</th>
                            <th>Kod</th>
                            <th>Status</th>
                            @can('reservations.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('reservations.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    @foreach($users as $user)
                                        @if($user->id == $reservation->user_id)
                                            {{ $user->name }} {{ $user->lastName }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($sectors as $sector)
                                        @if($sector->id == $reservation->sector_id)
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
                                        @if($sector->id == $reservation->sector_id)
                                            {{ $sector->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $reservation->tickets }}</td>
                                <td>{{ $reservation->totalPrice }}</td>
                                <td>{{ $reservation->securityCode }}</td>
                                <td>{{ $reservation->status }}</td>
                                @can('reservations.update', Auth::user())
                                    <td>
                                        <a href="{{ route('rezervacija.edit',$reservation->id) }}"><button class="btn btn-warning btn-block">Edit</button></a>
                                    </td>
                                @endcan
                                @can('reservations.delete', Auth::user())
                                    <td>
                                        <form id="delete-form-{{ $reservation->id }}" method="post" action="{{ route('rezervacija.destroy',$reservation->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete podatke?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $reservation->id }}').submit();
                                                }else{
                                                event.preventDefault();
                                                }"><button class="btn btn-danger btn-block">Delete</button></a>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Ime korisnika</th>
                            <th>Utakmica</th>
                            <th>Naziv sektora</th>
                            <th>Broj karata</th>
                            <th>Ukupna cena(RSD)</th>
                            <th>Kod</th>
                            <th>Status</th>
                            @can('reservations.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('reservations.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
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