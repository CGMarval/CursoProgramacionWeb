<!-- ======= HEADER ======= -->
<?php include_once "./components/header.php" ?>
<!-- ======= END HEADER ======= -->

<form>
  <div class="mb-3">
    <label for="inputUsuario" class="form-label">Usuario</label>
    <input type="email" class="form-control" id="inputUsuario" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="inputPassword" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="login">
    <label class="form-check-label" for="login">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>