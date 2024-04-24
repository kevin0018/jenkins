# M07_UF4 by Kevin Hernández & Jonathan Villamar

## Comandos: 

- Usuarios:
````
user@jenkins.com:user 
admin@jenkins.com:admin
````

- Ejecutar el script o poner los comandos manualmente

````
chmod 755 setup.sh
./setup.sh
````

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
./vendor/bin/sail php artisan migrate:fresh   
./vendor/bin/sail php artisan db:seed --class=MediaSeeder
./vendor/bin/sail php artisan db:seed --class=AdminUserSeeder
./vendor/bin/sail php artisan db:seed --class=UserSeeder
./vendor/bin/sail php artisan db:seed --class=SeriesTableSeeder
./vendor/bin/sail php artisan storage:link
````



