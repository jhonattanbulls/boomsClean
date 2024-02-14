BoomsClean: Tu aliado para una limpieza impecable
BoomsClean es un proyecto de software libre que te ayuda a gestionar tu negocio de limpieza de forma eficiente. 

¿Quieres empezar a usar BoomsClean?

1. Descargar el proyecto desde GitHub

Accede al repositorio de GitHub: https://github.com/jhonattanbulls/boomsClean.git
Haz clic en el botón "Clone or download".
Selecciona "Download ZIP".
Descomprime el archivo ZIP en una carpeta de tu computadora.

2. Configuración del archivo .env

Copia el archivo .env.example a .env y modifica las variables según tu configuración:

APP_URL: La URL de tu sitio web.
DB_CONNECTION: El tipo de base de datos (mysql, postgresql, etc.).
DB_HOST: La dirección de la base de datos.
DB_PORT: El puerto de la base de datos.
DB_DATABASE: El nombre de la base de datos.
DB_USERNAME: El usuario de la base de datos.
DB_PASSWORD: La contraseña de la base de datos.

3. Instalar las dependencias

Abre la terminal y navega a la carpeta del proyecto.
Ejecuta el siguiente comando: composer install

4. Ejecutar las migraciones y las semillas

Ejecuta las migraciones: php artisan migrate
Ejecuta las semillas: php artisan db:seed

5. Levantar el servidor

Inicia el servidor de desarrollo: php artisan serve
Accede a tu sitio web en http://localhost:8000
¡Ya estás listo para empezar a usar BoomsClean!
