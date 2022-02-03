<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" media="only screen and (min-width:50px) and (max-width:800px)" href="css/indexMovil.css">
    <title>AlquilaCamper</title>
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.gif">
    <script type="text/javascript" src="js/publicidad.js"></script>
  </head>
  <body id="cuerpo">
    <div id="menu">
      <ul>
        <li><div id="principal">
          <a href="index.html"><h1>Principal</h1></a>
        </div></li>
        <li><div id="alquileres">
          <a href="html/alquileres.html"><h1>Alquiler</h1></a>
        </div></li>
        <li><div id="galeria">
          <a href="html/galeria.html"><h1>Galeria</h1></a>
        </div></li>
        <li><div id="contactanos">
          <a href="html/conocenos.html"><h1>Contacto</h1></a>
        </div></li>
      </ul>
    </div>
    <div id="cuerposelector">
      <div id="selector">
        <form id="formulario">
          <select name="tipo" id="tipocamper">
             <option value="urbano">Urbano</option>
             <option value="mixto">Mixto</option>
             <option value="offroad">Offroad</option>
          </select>
          <select name="tipo" id="personas">
             <option value="2p">2 Personas</option>
             <option value="3p">3 Personas</option>
             <option value="4p">4 Personas</option>
          </select>
          <div id="fecha">
            <input type="date" id="inicio" name="Inicio"><label> Entrada</label><br>
            <input type="date" id="fin" name="Final"><label> Salida</label>
          </div>
          <input id="busca" type="submit" value="Buscar">
        </form>
      </div>
    </div>
  </body>
</html>
