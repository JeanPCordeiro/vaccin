while !(mysqladmin ping --silent); do
    sleep 1
done
mysql -u root -e "create database vaccin"
mysql -u root sigma < init_data.sql
cp .env.example .env
sed -i "s|APP_URL=|APP_URL=${GITPOD_WORKSPACE_URL}|g" .env
sed -i "s|APP_URL=https://|APP_URL=https://8000-|g" .env
composer install
npm i
php artisan key:generate
