<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## librerias adicionales

se instalo barra de depuracion mas info: https://github.com/barryvdh/laravel-debugbar
se instal laravel collective ayuda a simplificar la sintaxis del html muy util info:https://laravelcollective.com/docs/6.0/html

se creo una entidad persona , vista admin/personas, y fakers para poder cargar una bd.

descargar el proyecto del git.
configurar el archivo .env con la configuracion de la bd local ---> parecida a esa DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=db_facturacion
DB_USERNAME=root
DB_PASSWORD=root

cree una base de datos con las siguientes caracteristicas, se puede crear como guste ---> 
CREATE DATABASE IF NOT EXISTS db_facturacion char set 'utf8' collate 'utf8_general_ci' ;

ingresar a la carpeta del proyecto y ejecutar php artisan migrate, para q cree las migracionoes de esta forma te das cuenta si se conecta a tu bd.

luego php artisan migrate:refresh --seed para rellenar con datos la bd.

ahi te das cuenta q tu entorno esta bien configurado para cuendo toq iniciar el proyecto.
