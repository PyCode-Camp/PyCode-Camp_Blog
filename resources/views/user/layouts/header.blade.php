 <!--  -->
 <header class="heading mb-3 bg-image object-cover object-center img-fluid overflow-hidden">

<!-- h-[88px] -->
<nav class=" nav shadow-xl md:max-w-full">
  <div class="container mx-auto px-4 flex justify-between items-center  " style="min-height: 13vh;">


    <ion-icon name="menu" class="icon text-3xl cursor-pointer md:hidden text-white" id="ico"
      onclick="onToggleMenu(this)"></ion-icon>
    <!--  -->
    <div class="brand-icon text-white text-xl uppercase"><a href="{{ route('home')}}"><span class=" text-red-500">Py</span><span class="text-green-500">Co</span><span class="text-sky-700">de</span>-<span class=" text-amber-600">Camp</span></a></div>

    <ion-icon name="search-outline" class="icon text-3xl cursor-pointer md:hidden text-white searchIcon"
      id="searchIco" onclick="onToggleSearch(this)"></ion-icon>

    <div class=" absolute top-[15vh] left-[18%] z-50 ">
      <div class=" relative hidden transition-all ease-in duration-700 " id="search">
       <form action="{{ route('blog.search') }}" method="get">
        

        <ion-icon name="search-outline" class="text-white absolute text-2xl top-[10px] left-[3px] z-10"></ion-icon>
        <input type="text " id="searchIn"
          class=" h-[43px] bg-[#BDBBBB] py-3 p-7 rounded-full focus:outline-none focus:ring-1 focus:ring-sky-500 "
          placeholder="Search" name="keyword">
        <button type="submit" name="submit"><ion-icon name="send-outline" class="text-red-500 absolute top-[11px] right-[10px] text-lg"></ion-icon></button>
       </form>
      </div>
    </div>
    <!--  -->
    <div
      class="navbar-nav navbar z-50 shadow-2xl shade md:shadow-none md:scale-100 transition-all md:transition-none ease-in duration-700 bg-[#e5eceed0] text-[#050505] md:text-[#fff] md:bg-transparent rounded-xl
              md:static absolute scale-0 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 md:z-auto  opacity-0 md:opacity-100 md:min-h-fit min-h-[290px] max-h-[290px] md:max-h-fit  md:w-fit w-[267px]  px-5 "
      id="navBar">

      <ul class="flex flex-col md:flex-row items-center md:gap-[2vw] font-semibold text-2xl">

        <li class="nav-item  md:w-fit w-full text-center border-[#A6A4A4] border-b-2 md:border-none md:hidden">
          <a href="https://pycode-camp.com/" target="_blank" class="nav-link  flex md:h-fit h-[61px] items-center justify-center">PyCode-Camp</a>
        </li>


        <li class="nav-item  md:w-fit w-full border-[#A6A4A4] border-b-2 md:border-none ">
          <a href="{{ route('home')}}"
            class="nav-link  flex md:h-fit h-[55px] items-center justify-center hover:text-amber-400 hover:duration-500">Home</a>
        </li>


        <li class="nav-item  md:w-fit w-full  border-[#A6A4A4] border-b-2 md:border-none  ">
          <a href="" class="nav-link hover:text-amber-400 hover:duration-500 flex md:h-fit h-[55px] items-center justify-center">News</a>
        </li>


        <li class="nav-item  md:w-fit w-full border-[#A6A4A4] border-b-2 md:border-none  ">
          <a href="{{ route('team')}}" class="nav-link  hover:text-amber-400 hover:duration-500 flex md:h-fit h-[55px] items-center justify-center">About</a>
        </li>


        <li class="nav-item  md:w-fit w-full md:border-none  ">
          <a href="" class="nav-link  flex md:h-fit h-[55px] items-center justify-center">Business</a>
        </li>

      </ul>

    </div>


  </div>

</nav>

</header>