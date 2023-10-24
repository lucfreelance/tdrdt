---
title: "Contacto"
subtitle: "Escríbenos vía formulario"
author: "TDRid"
avatar: "img/authors/tdrid.png"
image: "img/imgposts/contacto.jpg"
---

# Formulario de Contacto

Puedes contactarnos utilizando el siguiente formulario:

<form action="/contacto.php" method="POST">
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required>

  <label for="correo">Correo Electrónico:</label>
  <input type="email" id="correo" name="correo" required>

  <label for="mensaje">Mensaje:</label>
  <textarea id="mensaje" name="mensaje" required></textarea>

  <button type="submit">Enviar</button>
</form>
