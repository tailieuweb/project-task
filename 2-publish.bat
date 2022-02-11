php artisan vendor:publish --force
php artisan vendor:publish --provider="Foostart\Category\CategoryServiceProvider" --force
php artisan migrate
php artisan db:seed --class=PexcelSeeder
