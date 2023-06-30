 <!--  -->
 <header class="heading mb-3 bg-image object-cover object-center img-fluid overflow-hidden">

<!-- h-[88px] -->
<nav class=" nav shadow-xl md:max-w-full">
  <div class="container mx-auto px-4 flex justify-between items-center  " style="min-height: 13vh;">


    <ion-icon name="menu" class="icon text-3xl cursor-pointer md:hidden text-white" id="ico"
      onclick="onToggleMenu(this)"></ion-icon>
    <!--  -->
    <div class="brand-icon text-white text-xl uppercase"><span class=" text-red-500">Py</span><span class="text-green-500">Co</span><span class="text-sky-700">de</span>-<span class=" text-amber-600">Camp</span></div>

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
      class="navbar-nav z-50 shadow-lg md:shadow-none transition-all md:transition-none ease-in duration-700 bg-[#015E7D] text-[#FFFFFF] md:bg-transparent 
              md:static absolute md:z-auto  opacity-0 md:opacity-100 md:min-h-fit min-h-[290px] max-h-[290px] md:max-h-fit left-0  md:w-fit w-[267px] top-[-400px] px-5 "
      id="navBar">

      <ul class="flex flex-col md:flex-row items-center md:gap-[2vw] font-semibold text-lg">

        <li class="nav-item  md:w-fit w-full border-[#A6A4A4] border-b-2 md:border-none md:hidden">
          <a href="https://pycode-camp.com/" target="_blank" class="nav-link  flex md:h-fit h-[61px] items-center">PyCode-Camp</a>
        </li>


        <li class="nav-item  md:w-fit w-full border-[#A6A4A4] border-b-2 md:border-none ">
          <a href="{{ route('home')}}"
            class="nav-link  flex md:h-fit h-[55px] items-center hover:text-amber-400 hover:duration-500">Home</a>
        </li>


        <li class="nav-item  md:w-fit w-full  border-[#A6A4A4] border-b-2 md:border-none  ">
          <a href="" class="nav-link hover:text-amber-400 hover:duration-500 flex md:h-fit h-[55px] items-center">News</a>
        </li>


        <li class="nav-item  md:w-fit w-full border-[#A6A4A4] border-b-2 md:border-none  ">
          <a href="{{ route('team')}}" class="nav-link  hover:text-amber-400 hover:duration-500 flex md:h-fit h-[55px] items-center">About</a>
        </li>


        <li class="nav-item  md:w-fit w-full md:border-none  ">
          <a href="" class="nav-link  flex md:h-fit h-[55px] items-center">Business</a>
        </li>

      </ul>

    </div>


  </div>

</nav>

</header>