@extends('user.others')


@section('mainContent')
    <section class="text-gray-600 body-font">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">About Us</h1>
            <p>         All of you,
                I'm excited to announce the PYCODECAMP project team, which will collaborate to accomplish our shared aims
                and objectives.
                Our project's success depends on the diverse talents, knowledge, and experience that each team member
                brings to the table.
  
                We are dedicated to open communication, teamwork, and accountability as a group.
                We are aware of how crucial collaboration is to completing the project successfully.
                We want to create a team environment where everyone can contribute to their full potential.</p>
            <br><br>
            <div class="basis-1/4">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="font-bold text-2xl">WE Provide</h2>
                    <nav class="list-none mb-10">
                        <ul class="list-disc">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Graphic designs</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Advertorial</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Build Websites</a>
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
                        <img class=" w-32 h-16" src="{{ asset('user/assets/img/nat2.jpeg') }}" />
                        Nathan
                    </p>
                    <p class="text-center">
                        <img class=" w-32 h-16" src="{{ asset('user/assets/img/Abrantie2.jpeg') }}" />
                        Abrantie
                    </p>
                    <p class="text-center">
                        <img class="w-32 h-16" src="{{ asset('user/assets/img/isreal2.jpeg') }}" />
                        Isreal
                    </p>
                </div>
                <br>
                
                <!--img group2-->
                <div class="columns-3">
                    <p class="text-center ">
                        <img class="w-32 h-16" src="{{ asset('user/assets/img/charry.jpeg') }}" />
                        Charity
                    </p>
                    <p class="text-center ">
                        <img class="w-32 h-16" src="{{ asset('user/assets/img/Reina.jpeg') }}" />
                        Reina
                    </p>
                    <p class="text-center">
                        <img class="w-32 h-16 " src="{{ asset('user/assets/img/Agus2.jpeg') }}" />
                       Sarah
                    </p>
                </div>
                <br>

                {{--  --}}
                <div class="columns-3">
                    <p class="text-center ">
                        <img class="w-32 h-16" src="{{ asset('user/assets/img/kwame2.jpeg') }}" />
                        Emmanuel
                    </p>
                    <p class="text-center ">
                        <img class="w-32 h-16" src="{{ asset('user/assets/img/mawuli3.jpeg') }}" />
                        Mawuli
                    </p>
                    <p class="text-center">
                        <img class="w-32 h-16 " src="{{ asset('user/assets/img/kobby.jpeg') }}" />
                        Kobby
                    </p>
                </div>
                <br>

                {{--  --}}
                <div class="columns-3">
                    <p class="text-center ">
                        <img class="w-32 h-16" src="{{ asset('user/assets/img/Astro2.jpeg') }}" />
                        Astro
                    </p>
                    <p class="text-center ">
                        <img class="w-32 h-16" src="{{ asset('user/assets/img/eric.jpeg') }}" />
                        Eric
                    </p>
                    <p class="text-center">
                        <img class="w-32 h-16 " src="{{ asset('user/assets/img/Agus2.jpeg') }}" />
                       Augustine
                    </p>
                </div>

    </section>
@endsection
