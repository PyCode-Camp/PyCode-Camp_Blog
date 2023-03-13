<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  @include('user.layouts.head')

</head>

<body class=" h-screen bg-white box-border md:overflow-y-visible md:overflow-hidden">

 @include('user.layouts.header')




    @section('main-content')
      @show 

 

  @include('user.layouts.footer')




@include('user.layouts.scripts')
  
</body>

</html>