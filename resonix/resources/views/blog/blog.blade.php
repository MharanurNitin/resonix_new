<x-layout >
    <x-slot name='title'>
        Welcome to blog
    </x-slot>
    <x-slot name='content'>
     @include('include.blog-navbar')
      
          
      
    </x-slot>
</x-layout>



{{-- @include('include.header')
@extends('layouts.app')
@section('content')
@include('include.header')
    <h1>Hello Blog</h1>
@endsection --}}
{{-- @extends('components.layout')
@section('title','bhavish')
@section('content')
    <h1>Hello</h1>
@endsection --}}