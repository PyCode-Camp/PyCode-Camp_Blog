@extends('user.others')


@section('mainContent')
    <section class="text-gray-600 body-font mb-16">
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

                <div class=" flex justify-between items-center gap-2 mt-2">
                <div class=" w-1/2">
                @if($prev)
                        <a href="{{ route('post', $prev->slug)}}" class=" flex flex-col shadow-xl hover:shadow-2xl px-2 h-[82px] min-h-[82px] max-h-[82px] bg-white">
                                <p class=" text-lg text-blue-700 font-bold flex items-center"><ion-icon name="arrow-back-outline" class=" mr-2"></ion-icon> Previous</p>
                                <p> {{ Str::limit($prev->title, 30) }}</p>
                        </a>
                    @endif
                </div>

                    <div class="w-1/2">
                    @if($next)
                        <a href="{{ route('post', $next->slug)}}"  class=" flex flex-col shadow-xl hover:shadow-2xl px-2 h-[82px] min-h-[82px] max-h-[82px] bg-white">
                        <p class=" text-lg text-blue-700 font-bold flex items-center ">  Next <ion-icon name="arrow-forward-outline" class="ml-2"></ion-icon> </p>
                            <p>  {{ Str::limit($next->title, 30) }}</p>
                        </a>
                    @endif
                    </div>
                </div>
    </section>

@endsection
