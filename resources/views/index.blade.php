@extends('common.layouts')

@section('content')
    <header class="jumbotron">
        <img src="{{ asset('img\wantu.png') }}" width="800" height="506">
        <p class="lead">@ 笨熊公子</p>
        <p><a class="btn btn-lg btn-default btn-getting-started" href="{{ asset('/create') }}" role="button">我想说</a></p>
    </header>
    <main class="benefits container">
        <div class="row">
            @foreach($messages as $message)
            <div class="col-md-6" style="height: 187px;">
                <h2>{{ $message->name }}</h2>
                <p style="color: #5a5a5a;">{{ $message->message }}</p>
                <h6 style="color: #aaaaaa;float:right;">No.{{ $message->id }}&nbsp &nbsp &nbsp From：{{ $message->school }}</h6>
            </div>
                @endforeach
                <div class="pull-right">
                    {{ $messages -> render() }}
                </div>
        </div>
        <div class="pull-right">

        </div>
    </main>
    @stop