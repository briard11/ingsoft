<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include "inicio_estilo.php" ?>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Invernadero</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tabla">TABLA</a></li>
        <li><a href="#entradas">CONSUMOS</a></li>
        <li><a href="index.php">SALIR</a></li>         
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Ing. Software</h1> 
  <p>prueba de la pagina</p> 
  
</div>

<div id="tabla" class="container-fluid ">
  <div class="row text-center slideanim">
    <div class="col-sm-8">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
        </tr>
      </tbody>
      </table>
    </div>
    <div class="col-sm-4">
      <h2>Tabla de datos</h2>
      <h2>Consumos</h2>      
    </div>
  </div>
</div>
<div id="entradas" class="container-fluid bg-grey">
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <h2>Llene los datos</h2>
      <h2>por favor</h2>
      <h1>CONSUMOS</h1>
    </div>
    <div class="col-sm-8">
      <form action="entradas.php" method="POST">
        <select name="productos" class="form-control" >
          <option value="id">Magnesio</option>          
        </select>
        <select name="proveedores" class="form-control" >
          <option value="id">uis</option>          
        </select>
        <input type="date" class="form-control">
        <input type="number" class="form-control" min="1" max="99999">
        <input type="submit" class="form-control btn-success" value="Listo my dog.">
      </form>
    </div>
    
  </div>
</div>





<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Made By <a href="https://www.youporn.com" title="Visit w3schools">www.davidmiguel.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
