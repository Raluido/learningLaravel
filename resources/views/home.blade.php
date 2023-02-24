@extends('layouts.master')

@section('title', 'Laravel')

@section('contentx')
<h1>Home</h1>
<a href="{{ action([App\Http\Controllers\testController::class, 'index'])}} ">probando action</a>
<a href="{{ route('ole') }} ">probando action</a>
<br>
@endsection

@section('footer')
@parent()
<br>footer en el home
@stop