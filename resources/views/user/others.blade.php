<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  @include('user.layouts.head')

</head>

<body class=" h-screen bg-white box-border md:overflow-y-visible md:overflow-hidden">

 @include('user.layouts.header')




    @section('mainContent')
      @show 

 

  @include('user.layouts.footer2')




  @include('user.layouts.scripts')
  
</body>

</html>