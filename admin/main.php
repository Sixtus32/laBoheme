<?php
    if(!isset($_SESSION['admin_id'])){
        // INDEX PARA TODOS.
        //--------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaBoheme Admin</title>
    <link rel="stylesheet" href="./assets/css/login_style.css">
    <link rel="stylesheet" href="./assets/css/base.css">
      <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

</head>
<body>
    <main>
          <!-- login modal -->
  <div id="login-content" class="login grid">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="../func/sign_in.inc.php" method="post" class="sign-in-form frm">
          <h2 class="title">Inicia Sesión</h2>
          <div class="input-field">
            <i class="ri-mail-fill"></i>
            <input type="text" name="user_email" id="sign-in-user-email" placeholder="Username" required="required" />
          </div>
          <div class="input-field">
            <i class="ri-lock-2-fill"></i>
            <input type="password" name="user_password" id="sign-in-user-password" required="required" />
          </div>
          <input type="submit" value="Iniciar Sesión" class="btn solid" />

        </form>
        <div class="sign-up-form frm">
          <h2 class="title">INFO ADMIN.</h2>
          <p class="social-text">Contacte con nosotros se perdió su cuenta.</p>
        </div>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>¿No tienes una cuenta aún?</h3>
          <p>
            Pongase en contacto con un ADMIN.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Registrate
          </button>
        </div>
        <img src="./assets/img/draws/undraw_secure_login_pdn4.svg" class="image" alt="" />
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>
            SOLO PARA ADMINISTRADORES.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Inicia Sesión
          </button>
        </div>
        <img src="./assets/img/draws/undraw_sign_in_re_o58h.svg" class="image" alt="" />
      </div>
    </div>
    <!-- <i class="ri-close-line login__close" id="login-close"></i> -->
  </div>
    </main>
      <!-- login -->
  <script src="./assets/js/login_js.js"></script>
</body>
</html>
<?php
    }else{
?>
    <h1>No estas aqui</h1>
<?php
    }
    ?>
