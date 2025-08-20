<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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
      @include('home.slider')
      <!-- end banner -->
      <!-- about -->
     
      <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>À Propos de Notre Hôtel 5 Étoiles à Marrakech</h2>
                        <p>
                            Bienvenue dans notre luxueux hôtel cinq étoiles, situé au cœur de la ville envoûtante de Marrakech. Nous sommes fiers d'offrir une expérience de séjour exceptionnelle qui marie harmonieusement l'élégance, le confort et l'hospitalité marocaine authentique.
                        </p>
                        <p>
                            Depuis notre ouverture, notre hôtel s'efforce de capturer l'esprit envoûtant de Marrakech en combinant des installations modernes avec un design traditionnel marocain pour créer un cadre unique et enchanteur.
                        </p>
                        <a class="read_more" href="{{ url('our_rooms') }}">book now</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div style="width: 50%" class="about_img">
                       <figure><img src="images/about.jpg" alt="#"/></figure><br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>À Propos de Notre Spa</h2>
                        <p>
                            Bienvenue dans notre spa exclusif au cœur de Marrakech. Découvrez des hammams traditionnels, des massages relaxants et des soins de beauté revitalisants, inspirés par les rituels marocains. Plongez dans une oasis de détente et de bien-être.
                        </p>
                       
                        <a class="read_more" href="{{ url('our_rooms') }}">book now</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div style="width: 50%" class="about_img">
                       <figure><img src="images/spa.jpg" alt="#"/></figure><br></br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>À Propos de Notre Restaurant</h2>
                        <p>
                            Bienvenue dans notre restaurant d'exception au cœur de Marrakech.
                            Découvrez une cuisine raffinée, des saveurs authentiques et un service professionnel dans un cadre élégant.
                             Réservez dès maintenant pour une expérience culinaire mémorable
                        </p>
                       
                        <a class="read_more" href="{{ url('our_rooms') }}">book now</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div style="width: 50%" class="about_img">
                       <figure><img src="images/R1.jpg" alt="#"/></figure>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
                        
      <!-- end about -->
      <!-- our_room -->
     
     @include('home.contact')
      <!-- end contact -->
      <!--  footer -->
      @include('home.footer')


 <script type="text/javascript">
$(window).scroll(function() {
  sessionStorage.scrolltop = $(this).scrolltop();
});

$(document).ready(function(){
   if(sessionStorage.scrolltop != "undefined"){
      $(window).scrolltop(sessionStorage.scrolltop);
   }
});

</script>


   </body>
</html>