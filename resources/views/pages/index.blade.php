@extends('layout.master')
@section('content')
    @include('pages.content1',compact('banner'))
    @include('pages.content2')
    @include('pages.content3',compact('articles'))
    @include('pages.content4')
@stop

