# Jenkins

Proyecto realizado por **Kevin Hernández** y **Jonathan Villamar** para la asignatura de Desarrollo Web en Entorno
Servidor.

Esta aplicación web está inspirada en la plataforma de streaming **Netflix**. Permite a los usuarios explorar una
cartelera de películas y series, seleccionar títulos y ver tanto capítulos como películas. Además, cuenta con
un modo administrador donde es posible añadir, editar o eliminar películas y series, facilitando la gestión de los
contenidos disponibles.

---

## Tecnologías utilizadas

- **Laravel 10** + Vite
- **Docker** & Laravel Sail
- **Bootstrap 5** y CSS personalizado
- **MySQL**
- **PHP 8.1**

---

## Usuarios de prueba

```
user@jenkins.com : user
admin@jenkins.com : admin
```

---

## Puesta en marcha

### 1. Clona el repositorio y accede a la carpeta del proyecto

```bash
git clone https://github.com/kevin0018/jenkins.git
cd tu-repo-laravel
```

### 2. Ejecuta el script de instalación

Puedes usar el script para automatizar la instalación y puesta en marcha, o bien ejecutar los comandos manualmente.

#### Opción A: Usando el script

```bash
chmod 755 setup.sh
./setup.sh
```

El script te preguntará si es la primera vez que ejecutas el proyecto.

- Si respondes **s**, instalará todas las dependencias, levantará los contenedores y ejecutará las migraciones y
  seeders.
- Si respondes **n**, te preguntará si quieres actualizar los datos (migraciones y seeders).

#### Opción B: Manualmente

1. Instala las dependencias con Sail:

    ```bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v ./:/var/www/html \
        -w /var/www/html \
        laravelsail/php81-composer:latest \
        composer install --ignore-platform-reqs
    ```

2. Levanta los contenedores:

    ```bash
    ./vendor/bin/sail up -d
    ```

3. Instala dependencias y prepara el entorno:

    ```bash
    ./vendor/bin/sail composer install
    ./vendor/bin/sail npm install
    ./vendor/bin/sail npm run dev
    ./vendor/bin/sail php artisan migrate:fresh
    ./vendor/bin/sail php artisan db:seed --class=MediaSeeder
    ./vendor/bin/sail php artisan db:seed --class=AdminUserSeeder
    ./vendor/bin/sail php artisan db:seed --class=UserSeeder
    ./vendor/bin/sail php artisan db:seed --class=SeriesTableSeeder
    ./vendor/bin/sail php artisan storage:link
    ```

---

## Estructura del script `setup.sh` (explicación)

El script automatiza los pasos mencionados arriba.

- Si es la primera vez, instala todo y prepara el entorno.
- Si no es la primera vez, permite actualizar los datos (migraciones y seeders).
- Utiliza comandos de Docker, Composer, NPM y Artisan para dejar el entorno listo para desarrollo o pruebas.

---

## Notas

- El proyecto está preparado para funcionar con Docker (Laravel Sail), por lo que no necesitas instalar PHP, MySQL, etc.
  de forma local.
- Si tienes problemas con puertos ocupados, asegúrate de que no haya otros servicios usando los puertos por defecto de
  MySQL (3306) o Laravel Sail.
- Para acceder a la aplicación, abre tu navegador en [http://localhost](http://localhost) después de ejecutar los pasos
  anteriores.

---

## Créditos

Desarrollado por **Kevin Hernández** y **Jonathan Villamar**.
