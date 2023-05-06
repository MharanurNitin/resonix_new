@extends('layouts.master')
@section('title', 'View Post')

@section('content')

    <div class="container-fluid px-4 mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Add Posts
                    <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end"> Add Posts</a>
                </h4>
            </div>
            <div class="card-body">
              <form action="">
                
              </form>
            </div>
        </div>
    </div>
@endsection