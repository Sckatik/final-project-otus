@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')

@include('admin.films.blocks.header.create')
@include('admin.films.blocks.form.create')

@stop

@section('js')
    <script> 
    console.log('Hi!'); 
    $(".select2-purple").select2();
    $(".yearsSelect").select2();
    </script>
@stop
