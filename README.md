1. Запустіть міграції для створення таблиць у базі даних:
php artisan migrate

php artisan db:seed --class=LocationSeeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=RetailerSeeder
php artisan db:seed --class=ScrapedDataSeeder
