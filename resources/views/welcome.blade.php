<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  @include('user.layouts.head')

</head>

<body class="antialiased">

 @include('user.layouts.header')




  <!-- Section tab -->
  <div class="container mx-auto px-4 mb-4 md:mb-10">
    <div class="">
      <div id="tabs" role="tablist" aria-label="tabs"
        class="relative mb-4 mx-auto h-[6.5vh] grid grid-cols-3 divide-x items-center px-[3px] rounded-[6px] bg-gray-900/20 overflow-hidden shadow-2xl shadow-900/20 transition">
        <div class="absolute indicator h-[6vh] my-auto top-0 bottom-0 left-0 rounded-[6px] bg-[#00FEEF] shadow-md">
        </div>
        <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
          class="relative block h-[6vh] px-6 tab ">
          <span class="text-gray-800 font-bold">Featured</span>
        </button>
        <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
          class="relative block h-[6vh] px-6 tab ">
          <span class="text-gray-800 font-bold">Latest</span>
        </button>
        <button role="tab" aria-selected="false" aria-controls="panel-3" id="tab-3" tabindex="-1"
          class="relative block h-[6vh] px-6 tab ">
          <span class="text-gray-800 font-bold">Trending</span>
        </button>
      </div>
      <!--  -->

      <!--Start:  tab Panel -->

      <div
        class=" relative  min-h-[57vh] max-h-[57vh] md:min-h-[65vh] md:max-h-[65vh] lg:min-h-[70vh] lg:max-h-[70vh] overflow-y-auto overscroll-contain scroll-smooth snap-y snap-mandatory mb-2 md:mb-10">
        <!-- Panel 1 -->
        <div role="tabpanel" id="panel-1" class="tab-panel p-1 transition duration-300">

          <!-- article 1 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start snap-mandatory">
            <img src=" assets/images/Car 9.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 2 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start snap-mandatory">
            <img src=" assets/images/Car 9.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 3 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start snap-mandatory">
            <img src=" assets/images/Car 9.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 4 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 9.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 5 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 9.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 6 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 9.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>
        </div>


        <!-- Panel 2 -->
        <div role="tabpanel" id="panel-2"
          class="absolute top-0 invisible opacity-0 tab-panel p-1 transition duration-300">
          <!-- article 1 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src="assets/images/Car 14.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 2 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src="assets/images/Car 14.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 3 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src="assets/images/Car 14.jpg"
              class="w-[144px] h-[90px] md:w-56 md:h-32 lg:w-auto lg:h-52 object-cover" alt="Pic1">
            <div class="relative">
              <h3
                class=" text-[15px] leading-[18.9px] md:leading-[25.9px] lg:leading-[35px] md:text-[19px] lg:text-[32px] font-bold">
                Students of ktu sch are very very horny bastards so beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px] md:top-[100px] lg:top-[180px]"
                style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 4 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 14.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 5 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 14.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 6 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 14.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>
        </div>

        <!-- Panel-3 -->
        <div role="tabpanel" id="panel-3"
          class="absolute top-0 invisible opacity-0 tab-panel p-1 transition duration-300">

          <!-- article 4 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 11.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>


          <!-- article 1 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 11.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 2 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 11.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>


          <!-- article 3 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 11.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>


          <!-- article 4 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 11.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>

          <!-- article 5 -->
          <div class=" grid grid-cols-2 border-b-2 pb-2 snap-start">
            <img src=" assets/images/Car 11.jpg" class="w-[144px] h-[90px] object-cover" alt="Pic1">
            <div class="relative">
              <h3 class=" text-[15px] leading-[18.9px] font-bold">Students of ktu sch are very very horny bastards so
                beware let that be a learn to you</h3>
              <p class="text-[12px] absolute top-[76px]" style="color: rgba(15, 15, 15, 0.74);">Feb 14 8 min read</p>
            </div>

          </div>
        </div>
      </div>

      <div class=" flex justify-center ">
        <button class="h-2 w-2 rounded-full bg-slate-300 activ dot" aria-label="panel-1"></button>
        <button class="h-2 w-2 rounded-full bg-slate-300 mx-2 dot" aria-label="panel-2"></button>
        <button class="h-2 w-2 rounded-full bg-slate-300 dot " aria-label="panel-3"></button>
      </div>
    </div>
  </div>
  <!-- section tab:End -->

 

  @include('user.layouts.footer')




  <script>

    const navbar_nav = document.querySelector(".navbar-nav");
    const icon = document.querySelector(".icon");


    const searchInput = document.getElementById("search");
    const searchIcon = document.querySelector(".searchIcon");
    const tabs = document.getElementById("tabs");


    function onToggleMenu(e) {
      e.name = e.name === "menu" ? "close-outline" : "menu";

      if (e.name === "close-outline") {
        navbar_nav.classList.remove("top-[-400px]");
        navbar_nav.classList.add("top-[0%]");
        navbar_nav.classList.add("opacity-100");


      }
      else {
        navbar_nav.classList.add("top-[-400px]");
        navbar_nav.classList.remove("top-[0%]");
        navbar_nav.classList.remove("opacity-100");
      }
      //navbar_nav.classList.toggle("top-[13%]");
    }



    /*  body.addEventListener("click", ()=>{
    
        if(icon.name === "close-outline"){
          icon.name === "menu";
          navbar_nav.classList.add("top-[-400px]");
          
        }
        
      })*/

    document.addEventListener("click", (e) => {

      if (icon.name == "close-outline" && e.target.id !== 'navBar' && e.target.id !== 'ico') {

        icon.name = 'menu';
        navbar_nav.classList.add("top-[-400px]");
        navbar_nav.classList.remove("top-[0%]");
        navbar_nav.classList.remove("opacity-100");



      }
    })

    //toggle search box
    function onToggleSearch(s) {
      s.name = s.name === "search-outline" ? "close-outline" : "search-outline";

      if (s.name == "close-outline") {
        searchInput.classList.remove("hidden");
        tabs.classList.add("opacity-0")

      }
      else {
        searchInput.classList.add("hidden");
        tabs.classList.remove("opacity-0");
      }
    }


    document.addEventListener("click", (e) => {

      if (searchIcon.name == "close-outline" && e.target.id !== 'search' && e.target.id !== 'searchIco' && e.target.id !== 'searchIn') {

        searchIcon.name = 'search-outline';
        searchInput.classList.add("hidden");
        tabs.classList.remove("opacity-0");



      }

    })


    setTimeout(function () {
      if (window.scrollY > 1000) {
        document.querySelector('.modal-overlay').classList.add('opacity-100', 'pointer-events-auto');
      }
    }, 5000);




  </script>


<script>
  
  
</script>

  <!-- ionicons link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!--  -->
  <script type="module" src="main.js"></script>
  
</body>

</html>