<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>My Aplicación con Sockets</title>
    <script src="/socket.io/socket.io.js"></script>
    <script src="main.js"></script>
  </head>
  <body>
    <h1>My App</h1>
    <div id="messages"></div>
  </br>

    <form onsubmit="return addMessage(this)">
        <input type="text" id="username" placeholder="Nombre">
        <input type="text" id="texto" placeholder="Mensaje...">
        <input type="submit" value="Enviar!">

    </form>
  </body>
</html>