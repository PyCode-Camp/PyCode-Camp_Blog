@extends('user.others')


@section('mainContent')
    <section class="text-gray-600 body-font mb-10">
        <div class="container mx-auto px-4">

            <div class="container mx-auto flex flex-col justify-center items-center">
                <img
                    class=" object-cover object-center md:w-56 md:h-32 lg:w-auto lg:h-60 rounded"src="{{ asset('user/assets/img/Car 14.jpg') }}">
            </div>
            <br>

            <h1 class="text-2xl font-bold text-center mb-7">{{ $post->title }}</h1>
            <p class="mb-5">
             {!! htmlspecialchars_decode($post->body) !!}
            </p>


    </section>
@endsection
