@extends('layouts.front2')

@section('content')
<div class="col-md-12 banner-login">
    <div class="row">
      <div class="col-md-3">&nbsp;</div>
      <div class="col-md-6 col-xs-12">
        <div class="col-xs-12 logo-duo-home">
          <img src="img/logo-duo.png" alt="duo">
          <h1>¡¡ JUEGA Y GANA INCREÍBLES PREMIOS CON DÚO !!</h1>
        </div>
        <div class="col-xs-12">
          <h3>INGRESA CON TU USUARIO DÚO</h3>
          <form action="">
            <input type="text" name="" class="" placeholder="nombre.apellido@distribuidora.cl">
          </br>

          <input type="submit" value="JUGAR" class="btn_duo">

        </form>
      </div>
    </div>
    <div class="col-md-3">&nbsp;</div>
  </div>
</div>
<div class="col-md-12 info-home">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12">VIDEO</div>
      <div class="col-md-6 col-xs-12">
        <h1>VIDEO PRESENTACIÓN CONCURSO DÚO</h1>
        <h3>Bienvenidos a DÚO, en el siguiente video podrás saber como participar y ganar increíbles premios junto a Peter Veneno.</h3>
        <h3>Ingresa, usa y gana, DÚO, así mejoramos todos</h3>
      </div>
    </div>
  </div>
</div>
 
     </section>
    <script>
    // Set the date we're counting down to
  /*  var countDownDate = new Date("Apr 21, 2021 08:30:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("tiempo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
      }
    }, 1000);*/
    </script>
    @endsection