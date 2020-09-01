@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')

@include('admin.films.blocks.form.edit')

@stop

@section('js')
<script src="https://cdn.tiny.cloud/1/jk40fckf4lchpe87bd5i0gom4ivq5nz0c9t6bmcwum3or6f3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <script> 
    console.log('Hi!'); 
    $(".select2-purple").select2();
    $(".yearsSelect").select2();
    
    </script>
@stop

