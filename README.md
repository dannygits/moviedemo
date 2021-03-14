Clone the repo and cd into it
composer install
Rename or copy .env.example file to .env
Set your TMDB_TOKEN in your .env file. You can get an API key here. Make sure to use the "API Read Access Token (v4 auth)" from the TMDb dashboard.
php artisan key:generate
php artisan serve or use Laravel Valet or Laravel Homestead
Visit localhost:8000 in your browser
