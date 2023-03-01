@extends('layout.master')
@section('content')
    @include('pages.content1')
    @include('pages.content2')
    @include('pages.content3',compact('articles'))
@stop

