  <!-- login modal -->
  <div id="login-content" class="login grid">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="./func/sign_in.inc.php" method="post" class="sign-in-form frm">
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
          <p class="social-text">O inicie sesión con su cuenta </p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="ri-facebook-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-twitter-x-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-google-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-linkedin-fill"></i>
            </a>
          </div>

          <i class="ri-close-line login__close" id="login-close"></i>
        </form>
        <form action="./func/register.inc.php" class="sign-up-form frm" method="post">
          <h2 class="title">Únete Ya</h2>
          <div class="input-field">
            <i class="ri-user-fill"></i>
            <input type="text" name="user_name" id="sign-up-user-name" placeholder="Username" required="required" />
          </div>
          <div class="input-field">
            <i class="ri-mail-fill"></i>
            <input type="email" name="user_email" id="sign-up-user-email" placeholder="Email" required="required" />
          </div>
          <div class="input-field">
            <i class="ri-lock-2-fill"></i>
            <input type="password" name="user_password" id="sign-up-user-password" required="required" />
          </div>
          <input type="submit" class="btn" value="Registrarse" />
          <p class="social-text">O registrese con su cuenta </p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="ri-facebook-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-twitter-x-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-google-fill"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="ri-linkedin-fill"></i>
            </a>
          </div>


          <i class="ri-close-line login__close" id="login-close-2"></i>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>¿Aun no tienes una cuenta?</h3>
          <p>
            Únete a la comunidad de artistas más talentosos.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Registrate
          </button>
        </div>
        <img src="./public/assets/img/draws/undraw_secure_login_pdn4.svg" class="image" alt="" />
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>
            Te espera un sin fin de talento por explorar.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Inicia Sesión
          </button>
        </div>
        <img src="./public/assets/img/draws/undraw_sign_in_re_o58h.svg" class="image" alt="" />
      </div>
    </div>
    <!-- <i class="ri-close-line login__close" id="login-close"></i> -->
  </div>