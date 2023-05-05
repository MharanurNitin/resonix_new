@extends('layouts.master')
@section('title', 'Blog Dashboard')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class=""> Add Category</h4>
        </div>
        <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
             <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
            <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name='name' class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name='slug' class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  name='description' rows='5' class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type='file' name='image'  class="form-control">
                </div>

                <h6>SEO Tag's</h6>
                
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name='meta_title' class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <input type="text" name='meta_description' class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Meta Keywords</label>
                    <input type="text" name='meta_keyword' class="form-control">
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
                    <div class="col-md-6">
<<<<<<< HEAD
                    </div>
                        <button type="submit" class="btn btn-lg btn-primary">Add Category</button>

=======
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg ">Add Category</button>
>>>>>>> af82efd6414b7349928042f8b5c9af0b423a0ddc
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection