@extends('layouts.master')
@section('title', 'Edit Posts')

@section('content')
    <div class="container-fluid px-4 mt-4">
       
        <div class="card">
            <div class="card-header">
                <h4>Edit Posts
                    <a href="{{url('admin/posts')}}" class="btn btn-danger float-end"> Back</a>
                </h4>
            </div>
            <div class="card-body">
                 @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
             <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
            <form action="{{url('admin/update-post/'.$post->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" class="form-control">
                       <option value=''>---Select Category---</option>
                        @foreach ($category as $cateitem)
                            
                        <option value={{$cateitem->id}} {{$post->category_id==$cateitem->id?'selected':''}}>{{$cateitem->name}}</option>
                        @endforeach
                    </select>
                </div>
                 <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" value="{{$post->name}}" name="name" class="form-control"/>
                </div>
                 <div class="mb-3">
                    <label for="">Slug</label>
                   <input type="text" value="{{$post->slug}}" name="slug" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                   <textarea id="my_summernote" name="description" rows="4" class="form-control">{!!$post->description!!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                   <input type="text" value="{{$post->yt_iframe}}" name="yt_iframe" class="form-control"/>
                </div>
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                   <input type="text" value="{{$post->meta_title}}" name="meta_title" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                   <textarea rows="3" name="meta_description" class="form-control">
                    {!!$post->meta_description!!}
                   </textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea rows="3" name="meta_keyword" class="form-control">
                        {!!$post->meta_keyword!!}
                    </textarea>
                    
                </div>
                <h4>Status</h4>
                <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{$post->status=='1'?'checked':''}}/>
                    </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update Post</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection