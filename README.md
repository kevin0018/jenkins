# M07_UF4 by Kevin Hernández & Jonathan Villamar

## Comandos: 

./vendor/bin/sail php artisan migrate:fresh   
./vendor/bin/sail  php artisan db:seed --class=MediaSeeder
./vendor/bin/sail  php artisan db:seed --class=AdminUserSeeder
./vendor/bin/sail  php artisan db:seed --class=UserSeeder

php artisan storage:link