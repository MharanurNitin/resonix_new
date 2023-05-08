<x-layout>
    <x-slot name='title'>
        {{$post->meta_title}}
       @section('meta_description',"$post->meta_description")
       @section('meta_keyword',"$post->meta_keyword") 
    </x-slot>
    <x-slot name='content'>
        <div class="min-h-4/5 w-screen">
            @include('include.blog-navbar')
            <div class="py-5 min-h-4/5">
                <div class="container">
                    <div class="flex flex-col items-center md:items-start md:justify-center md:flex-row m-auto">
                        <div class="w-screen md:w-4/5">
                            <div class="category-heading text-center text-lg text-orange-500">
                                <h4>{!!  $post->name !!}</h4>
                            </div>
                            <div>
                                <h6>{{ $post->category->name . ' / ' . $post->name}}</h6>
                            </div>
                            <div class="flex flex-col gap-6 md:flex-row justify-center items-center">

                                <div
                                    class="card card-shadow mt-4 p-5 w-11/12 md:w-auto bg-gradient-to-br from-blue-700 to-red-600">
                                    <div class="card-body cursor-pointer text-white">
                                        <h3>{!!  $post->description !!}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 md:w-1/5 bg-white shadow-lg text-center mt-3 md:mt-0">
                                <div class="card-body ">

                                    <h4>  Section</h4>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h4>Latest Post</h4>

                                </div>
                                <div class="card-body">
                                    @foreach ($latest_posts as $latest_post)
                                        
                                    <a href="{{url('blog/'.$latest_post->category->slug.'/'.$latest_post->slug)}}" class="text-decoration-none">
                                        <h6> > {{$latest_post->name}}</h6>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
