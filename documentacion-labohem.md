# Explicación de la estructura:

1. app:	Es este directorio, encuentran los componentes relacionados con la lógica de la aplicación, como controladores, modelos y vistas.

2. config: Aquí se almacenan archivos de configuración, como la configuración de la base de datos, rutas y configuración general de la aplicación.

3. public: Contiene activos estáticos, como imágenes, hojas de estilo (CSS) y archivos JS que se sirven directamente al cliente.

4. templates: Puedes almacenar plantillas reutilizables aquí, como encabezados y pies de página que se incluyen en varias páginas.

5. vendor: Este directorio es donde puedes instalar dependencias de PHP utilizando Composer.

6. .htaccess (por realizar): Este archivo se utilizará para configurar reglas de reestritura de URL y otras configuraciones de servidor web específicas de Apache.

7. index.php: Es el punto de entrada de tu aplicación. Aquí configuras y ejecutas el enrutamiento y la lógica principal de la aplicación. 

8. README.md: Un archivo de documentación que proporciona información sobre tu proyecto.

9. .giignore: Un archivo que lista los archivos y directorios que deben ser ignorados por Git, como archivos de configuración específicos de tu entorno local o dependencias instaladas.


### uso de .htaccess
```.htaccess
Options All -Indexes		//Con esta linea denegamos el acceso a las carpetas del proyecto.
RewriteEngine on		// Con esta linea activamos el boton de las redirecciones. Nos servirá para configurar urls amigables
RewriteCond %{REQUEST_FILENAME} !-d // Validamos si un directorio con el metodo REQUEST es valido. 
RewriteCond %{REQUEST_FILENAME} !-f // Validamos si un archivo es valido.
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L] //Estamos haciendo ciertas configuraciones para almacenar en la variable url todo lo que venga despues del archivo "index.php"
```
