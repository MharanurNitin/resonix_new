<x-layout >
    <x-slot name='title'>
        Welcome to blog
    </x-slot>
    <x-slot name='content'>
     @include('include.blog-navbar')
      <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="category-heading">
                        <h4>{{$category->name}}</h4>
                    </div>
                    @forelse ($post as $postitem)
                    <div class="card card-shadow mt-4">
                        <div class="card-body">
                           <a href="{{url('blog/'.$category->slug.'/'.$postitem->slug)}}">
                            <h2 class="post-heading"> {{$postitem->name}}</h2>
                        </a> 
                        <h6>Posted On : {{$postitem->created_at->format('d-m-Y')}}</h6>
                        <h6>Posted By : {{$postitem->user->name}}</h6>
                        </div>
                    </div>
                    @empty
                    <div class="card card-shadow mt-4">
                        <div class="card-body">
                            <h2 >Post Not Available</h2>
                        </div>
                    </div>
                    @endforelse
                </div>
                <div class="col-md-3">
                    <div class="card-body">

                        <h4>Section</h4>
                    </div>
                </div>
            </div>
        </div>
      </div>
          
      
    </x-slot>
</x-layout>