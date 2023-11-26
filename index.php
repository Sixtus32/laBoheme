<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="generator" content="php html 2024 xml javascript"> -->
  <meta name="autor" content="Sixtus Nosike">
  <meta name="application-name" content="LaBoheme">

  <meta name="keywords" content="freelancer libertad capital influencia social trabajo mérito">
  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="./public/assets/css/swiper-bundle.min.css">
  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="./public/assets/css/styles.css">
  <link rel="stylesheet" href="./public/assets/css/user_style.css">
  <link rel="stylesheet" href="./public/assets/css/profile.css">
  <link rel="stylesheet" href="./public/assets/css/notification.css">
  <link rel="stylesheet" href="./public/assets/css/announce.css">


  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
  <!--=============== REMIXICONS ===============-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

  <title>LaBoheme | Talentos A Tu Alcance</title>
</head>
<?php
if (!isset($_SESSION['user_id'])) {

  // INDEX PARA TODOS.
  //--------------------------------
?>

  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <!-- NAV -->
      <?php require_once("./templates/inx_nav.php"); ?>
    </header>

    <!-- ================== MAIN ========================-->
    <main class="main">
      <!-- EXPLORE -->
      <?php require_once("./templates/inx_explore.php"); ?>
      <!-- SERVICES -->
      <?php require_once("./templates/inx_services.php"); ?>
      <!-- VIEWS -->
      <?php require_once("./templates/inx_views.php"); ?>
      <!-- CONTACT US -->
      <?php require_once("./templates/inx_contact.php"); ?>
      <!-- COMMUNITY -->
      <?php require_once("./templates/inx_community.php"); ?>
      <!-- NOVEDADES -->
      <?php require_once("./templates/inx_news.php"); ?>
      <!-- TESTIMONIOS -->
      <?php require_once("./templates/inx_testimonials.php"); ?>
    </main>

    <!-- ================= FOOTER =====================-->
    <footer class="footer">
      <?php require_once("./templates/inx_footer.php"); ?>
    </footer>

    <!-- MODALS, FLOATING POP etc... -->
    <!-- login modal -->
    <?php require_once("./templates/form.php"); ?>
    <!-- SCROLL UP -->
    <?php require_once("./templates/scroll_up.php"); ?>


    <!-- ================= SCROLLREVEAL JS =================== -->
    <script src="./public/assets/js/scrollreveal.min.js"></script>
    <script src="./public/assets/js/use_scrollreveal.js"></script>
    <!-- ================= EMAIL JS =================== -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="./public/assets/js/email_js.js"></script>
    <!-- ================ SWIPER JS ==================-->
    <script src="./public/assets/js/swiper-bundle.min.js"></script>
    <script src="./public/assets/js/use_swiper.js"></script>

    <!-- login -->
    <script src="./public/assets/js/login_js.js"></script>
    <!-- ================= MAIN =================== -->
    <script src="./public/assets/js/main.js"></script>

  </body>

</html>
<?php
} else {
  // INDEX PARA USUARIOS REGISTRADOS.
  //--------------------------------

?>

  <body>

    <!-- </nav> -->

    <!-- sidebar -->
    <nav class="sidebar" id="sidebar">
      <div class="menu__content">

        <ul class="menu__items">
          <div class="menu__title menu__profile"></div>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-home-line"></i>
              </span>
              <span class="navlink">Incio</span>
            </a>
          </li>

          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-mail-line"></i>
              </span>
              <span class="navlink">Correo</span>
            </a>
          </li>

          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-heart-line"></i>
              </span>
              <span class="navlink">Favoritos</span>
            </a>
          </li>

          <li class="item">
            <div href="#" class="nav_link submenu_item" id="submenu">
              <span class="navlink_icon">
                <i class="ri-layout-grid-line"></i>
              </span>
              <span class="navlink">Categorías</span>
              <i class="ri-arrow-right-s-line"></i>
            </div>

            <ul class="menu__items submenu">
              <a href="#" class="nav_link sublink">Arte</a>
              <a href="#" class="nav_link sublink">Música</a>
              <a href="#" class="nav_link sublink">Baile</a>
              <a href="#" class="nav_link sublink">Diseño</a>
            </ul>
          </li>

          <li class="item">
            <div href="#" class="nav_link submenu_item" id="submenu">
              <span class="navlink_icon">
                <i class="ri-compass-line"></i>
              </span>
              <span class="navlink">Explorar</span>
              <i class="ri-arrow-right-s-line"></i>
            </div>

            <ul class="menu__items submenu">
              <a href="#" class="nav_link sublink">Blog</a>
              <a href="#" class="nav_link sublink">Videos</a>
              <a href="#" class="nav_link sublink">Colaboraciones</a>
              <a href="#" class="nav_link sublink">Novedades</a>
            </ul>
          </li>
        </ul>


        <!-- OTHER -->
        <ul class="menu__items">
          <div class="menu__title menu__laboheme"></div>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-meteor-line"></i>
              </span>
              <span class="navlink">Tendencia</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-article-line"></i>
              </span>
              <span class="navlink">Novedades</span>
            </a>
          </li>

          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-lightbulb-line"></i>
              </span>
              <span class="navlink">Aprendizaje</span>
            </a>
          </li>

          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-settings-4-line"></i>
              </span>
              <span class="navlink">Configuración</span>
            </a>
          </li>

          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="ri-question-line"></i>
              </span>
              <span class="navlink">Ayuda y Soporte</span>
            </a>
          </li>
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom__content">
          <div class="bottom expand__sidebar" id="expand-sidebar">
            <span>Expandir</span>
            <i class="ri-logout-box-r-line"></i>
          </div>
          <div class="bottom collapse__sidebar" id="collapse-sidebar">
            <span> Colapsar</span>
            <i class="ri-logout-box-line"></i>
          </div>
        </div>
      </div>
    </nav>



    <div class="content">

      <nav class="user__navbar">
        <a href="#" class="logo__item">
          <i class="ri-menu-4-line" id="sidebarOpen"></i>
          <img src="./public/assets/img/logo.png" alt="logo image">
          </i>
          LaBoheme
        </a>

        <div class="search__container">
          <div class="search-input">
            <a href="" target="_blank" hidden></a>
            <input type="text" placeholder="Buscar..">
            <div class="autocom-box">
            </div>
            <div class="icon"><i class="ri-search-line"></i></div>
          </div>
        </div>

        <div class="navbar__content">
          <i class="ri-sun-line" id="darkLight"></i>

          <div class="notification__bell">
            <button class="notification__bell-btn" id="bell-btn">
              <i class="ri-notification-line"></i>
            </button>

            <div class="notification__dropdown" id="notification-dropdown">
              <h2>Notificaciones ( <span>3</span> )</h2>

              <div class="notification__item">
                <div class="notification__img">
                  <i class="ri-notification-line"></i>
                </div>

                <div class="notification__info">
                  <p class="notification__message">Alex ha comentado tu <a class="message" href="./templates/inx_community.php">publicacion compartida</a></p>
                  <span class="notification__timer">Hace 10 minutos.</span>
                </div>

                <div class="notification__state">
                  <i class="ri-mail-line message__state"></i>
                </div>
              </div>


              <div class="notification__item">
                <div class="notification__img">
                  <i class="ri-notification-line"></i>
                </div>

                <div class="notification__info">
                  <p class="notification__message">Ben Hur sigue tu <a class="message" href="./templates/inx_services.php">servicio publicado</a></p>
                  <span class="notification__timer">Hace 10 minutos.</span>
                </div>

                <div class="notification__state">
                  <i class="ri-mail-line message__state"></i>
                </div>
              </div>


              <div class="notification__item">
                <div class="notification__img">
                  <i class="ri-notification-line"></i>
                </div>

                <div class="notification__info">
                  <p class="notification__message">Diego Pérez ha respondido tu <a class="message" href="./templates/inx_contact.php">mensaje</a></p>
                  <span class="notification__timer">Hace 10 minutos.</span>
                </div>

                <div class="notification__state">
                  <i class="ri-mail-line message__state"></i>
                </div>
              </div>
            </div>
          </div>


          <div class="profile__dropdown">
            <button class="profile__dropdown-btn" id="dropdown-btn">
              <div class="profile__img">
                <img class="profile__img" src="./public/assets/img/userImage/imagen_generada.png" alt="Imagen generada">
                <i class="ri-circle-fill"></i>
              </div>

              <span>
                <i id="profile-arrow-icon" class="ri-arrow-down-s-line"></i>
              </span>
            </button>

            <ul class="profile__dropdown-list" id="profile-list">

              <li class="profile__dropdown-item">
                <a href="#" class="profile__dropdown-link">
                  <i class="ri-user-3-line"></i>
                  Perfil
                </a>
              </li>

              <li class="profile__dropdown-item">
                <a href="#" class="profile__dropdown-link">
                  <i class="ri-swap-line"></i>
                  Cambiar a vendedor
                </a>
              </li>

              <hr />

              <li class="profile__dropdown-item">
                <a href="#" class="profile__dropdown-link">
                  <i class="ri-shield-user-line"></i>
                  Tus Datos en LaBoheme
                </a>
              </li>

              <li class="profile__dropdown-item">
                <a href="#" class="profile__dropdown-link">
                  <i class="ri-global-line"></i>
                  Ubicación : España
                </a>
              </li>

              <hr />

              <li class="profile__dropdown-item">
                <a href="#" class="profile__dropdown-link">
                  <i class="ri-settings-4-line"></i>
                  Configuración
                </a>
              </li>

              <li class="profile__dropdown-item">
                <a href="#" class="profile__dropdown-link">
                  <i class="ri-question-line"></i>
                  Ayuda y Soporte
                </a>
              </li>

              <hr />

              <li class="profile__dropdown-item">
                <a href="./func/close_session.php" class="profile__dropdown-link">
                  <i class="ri-login-circle-line"></i>
                  Cerrar sessión
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <main class="user_main">

      <div class="announce">
        <p class="announce__info">
          <i class="ri-error-warning-fill"></i>
          <?= $_SESSION["user_name"] ?>, activa tu cuenta
        </p>
        <button title="active" href="#welcome" class="announce__btn">Activar Cuenta</button>
      </div>


      <section class="welcome">
        <h1 class="welcome__title">
          Bienvenido, <?= $_SESSION["user_name"] ?> 
        </h1>
        <ul class="welcome__offers">

          <li class="offer__item" id="offer-item-1">
            <img class="offer__img" src="./public/assets/img/draws/offer-1.svg" alt="offer one">
            <div class="offer__info" id="offer-info-1">
              <h4 class="offer__title" id="offer-title-1">
                Recibe descuentos si contratas a nuestros colaboradores
              </h4>
              <p class="offer__description" id="offer-description-1">
                Cuentales acerca de tus negocios
              </p>
            </div>
            <i class="ri-arrow-right-s-line"></i>
          </li>

          <li class="offer__item" id="offer-item-2">
            <img class="offer__img" src="./public/assets/img/draws/offer-2.svg" alt="offer one">
            <div class="offer__info" id="offer-info-2">
              <h4 class="offer__title" id="offer-title-2">
                Crea propuestas para recibir sugerencias de nuestros colaboradores
              </h4>
              <p class="offer__description" id="offer-description-2">
                Déjanos ayudar en lo que podamos.
              </p>
            </div>
            <i class="ri-arrow-right-s-line"></i>
          </li>
        </ul>
      </section>


      <section class="userServices">
        <h2 class="userServices__title">
          Continúa navegando
          <i class="ri-arrow-right-line"></i>
        </h2>
      </section>

      
    </main>




    <script src=" ./public/assets/js/notification.js"></script>
                <script src="./public/assets/js/userHomePage.js"></script>
                <script src="./public/assets/js/suggestions.js"></script>
                <script src="./public/assets/js/search-engine.js"></script>
  </body>

  </html>

<?php
}
