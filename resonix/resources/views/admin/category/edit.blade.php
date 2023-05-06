@extends('layouts.master')
@section('title', 'Blog Dashboard')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class=""> Edit Category</h4>
        </div>
        <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
             <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
            <form action="{{url('admin/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" value="{{$category->name}}" name='name' class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name='slug' value="{{$category->slug}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea id="my_summernote" name='description' rows='5' class="form-control">{{$category->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type='file' name='image' value="{{$category->image}}"  class="form-control" required>
                </div>

                <h6>SEO Tag's</h6>
                
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name='meta_title' value="{{$category->meta_title}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <input type="text" name='meta_description' value="{{$category->meta_description}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Meta Keywords</label>
                    <input type="text" value="{{$category->meta_keyword}}"  name='meta_keyword' class="form-control">
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" name='navbar_status'>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name='status'>
                    </div>
                   
                        <button type="submit" class="btn btn-lg btn-primary">Update Category</button>
                        
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection