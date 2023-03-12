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




  <!-- ionicons link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!--  -->
  <script type="module" src="{{ asset('user/assets/js/main.js') }}"></script>