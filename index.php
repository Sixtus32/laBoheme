

<?php
  if(!isset($_SESSION['user_id'])){

  // INDEX PARA TODOS.
  //--------------------------------
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

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
  <!--=============== REMIXICONS ===============-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

  <title>LaBoheme - Talentos A Tu Alcance</title>
</head>
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
} else{
    // INDEX PARA USUARIOS REGISTRADOS.
    //--------------------------------
?>
    <h1>BIENVENIDO </h1>
    <a href="./func/close_session.php">Cerrar</a>
<?php
}
?>