@extends('layouts.guest')
@section('style')
    <style>
        *{
            transition: all 0.6s;
        }
        #main{
            display: table;
            width: 100%;
            height: 45vh;
            text-align: center;
        }
        .fof{
            display: table-cell;
            vertical-align: middle;
        }
        .fof h1{
            font-size: 50px;
            display: inline-block;
            padding-right: 12px;
            animation: type .5s alternate infinite;
        }
        @keyframes type{
            from{box-shadow: inset -3px 0px 0px #888;}
            to{box-shadow: inset -3px 0px 0px transparent;}
        }
    </style>
@endsection
@section('content')
    <div id="main">
        <div class="fof">
            <h1>404</h1>
            <h2>Page Not Found</h2>
        </div>
    </div>
@endsection


