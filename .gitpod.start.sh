while !(mysqladmin ping --silent); do
    sleep 1
done
php artisan migrate && php artisan serve
