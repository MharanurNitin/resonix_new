<x-layout >
    <x-slot name='title'>
        Welcome to blog
    </x-slot>
    <x-slot name='content'>
        <div class="min-h-4/5 w-screen">
     @include('include.blog-navbar')
      <div class="py-5 min-h-4/5">
        <div class="container">
            <div class="flex flex-col items-center md:items-start md:justify-center md:flex-row m-auto">
                <div class="w-screen md:w-4/5">
                    <div class="category-heading text-center text-lg text-orange-500">
                        <h4>{{$category->name}}</h4>
                    </div>
                    <div class="flex flex-col gap-6 md:flex-row justify-center items-center">
                    @forelse ($post as $postitem)
                    <div class="card card-shadow mt-4 p-5 w-11/12 md:w-auto bg-gradient-to-br from-blue-700 to-red-600">
                        <div class="card-body cursor-pointer text-white">
                           <a href="{{url('blog/'.$category->slug.'/'.$postitem->slug)}} " class="">
                            <h2 class="blog-heading"> {{$postitem->name}}</h2>
                        </a> 
                        
                        <h6 class="">Posted On : {{$postitem->created_at->format('d-m-Y')}}</h6>
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
                </div>
                <div class="w-11/12 md:w-1/5 bg-white shadow-lg text-center mt-3 md:mt-0">
                    <div class="card-body ">

                        <h4> ADVT Section</h4>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
      
    </x-slot>
</x-layout>