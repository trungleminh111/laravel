@extends('layout')

@section('titel','Page Child')

@section('sidebar')

@parent
this is layout child sidebar
@endsection


@section('content')
<h1>Content of Child</h1>
@endsection