# FinanzasPersonalesApp
Aplicación web y móvil para finanzas personales.

Pasos para 'instalación'

1. Tener instalado php, composer, mysql.
2. Ejecutar el comando `composer install` en la carpeta app.
3. Ejecutar el comando `php artisan migrate` para ejecutar las migraciones (mysql debe estar corriendo)
4. Agregar `curl.cainfo= c:\path\to\cacert.pem` en nuestro archivo `php.ini`
5. Para correr un servidor de pruebas ejecutamos `php artisan serve --port 8001`
