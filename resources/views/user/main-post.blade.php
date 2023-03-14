@extends('user.others')


@section('mainContent')
    <section class="text-gray-600 body-font mb-20">
        <div class="container mx-auto px-4">

            <div class="container mx-auto flex flex-col justify-center items-center">
                <img
                    class=" object-cover object-center md:w-56 md:h-32 lg:w-auto lg:h-80 rounded"src="{{ Storage::disk('local')->url($post->image) }}">
            </div>
            <br>

            <h1 class="text-3xl font-bold text-center mb-1">{{ $post->title }}</h1>
            <p class="   mb-1"> <small>created at {{ $post->created_at->diffForHumans() }}</small></p>
            <p class="text-sm text-yellow-700 me-4 mb-5">
                @foreach ($post->categories as $postCategory )
                    {{ $postCategory['name']}} ,
                @endforeach
            </p>
            
             <div class="mb-2">
                {!! htmlspecialchars_decode($post->body) !!}
             </div>
            
             

             {{-- tag clouds --}}
            <div class=" text-right">
                @foreach ($post->tags as $postTag )
                {{ $postTag['name']}} ,
               @endforeach
            </div>

    </section>
@endsection
