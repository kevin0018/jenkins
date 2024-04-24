#!/bin/bash

# Preguntar al usuario si es la primera vez que ejecuta el proyecto
read -p "¿Es la primera vez que ejecuta el proyecto? (s/n): " respuesta

# Verificar la respuesta del usuario
if [ "$respuesta" == "s" ]; then
    # Instalar SAIL
    echo "Instalando SAIL..."
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v ./:/var/www/html \
        -w /var/www/html \
        laravelsail/php81-composer:latest \
        composer install --ignore-platform-reqs

    # Ejecutar SAIL
    echo "Iniciando SAIL..."
    ./vendor/bin/sail up -d

    # Instalar todos los assets y componentes
    echo "Instalando assets y componentes..."
    ./vendor/bin/sail composer install
    ./vendor/bin/sail npm install
    ./vendor/bin/sail php artisan migrate:fresh
    ./vendor/bin/sail php artisan db:seed --class=PeliculasTableSeeder
    ./vendor/bin/sail php artisan db:seed --class=AdminUserSeeder
    ./vendor/bin/sail php artisan db:seed --class=UserSeeder
    ./vendor/bin/sail php artisan db:seed --class=SeriesTableSeeder
    ./vendor/bin/sail php artisan storage:link
    ./vendor/bin/sail npm run dev
else
    # Preguntar al usuario si quiere actualizar los datos
    read -p "¿Le gustaría actualizar los datos? (s/n): " actualizar

    # Verificar la respuesta del usuario
    if [ "$actualizar" == "s" ]; then
        # Actualizar los datos
        echo "Actualizando datos..."
        ./vendor/bin/sail php artisan migrate:fresh
        ./vendor/bin/sail php artisan db:seed --class=PeliculasTableSeeder
        ./vendor/bin/sail php artisan db:seed --class=AdminUserSeeder
        ./vendor/bin/sail php artisan db:seed --class=UserSeeder
        ./vendor/bin/sail php artisan db:seed --class=SeriesTableSeeder
        ./vendor/bin/sail php artisan storage:link
        ./vendor/bin/sail npm run dev
    else
        echo "No se actualizarán los datos."
    fi
fi
