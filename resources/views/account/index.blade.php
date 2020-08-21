@extends('layouts.full-width')

@section('header')
    @include('blocks.header.header')
@endsection

@section('content')
    
<div class="page_user">
    <div id="message"></div>
    <div id="edit_link"></div>
    @include('account.blocks.header.index')
</div>
@endsection
