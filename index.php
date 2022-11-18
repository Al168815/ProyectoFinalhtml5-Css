<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
 
    <link rel="stylesheet" href="css/nav.css">
    <title>Marquesitas Los Axolotes</title>
</head>
<header class="header">
    <nav class="nav">
      <a href="index.html" class="logo nav-link"><img class="logo" src="img/logo.svg"></a>
      <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav-menu">
        <li class="nav-menu-item">
          <a href="Nosotros.html" class="nav-menu-link nav-link">Nosotros</a>
        </li>
        <li class="nav-menu-item">
          <a href="menu.html" class="nav-menu-link nav-link">Menu</a>
        </li>
        <li class="nav-menu-item">
          <a href="Contacto.html" class="nav-menu-link nav-link">Contactanos</a>
        </li>
       
        </li>
      </ul>
    </nav>
  </header>
  <body>
    
  <section id="segundo" class="segundo">
    

    <iframe class="map"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1697.5191422562984!2d-106.4179167909687!3d31.68752131093472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d01766f8cf3%3A0x72e9ac9e6064e46e!2sMarquesitas%20Los%20Axolotes!5e0!3m2!1ses-419!2smx!4v1664695153567!5m2!1ses-419!2smx"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </section>

  <h2> Formulario del contacto </h2>
    <form class="contacto" action="guardar.php" method="POST" id="contact_form" runat="server" enctype="multipart/form-data">
        <label for="nombre">nombre</label><br>
        <input type="text" id="nombre" name="nombre" maxlength="30"required><br>

        <label for="apellidos">apellidos<label><br>
        <input type="text" id="apellidos" name="apellidos" maxlength="60"required><br>
        
        <label for="calle"> calle:<label><br>
        <input type="text" id="calle" name="calle" maxlength="60"required><br>
        <button class="submit" type="submit" >Enviar Registro</button> 
</form>
  

  </body>
  <footer id="ntres">
    <div class="funo">
      Calle Fuente de la Concordia 7503, Ciudad Juárez, Mexico
    </div>
    <div class="funo">

      <img class="whats" src="img/icons8-whatsapp.svg"> 656 419 2935
    </div>
    <div class="funo">
      Servicio de ordena y recoge, en Mostrador.
    </div>
    <div class="funo">
      marquesitas.los.axolotes <br>
      @gmail.com
    </div>
  </footer>
</div>

</html>