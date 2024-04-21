<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Install new instance of Laravel

This tutorial was made on Laravel 9. It includes the module SAIL with all the tools needed to work (php, compose, npm, etc). To execute in your computer follow this rules:

- Donwload the current version of the project

- Install SAIL
````
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v ./:/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
````

- Run sail
````
./vendor/bin/sail up -d
````

- Install all the assets and components
````
./vendor/bin/sail composer install
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
````

- Open your site on [https://localhost](https://localhost) 


## Migration

The first time you run this project you need to migrate and seed all the database

````
./vendor/bin/sail php artisan make migration create_table_nomdelatabla   

./vendor/bin/sail php artisan migrate:fresh   
./vendor/bin/sail  php artisan db:seed --class=MediaSeeder
./vendor/bin/sail  php artisan db:seed --class=AdminUserSeeder
./vendor/bin/sail  php artisan db:seed --class=UserSeeder
./vendor/bin/sail  php artisan db:seed --class=MediaSeeder 


php artisan storage:link


````

## BDD

mysql -u sail -p tutorial
password :password
select * from media; VER PELICULAS  

## License

The Laravel Tutorial was made by Dan Triano




Listar series / pelis para editor -> Kevin
Filtro buscador -> Kevin
Abrir multimedia de series/peliculas -> Kevin
vistas series -> Jonathans
vistas peliculas -> favoritos informacion etc - Jonathan
Log in -> Kevin

subir cap, temporada, admin, no logeado no entrar en la pagina, buscador