    <!-- id="views" -->
    <!-- ================================================================ VIEWS ===========================================================-->
    <section class="views section">
        <h2 class="section__title-1" id="views">
            <span>Más Populares.</span>
        </h2>

        <div class="views__container container grid">
            <?php
            require_once "./app/models/bd.user.inc.php";


            $connectionUser = new BD_User();
            $services = $connectionUser->getUsersServicesData();
            foreach (array_slice($services, 0, 8) as $serviceData) {
                $userInfo = $connectionUser->getUserInfo($serviceData['user_id']);
                echo "
                <article class='views__card'>

                    <div class='views__image'>
                        <img src='" . $serviceData["service_image"] . "' alt='view services image' class='views__img'>
                        <a href='../pages/service_details.php?user_id=" . $serviceData['service_id'] . "' class='views__button button'>
                            <i class='ri-arrow-right-up-line'></i>
                        </a>
                    </div>


                    <div class='views__content'>
                        <h3 class='views__subtitle'>" . $serviceData['service_category'] . "</h3>
                        <a href='../pages/user_details.php?user_id=" . $serviceData['service_id'] . "' class='views__user'>
                            <img src='" . $userInfo['photo'] . "' alt='image' class='views__user-image'>
                            <h2 href='../pages/user_details.php?user_id=" . $serviceData['service_id'] . "' class='views__user-name'>jonathan_darius</h2>
                        </a>
                        <p class='views__description'>" . $serviceData['service_description'] . "</p>
                    </div>


                    <div class='views__info'>
                        <p class='views__info-rating vinfo'>
                            <i class='ri-star-line'></i>
                            " . $serviceData['service_rating_stars'] . "
                        </p>

                        <p class='views__info-price vinfo'>
                            <i class='ri-price-tag-3-line'></i>
                            " . $serviceData['service_price'] . "
                        </p>
                    </div>


                </article>
            ";
            }
            ?>








        </div>
    </section>


    <!-- /*  PARA RECORRIDO DE FORMA ALEATORIA.  */
        /*
        // Supongamos que $datos es tu array de datos extraído de la base de datos
            $datos = [...]; // Tu array de datos

        // Reorganiza el array en un orden aleatorio
            shuffle($datos);

        // Toma los primeros 8 elementos del array aleatorio
            $elementosAleatorios = array_slice($datos, 0, 8);

        // Utiliza un bucle foreach para recorrer los elementos aleatorios
            foreach ($elementosAleatorios as $dato) {
        // Haz algo con $dato, por ejemplo, muestra su contenido
            echo $dato;
        } */ -->

    <!-- foreach (array_slice($datos, 0, 8) as $dato) {
    // Haz algo con $dato, por ejemplo, muestra su contenido
    echo $dato;
    }
 -->

    <!-- <article class="views__card">
        <div class="views__image">
            <img src="./public/assets/img/events/project-3.jpg" alt="view services image" class="views__img">
            <a href="#" class="views__button button">
                <i class="ri-arrow-right-up-line"></i>
            </a>
        </div>

        <div class="views__content">
            <h3 class="views__subtitle">Website</h3>
            <a href="#" class="views__user">
                <img src="./public/assets/img/animojiAvatars/image 6.png" alt="image" class="views__user-image">
                <h2 href="#" class="views__user-name">jonathan_darius</h2>
            </a>
            <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                the desing at the client's request.</p>
        </div>


        <div class="views__info">

            <p class="views__info-rating vinfo">
                <i class="ri-star-line"></i>
                4.9
            </p>

            <p class="views__info-price vinfo">
                <i class="ri-price-tag-3-line"></i>
                29,<sup>85€</sup>
            </p>
        </div>
    </article> -->




    <!-- 
            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-1.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 10.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article>


            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-1.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 88.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article>

            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-1.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 31.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article>

            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-1.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 108.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article>

            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-1.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 50.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article>

            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-3.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 23.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article>

            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-3.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 58.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article>


            <article class="views__card">
                <div class="views__image">
                    <img src="./public/assets/img/events/project-3.jpg" alt="view services image" class="views__img">
                    <a href="#" class="views__button button">
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>

                <div class="views__content">
                    <h3 class="views__subtitle">Website</h3>
                    <a href="#" class="views__user">
                        <img src="./public/assets/img/animojiAvatars/image 6.png" alt="image" class="views__user-image">
                        <h2 href="#" class="views__user-name">jonathan_darius</h2>
                    </a>
                    <p class="views__description">Project that you carry out in the design and structure of the layout, showing
                        the desing at the client's request.</p>
                </div>


                <div class="views__info">

                    <p class="views__info-rating vinfo">
                        <i class="ri-star-line"></i>
                        4.9
                    </p>

                    <p class="views__info-price vinfo">
                        <i class="ri-price-tag-3-line"></i>
                        29,<sup>85€</sup>
                    </p>

                </div>
            </article> -->