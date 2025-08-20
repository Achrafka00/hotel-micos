<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>
     @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
     
      <!-- our_room -->
      @include('home.room')
      <!-- end our_room -->
      <!-- gallery -->
     
      <!-- end contact -->
      <!--  footer -->
      @include('home.footer')
   </body>
</html>