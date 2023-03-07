 <!-- Social links -->
 <section class="mb-[1vh]">

<div class="flex justify-center ">

  <ion-icon name="logo-twitter" class=" border-2 border-cyan-500 rounded-full p-2 text-cyan-500 mx-2 "></ion-icon>
  <ion-icon name="logo-google" class=" border-2 border-red-700 rounded-full p-2 text-red-700 mr-2"></ion-icon>
  <ion-icon name="logo-linkedin" class="border-2 border-blue-500 rounded-full p-2 text-blue-500 mr-2 "></ion-icon>
  <ion-icon name="logo-instagram" class=" border-2   border-red-800 rounded-full p-2 text-red-800 mr-2"></ion-icon>
  <ion-icon name="logo-facebook" class=" border-2 border-blue-700 rounded-full p-2 text-blue-700 mr-2"></ion-icon>
  <ion-icon name="logo-youtube" class="border-2 border-red-600 rounded-full p-2 text-red-600 mr-2"></ion-icon>

</div>
</section>
<!-- End: social section -->


<!-- Subscribe section -->
<section>

<div class=" bg-cyan-400 h-[11vh] flex items-center gap-5 rounded-t-[15px]">

  <div class=" border-r-[1px] p-2">
    <h4 class=" text-[9px] leading-3"
      style="text-shadow:0px 4px 4px rgba(0, 0, 0, 0.25); color: rgba(30, 30, 30, 0.41);">Sign with your email
      Account</h4>
    <form action="">
      <input type="email"
        class=" h-[21px] w-[106px] text-[11px] font-[600] p-2 focus:outline-none focus:ring-1 focus:border-sky-500 focus:ring-sky-500 
          outline-none rounded-l-full bg-slate-900/20 invalid:border-pink-600 invalid:text-pink-600 focus:invalid:border-pink-600 focus:invalid:ring-pink-500"
        style="color:rgba(30, 30, 30, 0.41);">
      <input type="submit"
        class="border-1 text-[9px] font-[600] py-[4px] px-[7px] -ml-[3.5px]  rounded-r-full text-center text-white bg-red-600"
        value="subscribe" name="subscribe">
    </form>

  </div>

  <div class=" flex gap-7">
    <a href="#"> <img src=" {{ asset('user/assets/img/Car 9.jpg') }}" class="h-[33px] w-[33px] object-cover rounded-full bg-primary" alt=""></a>
   <a href="#"> <img src=" {{ asset('user/assets/img/Car 9.jpg') }}" class="h-[33px] w-[33px] object-cover rounded-full bg-secondary" alt=""></a> 
    <a href=""><img src=" {{ asset('user/assets/img/Car 9.jpg') }}" class="h-[33px] w-[33px] object-cover rounded-full bg-dark"
        alt=""></a>
  </div>
</div>
</section>
<!--  -->



<!--Subscription Modal pop Over  -->
<div class="modal-overlay pointer fixed z-50 inset-0 bg-gray-900 opacity-0 invisible"></div>
<div
class=" modal invisible absolute h-[112px] w-[80vw] top-1/2 left-1/2 z-50 transform -translate-x-1/2 -translate-y-1/2 bg-white p-4 shadow-lg">
<h2 class="text-[15px] font-semibold" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Subscribe to our
  newsletter</h2>
<p class="text-[12px] mb-2 text-[#1E1E1E69] font-semibold" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
  Sign in with you email account</p>
<form>
  <div class="flex gap-1">
    <input type="email"
      class=" rounded-l-full  h-[27px] w-[179px] text-white p-3 
focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
      style="background-color: rgba(62, 62, 63, 0.25);">
    <input type="submit" class=" bg-red-600 h-[27px] text-[12px] px-2 rounded-r-full" value="subscribe"
      style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
  </div>
</form>
</div>