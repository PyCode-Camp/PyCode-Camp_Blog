@extends('user.others')


@section('mainContent')
    <section class="text-gray-600 body-font">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">About Us</h1>
            <p>A team is defined as a group of people who perform interdependent tasks to
                work toward accomplishing a common mission or specific objective. Some teams
                have a limited life: for example,
                a design team developing a new product, or a continuous process improvement team
                organized to solve a particular problem.</p>
            <br><br>
            <div class="basis-1/4">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="font-bold text-2xl">WE Provide</h2>
                    <nav class="list-none mb-10">
                        <ul class="list-disc">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Banner Ads</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Advertorial</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Homepage take over</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">content production</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <br>
                <br>
                <h2 class="text-2xl font-bold mb-4">Team Members</h2>
                
                <!--img group1-->
                <div class="columns-3 gap-3 ">
                    <p class="text-center">
                        <img class="" src="{{ asset('user/assets/img/Car 14.jpg') }}" />
                        Melvin 360
                    </p>
                    <p class="text-center">
                        <img class=" " src="{{ asset('user/assets/img/Car 14.jpg') }}" />
                        Melvin 360
                    </p>
                    <p class="text-center">
                        <img class="" src="{{ asset('user/assets/img/Car 14.jpg') }}" />
                        Melvin 360
                    </p>
                </div>
                <br>
                
                <!--img group2-->
                <div class="columns-3">
                    <p class="text-center">
                        <img class="" src="{{ asset('user/assets/img/Car 14.jpg') }}" />
                        Melvin 360
                    </p>
                    <p class="text-center">
                        <img class="" src="{{ asset('user/assets/img/Car 14.jpg') }}" />
                        Melvin 360
                    </p>
                    <p class="text-center">
                        <img class=" " src="{{ asset('user/assets/img/Car 14.jpg') }}" />
                        Melvin 360
                    </p>
                </div>
                <br>

    </section>
@endsection
