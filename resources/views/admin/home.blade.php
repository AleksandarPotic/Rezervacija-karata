@extends('admin.layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Home<br>
                <small>Sva podesavanja se nalaze ovde.</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">Home</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-body">
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>{{ count($requirements) }}</h3>

                                <p>Zahtevi</p>
                            </div>
                            <div class="icon">
                                <i class="fa  fa-sticky-note-o"></i>
                            </div>
                                <a href="{{ route('zahtevi.index') }}" class="small-box-footer">Još informacija <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{ count($reservations) }}</h3>

                                <p>Rezervacije</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-ticket"></i>
                            </div>
                                <a href="{{ route('rezervacija.index') }}" class="small-box-footer">Još informacija <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">

                                <h3>{{ count($users) }}</h3>

                                <p>Registrovani korisnici</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <a href="{{ route('klijenti.index')}}" class="small-box-footer">Još informacija <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>{{ count($tidings) }}</h3>

                                <p>Vesti</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                                <a href="{{ route('vesti.index') }}" class="small-box-footer">Još informacija <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="fa fa-comments-o"></i>

                                <h3 class="box-title">Poruke</h3>

                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->

                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                @foreach($messages as $message)
                                    <div class="item">
                                        @foreach($users as $user)
                                            @if($user->email == $message->email)
                                                <img src="{{ asset('uploads/'.$user->image) }}" class="img-circle" alt="User Image">
                                            @endif
                                        @endforeach

                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ $message->created_at->diffForHumans() }}</small>
                                                {{ $message->name }} <small class="text-muted">{{ $message->email }}</small>
                                            </a>
                                            {{ $message->body }}
                                        </p>
                                    </div>
                                @endforeach
                                <!-- /.item -->
                            </div>
                            <!-- /.chat -->
                            <div class="box-footer">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Type message...">

                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box (chat box) -->
                    <div class="col-lg-5">
                        <div class="box box-solid bg-blue-gradient">
                            <div class="box-header">
                                <i class="fa fa-calendar"></i>

                                <h3 class="box-title">Kalendar</h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <!--The calendar -->
                                <div id="calendar" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- quick email widget -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="fa fa-envelope"></i>

                                <h3 class="box-title">Pošalji Email</h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-primary btn-sm" data-widget="remove" data-toggle="tooltip"
                                            title="Remove">
                                        <i class="fa fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <div class="box-body">
                                <form action="{{ route('admin.send') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="to" placeholder="Email to:">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                    </div>
                                    <div>
                          <textarea class="textarea" name="message" placeholder="Message"
                                    style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                    <div class="box-footer clearfix">
                                        <button type="submit" class="btn btn-primary" value="sendEmail" id="sendEmail">Pošalji
                                            <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @endsection