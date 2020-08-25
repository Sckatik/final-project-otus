@extends('layouts.app')

@section('header')
    @include('blocks.header.header')
@endsection

@section('content')
    @include('film.blocks.header.index')
    @include('film.blocks.tabs.index')
@endsection
