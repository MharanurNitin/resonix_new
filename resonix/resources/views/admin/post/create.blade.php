@extends('layouts.master')
@section('title', 'Add Posts')

@section('content')

    <div class="container-fluid px-4 mt-4">
        <div class="card">
            <div class="card-header">
                <h4>View Posts
                    <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end"> Add Posts</a>
                </h4>
            </div>
            <div class="card-body">
                your content
            </div>
        </div>
    </div>
@endsection