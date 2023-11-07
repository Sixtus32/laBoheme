   <!-- ================================================================ CONTACT US ===========================================================-->
   <section class="contact section" id="contact">
       <div class="contact__container grid">

           <div class="contact__data">
               <h2 class="section__title-2">
                   <span>Contáctenos Ahora.</span>
               </h2>
               <p class="contact__description-1">
                   Desde descubrir y gestionar los mejores talentos independientes
                   hasta colaborar con agentes, empresas y equipos para favolorecer su visibilidad. <br>
               </p>

               <p class="contact__description-2">
                   Introduzca su <strong>Nombre</strong> y <strong>Correo Electrónico</strong>, sepa que no recibirá nada más
                   que respuestas.
               </p>

               <div class="geometric-box"></div>
           </div>

           <div class="contact__mail">
               <h2 class="contact__title">Envíe un mensaje</h2>

               <form action="" class="contact__form" id="contact-form">
                   <div class="contact__group">

                       <div class="contact__box">
                           <input type="text" name="contact_name" id="contact-form-name" class="contact__input" required="required" placeholder="Nombre Completo">
                           <label for="contact-form-name" class="contact__label">Nombre Completo</label>
                       </div>


                       <div class="contact__box">
                           <input type="email" name="contact_email" id="contact-form-email" class="contact__input" required="required" placeholder="Correo Electrónico">
                           <label for="contact-form-email" class="contact__label">Email</label>
                       </div>
                   </div>
                   <div class="contact__box">
                       <input type="text" name="contact_company" id="contact-form-company" class="contact__input" required="required" placeholder="Nombre De Empresa">
                       <label for="contact-form-company" class="contact__label">Nombre Empresa</label>
                   </div>

                   <div class="contact__box contact__area">
                       <textarea class="contact__input" name="contact_message" id="contact-form-message" required="required" placeholder="Cuentanos que estás buscando saber."></textarea>
                       <label for="contact-form-message" class="contact__label">Mensaje</label>
                   </div>

                   <p class="contact__message" id="contact-message"></p>

                   <button type="submit" class="contact__button button">
                       <i class="ri-mail-send-line"></i> Enviar </button>
               </form>
           </div>

           <div class="contact__social">
               <img src="./public/assets/img/draws/curved-arrow.svg" alt="image curved arrow" class="contact__social-arrow">

               <div class="contact__social-data">
                   <div>
                       <p class="contact__social-description-1">
                           No envía ningún correo electrónico
                       </p>

                       <p class="contact__social-description-2">
                           Visite nuestras redes
                       </p>
                   </div>

                   <div class="contact__social-links">
                       <a href="#" target="_blank" class="contact__social-link">
                           <i class="ri-facebook-circle-fill"></i>
                       </a>

                       <a href="#" target="_blank" class="contact__social-link">
                           <i class="ri-instagram-fill"></i>

                       </a>

                       <a href="#" target="_blank" class="contact__social-link">
                           <i class="ri-youtube-fill"></i>
                       </a>

                   </div>
               </div>
           </div>
       </div>
   </section>