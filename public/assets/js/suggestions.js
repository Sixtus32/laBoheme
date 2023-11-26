const suggestions = [
  "Diseño de logos",
  "Guías de estilo para marcas",
  "Game Art",
  "Diseño de personajes",
  "Utilería y objetos",
  "Fondos y entornos",
  "UI y UX",
  "Artes gráficas para Streamers",
  "Tarjetas de presentación y papelería",
  "Diseño web",
  "Diseño de aplicaciones",
  "Diseño UX",
  "Diseño de landing page",
  "Diseño de currículums",
  "Ilustraciones",
  "Ilustraciones de libros infantiles",
  "Artistas de IA",
  "Generación de imágenes",
  "Pautas para imágenes personalizadas",
  "Arte NFT",
  "Diseño de patrones",
  "Fuentes y tipografía",
  "Diseño de fuentes",
  "Tipografía",
  "Letras a mano",
  "Caligrafía",
  "Diseño de pósteres",
  "Diseño de folletos",
  "Diseño de flyers",
  "Diseño de libros",
  "Diseño y composición de libros",
  "Diseño de portadas de libros",
  "Diseño de portada de álbumes",
  "Diseño de portada para pódcast",
  "Diseño de packaging y etiquetas",
  "Diseño de packaging",
  "Diseño de etiquetas",
  "Diseño de plantillas",
  "Storyboards",
  "Diseño para medios sociales",
  "Encabezados y portadas",
  "Banners y publicaciones para redes sociales",
  "Diseño de miniaturas",
  "Filtros y lentes de realidad aumentada",
  "Diseño de catálogos",
  "Diseño de menús",
  "Diseño de invitaciones",
  "Retratos y caricaturas",
  "Dibujos animados y cómics",
  "Diseño de tatuajes",
  "Diseño de carteles",
  "Banners web",
  "Edición de imágenes",
  "Edición de imágenes de productos",
  "Manipulación fotográfica",
  "Retoque de retratos",
  "Restauración de Fotos",
  "Maquetas",
  "Arquitectura y diseño de interiores",
  "Diagramas y mapeo",
  "Presentación virtual",
  "Planificación y diseño",
  "Modelado y renderizado 3D",
  "Dibujos 2D y planos de plantas",
  "Paisajismo",
  "Planificación y diseño",
  "Modelado y renderizado 3D",
  "Dibujos 2D y planos del sitio",
  "Ingeniería de edificación",
  "hvac",
  "ingenieria eléctrica",
  "Plomería y drenaje",
  "Civil y estructural",
  "Modelado de información de construcción (BIM)",
  "Simulación de construcción BIM 4D",
  "Capacitación e implementación de BIM",
  "Creación de familias BIM",
  "Coordinación y detección de conflictos de BIM",
  "Modelado BIM en 3D",
  "Modelado de personajes",
  "Diseño industrial y de productos",
  "Desarrollo de conceptos",
  "Modelado y renderizado 3D",
  "Creación rápida de prototipos",
  "Diseño para fabricar",
  "Dibujo técnico",
  "Proceso de diseño completo",
  "Diseño de stand comercial",
  "Camisetas y artículos de promoción",
  "Diseño de moda",
  "Dibujo técnico y ficha técnica",
  "Elaboración de patrones",
  "Ilustraciones de moda",
  "Diseño de prendas 3D",
  "Proceso de diseño completo",
  "Diseño de joyas",
  "Modelado y renderizado 3D",
  "Diseño y bosquejo de conceptos",
  "Diseño de presentaciones",
  "Diseño de correo electrónico",
  "Diseño de íconos",
  "Diseño de infografías",
  "Vinilos para vehículos",
  "Vectorización",
  "Arte NSFW",
  "Otros",
  "Consejos de diseño",
  "Revisión y consulta de diseño",
  "Tutoría de diseño",
  "Lecciones de diseño",
  "Escritura y traducción",
  "Artículos y publicaciones para blogs",
  "Escritura SEO",
  "Artículos promocionales",
  "Blogs de estilo de Vida",
  "Artículos profesionales del sector",
  "Artículos informativos y educativos",
  "Artículos masivos",
  "Corrección y edición de textos",
  "Edición de contenido de IA",
  "Corrección de textos",
  "edición de copy",
  "Traducción",
  "Contenido para sitios web",
  "Descripciones de productos",
  "Redacción de ebooks y libros",
  "Investigación de nicho de Kindle",
  "Cuentos cortos",
  "Propuestas de libros",
  "Contratapas de libros",
  "Ghostwriting",
  "Edición de libros",
  "Redacción de currículums",
  "Tono de voz de la marca",
  "UX Writing",
  "Texto para correos electrónicos",
  "Escritura técnica",
  "Localización",
  "estrategia de contenido",
  "Indicaciones de redacción personalizada",
  "Indicaciones para escritura técnica",
  "Indicaciones para redactar textos",
  "Indicaciones para escritura creativa",
  "Ideas para contenido y blogs",
  "Libros blancos",
  "Texto para ventas",
  "Texto para redes sociales",
  "Redacción de pódcast",
  "Contenido de pódcast",
  "Notas del programa de pódcast",
  "Texto del anuncio",
  "Cartas de presentación",
  "Comunicados de prensa",
  "Estudio de casos",
  "Perfiles de LinkedIn",
  "Descripciones de puestos de trabajo",
  "Escritura creativa",
  "Escritura de juegos",
  "Poesía",
  "Letras de canciones",
  "Cartas",
  "Lector beta",
  "Redacción de guiones",
  "Otra redacción de guiones",
  "Consulta",
  "Seminarios web",
  "Llamadas en frío",
  "Anuncios de audio",
  "Cobertura de guiones",
  "Guiones de cine y TV",
  "Guiones de conversación de chatbots",
  "Guiones de video",
  "Nombres comerciales y eslóganes",
  "Desarrollo de contenido de eLearning",
  "Redacción de discursos",
  "Discursos motivacionales",
  "Discursos académicos",
  "Discursos políticos",
  "Discursos de negocios",
  "Discursos de eventos",
  "Subvenciones",
  "Investigación de subvenciones",
  "Propuestas de subvenciones",
  "Transcripción",
  "Investigación y resúmenes",
  "Otros",
  "Consejos de redacción",
  "Tutoría de redacción",
  "Clases de redacción",
  "Video y animación",
  "Explicaciones animadas",
  "Explicaciones animadas en 2D",
  "Explicaciones animadas en 3D",
  "Explicaciones isométricas",
  "Animación en whiteboard",
  "Edición de video",
  "Anuncios y comerciales en video",
  "GIF animados",
  "Animación de logos",
  "Videos de intros y outros",
  "Animación de personajes",
  "Animación de productos en 3D",
  "Videos en redes sociales",
  "Videos musicales",
  "Videos de letras",
  "Visualización de música",
  "Videos de baile",
  "Videos basados en narrativa",
  "Videos de representación",
  "Videos conceptuales",
  "Videos musicales de animé",
  "Spotify lienzo",
  "Animación de NFT",
  "Animación para niños",
  "Videoarte",
  "Videoarte experimental",
  "Videoarte con IA",
  "Animación de imagen",
  "Instalaciones de video",
  "animación de texto",
  "Animación para Streamers",
  "Explicaciones con imágenes reales",
  "Producción cinematográfica",
  "Camarógrafos",
  "Videos de productos para e-commerce",
  "Videos de presentadores",
  "Subtítulos y leyendas",
  "Subtítulos",
  "Subtítulos en redes sociales",
  "Efectos visuales",
  "Rotoscopia y chroma key",
  "Escala de colores",
  "Match moving",
  "Composición",
  "Limpiezas",
  "Retoque de belleza",
  "Lottie y Animación web",
  "Producción de video de eLearning",
  "De artículo a video",
  "Videos UGC",
  "Tutoriales y videos de demostración de productos",
  "Videos de desembalaje de productos",
  "Videos de viajes y destinos",
  "Screencasting",
  "Montaje",
  "Montaje 3D",
  "Montaje 2D",
  "Avatares de streaming",
  "Videos corporativos",
  "Videos de crowdfunding",
  "Videos de diapositivas",
  "Edición de plantillas de video",
  "Vistas previas de aplicaciones y sitios web",
  "Tráileres para libros",
  "Videos de meditación",
  "Promociones inmobiliarias",
  "Tráileres para videojuegos",
  "Consejos para video",
  "Revisión y consulta por video",
  "Tutoría por video",
  "Lecciones por video",
  "Voice over",
  "Mezcla y masterización",
  "Mezcla",
  "Masterización",
  "Productores y compositores",
  "Composición y bandas sonoras",
  "Producción fantasma",
  "Pistas de acompañamiento",
  "Cantantes y vocalistas",
  "Cantantes masculinos",
  "Cantantes femeninas",
  "Cantantes de género neutro",
  "Cantantes de coro y gospel",
  "Músicos de sesión",
  "Compositores de canciones",
  "Producción de pódcast",
  "Creación de ritmos",
  "Ritmos",
  "Loops y kits",
  "Diseño de sonido",
  "Efectos de sonido",
  "Foley",
  "Producción de audiolibros",
  "Clases de música en línea",
  "Instrumentos",
  "Producción",
  "Voz",
  "Teoría",
  "Edición de audio",
  "Producción de anuncios de audio",
  "Transcripción de música",
  "Afinación vocal",
  "DJ Drops y etiquetas",
  "DJ Drops",
  "Etiquetas del productor",
  "Mezcla de DJ",
  "Remix y mashups",
  "Remix",
  "Mashups",
  "Presets de sintetizador",
  "Música de meditación",
  "Jingles e introducciones",
  "Jingles",
  "Intros y outros",
  "Audio Logo y Sonic Branding",
  "Consejos de música y audio",
  "Tutoría de música y audio",
  "Reseña y comentarios de la música",
  "Síntesis de voz e IA",
  "Texto a voz",
  "Voces de IA personalizadas",
  "Reconocimiento de voz",
  "Negocios",
  "Gestión de ERP",
  "Gestión de CRM",
  "Ventas",
  "Estrategia y planificación",
  "Generación de leads",
  "Calificación de clientes potenciales",
  "Desarrollo de negocios",
  "Asistente virtual",
  "Centro de atención telefónica y llamadas",
  "Rastreo de salto",
  "Conversión de archivos",
  "Administración",
  "Estudio de mercado",
  "Paquete completo: calidad y cantidad",
  "Entrevistas y grupos de sondeo",
  "Investigación de nombres de dominio",
  "Investigación general online",
  "Consulta",
  "Encuestas",
  "Planes de negocios",
  "Planes de negocios para startups",
  "Planes de negocios para aprobación de préstamos",
  "Planes de negocios para organizaciones sin ánimo de lucro",
  "Planes de negocios para inmigración",
  "Planes de negocios para asociaciones",
  "Atención al cliente",
  "Planificación y organización",
  "Consultoría",
  "Éxito del cliente",
  "Gestión de proyectos",
  "Gestión de software",
  "Proyectos gráficos y de diseño",
  "Proyectos de marketing digital",
  "Proyectos de redacción y traducción",
  "Proyectos de video y animación",
  "Proyectos de música y audio",
  "Proyectos de programación y tecnología",
  "Servicios generales de proyectos",
  "Consultoría en RR. HH.",
  "Desarrollo organizativo",
  "Adquisición de talentos y reclutamiento de personal",
  "Gestión del desempeño",
  "Desarrollo y capacitación de empleados",
  "Compensación y beneficios",
  "Sistemas de información para recursos humanos",
  "Gestión de comercio electrónico",
  "Consulta",
  "Carga de productos",
  "Gestión de tiendas de E-commerce",
  "Investigación de productos",
  "Gestión de producto",
  "Investigación y conocimientos del usuario",
  "Estrategia de producto y hoja de ruta",
  "Prioridad y ejecución de productos",
  "Consulta sobre productos",
  "Gestión de eventos",
  "Consultoría jurídica",
  "Registro de negocios",
  "Investigación legal",
  "Contratos y documentos legales",
  "Asesoría legal general",
  "Arbitraje y mediación",
  "Solicitudes y registros",
  "Litigios judiciales",
  "Asesoría financiera",
  "Análisis, valoración y optimización",
  "Contabilidad y teneduría de libros",
  "Consultoría fiscal",
  "Finanzas personales y gestión patrimonial",
  "Modelado y pronóstico financiero",
  "Cursos en línea de Operaciones bursátiles",
  "Consultoría de negocios",
  "Consulta de transformación digital",
  "Asesoramiento sobre sostenibilidad e impacto social",
  "Consultoría para empresas emergentes",
  "Gestión de la cadena de suministro",
  "Logística",
  "Adquisición y gestión de proveedores",
  "Presentaciones",
  "Presentaciones resumidas",
  "Presentaciones de cursos",
  "Presentaciones de negocios",
  "Diseño del concepto del juego",
  "Verificación de datos",
  "Tutoría de matemáticas",
  "Tutoría de ciencia",
  "Tutoría de ciencias sociales",
  "Tutoría de negocios",
  "Tutoría de ingeniería",
  "Otras materias",
  "Clases de idiomas",
  "Coaching de vida",
  "Crecimiento personal",
  "Responsabilidad y gestión del tiempo",
  "Asesoramiento para parejas",
  "Orientación profesional",
  "Preparación para la entrevista",
  "Buscar y aplicar",
  "Consultoría en carreras",
  "Desarrollo del liderazgo",
  "Videojuegos",
  "Pruebas de videojuegos",
  "Grabación de jugabilidad",
  "Creación dentro del juego",
  "Otros servicios de gaming",
  "Coaching de juegos",
  "Sesiones de juegos",
  "Clases de IA generativa",
  "Manualidades",
  "Digitalización del bordado",
  "Astrología y poderes psíquicos",
  "Lecturas",
  "Amor y relaciones",
  "Análisis de sueños",
  "reiki",
  "selección de hechizos",
  "feng shui",
  "Modelaje y actuación",
  "Fitness",
  "Clases de fitness",
  "Planes de entrenamiento",
  "Clases de baile",
  "Nutrición",
  "Creación de recetas",
  "Planes de alimentación",
  "Capacitación nutricional",
  "Bienestar",
  "Meditación guiada",
  "Coaching de mindfulness",
  "Viajes",
  "Asesores locales",
  "Servicios de envío",
  "Planes de viaje",
  "Creación de videojuegos y rompecabezas",
  "Estilismo y belleza",
  "Estilistas de moda",
  "Peinados y Maquillaje",
  "Consejos para el cuidado de la piel",
  "Previsión de tendencias",
  "Formulación cosmética",
  "Familia y genealogía",
  "Tarjetas y videos de saludo",
  "Piezas de colección",
  "Desarrollo de sitios web",
  "WordPress",
  "Shopify",
  "Wix",
  "Squarespace",
  "Webflow",
  "GoDaddy",
  "WooCommerce",
  "clickfunnels",
  "Sitios web personalizados",
  "Magento",
  "SiteBuilder",
  "Thinkific",
  "Drupal",
  "Joomla",
  "Blogger",
  "Otros constructores",
  "OpenCart",
  "Bigcommerce",
  "Prestashop",
  "Shopware",
  "Big Cartel",
  "OsCommerce",
  "Weebly",
  "Simvoly",
  "Ionos",
  "Tilda",
  "Jimdo",
  "Strikingly",
  "Site123",
  "Mantenimiento del sitio web",
  "Personalización",
  "Corrección de errores",
  "Copia de seguridad y migración",
  "Alojamiento",
  "Instalación de temas/plugins",
  "Ayuda/Consulta",
  "Instalación",
  "Optimización de velocidad",
  "Seguridad",
  "Analítica",
  "Desarrollo de videojuegos",
  "Consulta",
  "Copia de seguridad y migración",
  "Personalización",
  "Creación de prototipos",
  "Mods de videojuegos",
  "Creación completa de videojuegos",
  "Corrección de errores",
  "Desarrollo para Streamers",
  "Complementos y personalización",
  "Configuración e instalación",
  "Desarrollo de software",
  "Aplicación web",
  "Aplicaciones de escritorio",
  "API e integraciones",
  "Corrección de errores",
  "Extensiones de navegador",
  "Plantilla de correo electrónico",
  "Convertir PSD",
  "Escritura de scripts",
  "Ayuda/Consulta",
  "Desarrollo de plugins",
  "Mantenimiento de aplicaciones móviles",
  "Personalización de aplicaciones móviles",
  "Corrección de errores de aplicaciones móviles",
  "Consulta de aplicaciones móviles",
  "Gestión de tienda móvil",
  "Desarrollo de aplicaciones móviles",
  "Desarrollo multiplataforma",
  "Sitio web a aplicación",
  "Desarrollo de aplicaciones para Android",
  "Desarrollo de aplicaciones IOS",
  "Desarrollo de IA",
  "Aplicaciones de IA",
  "Agentes de IA",
  "Integraciones de IA",
  "Blockchain y criptomonedas",
  "Soporte técnico",
  "Aplicaciones descentralizadas (dApps)",
  "Plataformas de intercambio",
  "Monedas y tokens",
  "Desarrollo de billetera electrónica",
  "Desarrollo de NFT",
  "Contratos inteligentes",
  "Generadores de NFT",
  "Plataforma de NFT",
  "Sitios web de NFT",
  "Ingeniería electrónica",
  "Sistemas integrados e IoT",
  "Placas de circuito impreso (PCB)",
  "DevOps y nube",
  "DevOps y Consulta sobre la nube",
  "Infra como código",
  "CI/CD",
  "Red y seguridad en la nube",
  "Gestión de la nube",
  "Ciberseguridad",
  "Consulta",
  "Servicios de cumplimiento",
  "Prueba de evaluación y penetración",
  "Gestión de ciberseguridad",
  "Soporte y TI",
  "Soporte técnico",
  "Administración del servidor",
  "Gestión de correo electrónico",
  "Voz sobre IP y telefonía",
  "Instalación de software",
  "Clases online de codificación",
  "Desarrollo de chatbots",
  "Conversión de archivos",
  "Convertir en un formulario interactivo",
  "Convertir a libro electrónico",
  "Convertir en un archivo editable",
  "Convertir en otro archivo",
  "Pruebas de usuario",
  "QA y revisión",
  "Revisión del diseño",
  "Revisión de código",
  "Pruebas de software",
  "Desarrollo de bots de trading",
  "Datos",
  "Administración y protección de datos",
  "Data scraping",
  "Anotación de datos",
  "Formato y limpieza de datos",
  "Bases de datos",
  "Consulta",
  "Administración de base de datos (DBA)",
  "Consultas SQL y NoSQL",
  "Diseño y optimización",
  "Desarrollo de base de datos",
  "Migración y rendimiento de la base de datos",
  "Procesamiento de datos",
  "Consulta",
  "Automatizaciones",
  "Fórmulas y macros",
  "Ingeniería de datos",
  "Análisis de datos",
  "Consulta",
  "Planificación y cadena de suministro",
  "Negocios y finanzas",
  "Encuestas e investigación",
  "Producto y UX",
  "Marketing y ventas",
  "Visualización de Datos",
  "Consulta",
  "Informes",
  "Sistemas de información geográfica (GIS)",
  "Panel de datos",
  "Gráficos y tablas",
  "Ciencia de datos y aprendizaje automático",
  "Aprendizaje automático",
  "Deep learning",
  "Visión Artificial",
  "Procesamiento de lenguaje natural",
  "Modelos generativos",
  "Análisis de series de tiempo",
  "Consulta de ciencia de Datos",
  "Entrada de datos",
  "Investigación web",
  "Copiar y pegar",
  "Digitación de datos",
  "Marketing para medios sociales",
  "Configuración de perfil e integración",
  "Contenido social",
  "Gestión de medios sociales",
  "Análisis y seguimiento",
  "Redes sociales pagas",
  "Estrategias de medio sociales",
  "Promoción en redes sociales",
  "Publicación de invitados",
  "Posicionamiento web (SEO)",
  "Investigación de palabras clave",
  "SEO on-page",
  "Búsqueda por Voz para SEO",
  "SEO técnico",
  "SEO fuera del sitio",
  "Paquete completo de SEO",
  "Análisis de la competencia",
  "Relaciones públicas",
  "Consulta",
  "Eventos, conferencias y premios",
  "Presentación de comunicados de prensa",
  "Estrategia y planificación",
  "Marketing de libros y libros electrónicos",
  "Marketing de pódcast",
  "Promoción de pódcast",
  "Publicidades con pódcast",
  "Video marketing",
  "Gestión de canales de YouTube",
  "Investigación de público",
  "SEO de video",
  "Promoción y distribución de video",
  "Email marketing",
  "Gestión de campaña",
  "Automatizaciones de correo electrónico",
  "Soporte de plataforma de correo electrónico",
  "Desarrollo de audiencia",
  "Correos electrónicos en frío",
  "SMS Marketing",
  "Crowdfunding",
  "Marketing de campaña",
  "Creación de campaña",
  "Marketing de motores de búsqueda (SEM)",
  "Configuración y consulta de estrategia",
  "Gestión de marketing en motores de búsqueda",
  "Anuncios de compras",
  "Revisión de anuncios y optimización",
  "Publicidad display",
  "Configuración y gestión de campañas",
  "Revisión de anuncios y optimización",
  "Refocalización",
  "Publicidad nativa",
  "Publicidad en audio",
  "Tráfico web",
  "Web analytics",
  "Configuración",
  "Seguimiento e informes",
  "Optimización",
  "Corrección de errores",
  "Asesoramiento de marketing",
  "Tutoría de marketing",
  "Clases de marketing",
  "Marketing de influencia",
  "Estrategia e investigación",
  "Difusión y promoción",
  "Gestión de influencers",
  "Colaboraciones a largo plazo",
  "Estrategia de marketing",
  "Consultoría de marketing",
  "Cliente ideal",
  "Planes de marketing",
  "Community management",
  "Planificación, estrategia y configuración",
  "Selección y contratación",
  "Crecimiento, asociaciones y monetización",
  "Gestión y participación",
  "Listening de redes sociales",
  "Marketing de eventos",
  "SEO local",
  "Google My Business (perfil empresarial de Google)",
  "Notificaciones locales y directorios",
  "Marketing para e-commerce",
  "Anuncios promocionados",
  "SEO para comercio electrónico",
  "Promoción de sitio web",
  "Comercio en redes sociales",
  "Marketing de afiliados",
  "Reclutamiento de afiliados",
  "Embudos de marketing",
  "Promoción de enlaces",
  "Estrategia y configuración del programa",
  "Marketing de aplicaciones móviles",
  "Optimización de tienda de aplicaciones",
  "Promoción de aplicaciones",
  "Promoción musical",
  "Promoción orgánica",
  "Publicidad pagada",
  "Servicios de streaming musical",
  "Listas de reproducción y colocaciones",
  "Fotografía",
  "Fotógrafos de productos",
  "Fotógrafos de retratos",
  "Fotógrafos de estilo de vida y de moda",
  "Fotógrafos de propiedades",
  "Fotógrafos de eventos",
  "Fotógrafos de alimentos",
  "Fotógrafos escénicos",
  "Creación de ajustes preestablecidos de fotografía",
  "Consejos de fotografía",
  "Clases de fotografía",
  "Mentores de fotografía",
];
