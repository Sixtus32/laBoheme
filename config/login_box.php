<div class="login__box">
  <div class="inner__box">
    <div class="ways__wrap">
      <div class="sign sign__up-way">

	<div class="way__logo">
	  <img class="wlogo__img" src="" alt="LaBoheme Logo">
          <h4>LaBoheme</h4>
	</div>
        
	<div class="heading">
	  <h2>Únete Y Aventúrate</h2>
	  <h6>¿Ya tienes una cuenta?</h6>
          <a class="toggle" href="#">Inicia sesión</a>
	</div>

	<div class="actual__way">
	  <button class="service__btn">Continuar con Google</button>
           <h4>OR</h4>
          <button class="service__btn">Continuar con Email</button>
        </div>

	<p class="terms">
          Al unirte, aceptas los <a href="">Términos de Servicio</a> de LaBoheme y a recibir ocasioanalmente nuestros correos electrónicos. Lea nuestra <a href="">Política de privacidad</a> para saber cómo utilizamos sus datos personales.
        </p>

      </div>


      <div class="sign sign__in-way">
	<div class="way__logo">
	  <img class="wlogo__img" src="" alt="LaBoheme Logo">
          <h4>LaBoheme</h4>
	</div>
        
	<div class="heading">
	  <h2>Iniciar sesión en su cuenta</h2>
	  <h6>¿Ya tienes una cuenta?</h6>
          <a class="toggle" href="#">Únete</a>
	</div>

	<div class="actual__way">
	  <button class="service__btn">
<i class="ri-google-line"></i>Continuar con Google</button>
           <h4>OR</h4>
	  <button class="service__btn">
<i class="ri-mail-line"></i>
Continuar con Email</button>
        </div>

	<p class="terms">
          Al unirte, aceptas los Términos de servicio de LaBoheme y a recibir ocasioanalmente nuestros correos electrónicos. Lea nuestra Política de privacidad para saber cómo utilizamos sus datos personales.
        </p>

      </div>

      </div>
    </div>



    <div class="carousel">
      <div class="images__wrapper">
	<img class="image img__1 show" src="./public/assets/img/img_session_1.jpg" alt="carousel wallpaper">
	<img class="image img__1" src="./public/assets/img/img_session_2.jpg" alt="carousel wallpaper 2">
        <img class="image img__1" src="./public/assets/img/img_session_3.jpg" alt="carousel wallpaper 3">
      </div>
      <div class="text__slider">
       <div class="text__wrap">
	<div class="text__group">
          <h2>Tu Vida, Tu Camino</h2>
          <h2>Ahora, O Nunca</h2>
          <h2>Lo Nuevo, Y Único A Tu Alcance</h2>
        </div>
       </div>
       <div class="bullets">
	 <span class data-value="1" class="active"></span>
	 <span data-value="2"></span>
         <span data-value="3"></span>
       </div>
      </div>
    </div>   
  </div>
</div>


<style>
.login__box{
  position: relative;
  width: 100%;
  max-width: 1020px;
  height: 640px;
  background-color: #fff;
  border-radius: 3.3rem;
  box-shadow: 0 60px 40px -30px rgba(0,0,0,0.27);
}

.inner__box{
  position: absolute;
  width: calc(100% - 4.1rem);
  height: calc(100% - 4.1rem);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.ways__wrap{
  position: absolute;
  height: 100%;
  width: 45%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr;
  transition: 0.8s ease-in-out;
}

.sign{
  max-width: 260px;
  width: 100%;
  margin: 0 auto;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  grid-column: 1 / 2;
  grid-row: 1 / 2;
  transition: opacity 0.02s 0.4s;
}

.sign__up-way{
  opacity: 0;
  pointer-events: none;
}

.way__logo{
  display: flex;
  align-items: center;
}

.wlogo__img{
 width: 27px;
 margin-right: 0.3rem;
}

.way__logo h4{
 font-size: 1.1rem;
 margin-top: -9px;
 letter-spacing: -0.5px;
 color: #151111;
}

.heading h2{
  font-size: 2.1rem;
  font-weight: 600px;
  color: rgb(21, 17, 17);
}

.heading h6{
 color: rgb(186, 186, 186);
 font-weight: 400;
 font-size: 0.75rem;
 display: inline;
}

.toggle{
 color: rgb(21, 17, 17);
 text-decoration: none;
 font-size: .75rem;
 font-weight: 500;
  transition: 0.3s;
}

.toggle:hover{
color: rgb(131, 113, 253);
}

.service__btn{
display: inline-block;
width: 100%;
 height: 43px;
 background-color: #fff;
 color: rgb(21, 17, 17);
 border: none;
 cursor: pointer; 
 border-radius: 0.8rem;
 font-size: 0.8rem;
 margin-bottom: 2rem;
 transition: 0.3s;
}


.service__btn:hover{
 background-color: #8371fd;
}
.terms{
  color: rgb(187, 187, 187);
  font-size: 0.7rem;
}

.terms a{
  color: rgb(131, 113, 253);
  transition: .3s;
}

.terms a:hover{
 color: rgb(131, 113, 253);
}


.carousel{
 position: absolute;
 height: 100%;
 width: 55%;
 left: 45%;
 top: 0;
 background-color: #ffe0d2;
 border-radius: 2rem;
 display: grid;
 grid-template-rows: auto 1fr;
 padding-bottom: 2rem;
 overflow: hidden;
 transition: .8s ease-in-out;
}

.images__wrapper{
 display: grid;
 grid-template-columns: 1fr;
 grid-template-rows: 1fr;
}

.image{
 width: 100%;
 grid-column: 1/2;
 grid-row: 1/2;
 opacity: 0;
 transition: opacity .3s, transform .5s;
}

.img__1{
 transform: translate(0, -50px);
}
.img__2{
 transform: translate(0.4, 0.5);
}
.img__3{
 transform: translate(scale(.3), rotate(-20deg));
}




</style>
