## Laravel Blog

Small and simple Laravel blog test using Tailwind CSS.

## How to run it
- Clone project
- Install dependencies from composer.json and package.json
```
composer install
npm install && npm run dev
```
- Create a new database and config your .env file (line 11 for reference)
```
DB_CONNECTION=<your_db_connection>
DB_HOST=<your_host>
DB_PORT=<your_port>
DB_DATABASE=<your_database_name>
DB_USERNAME=<your_username>
DB_PASSWORD=<your_password>
```
- Run migrations to set your db tables structure and seed it with pre-built factories
```
php artisan migrate --seed
```
- Serve it
```
php artisan serve
```

- If you have any 500 Server error, try CTRL+C and then
```
php artisan optimize
php artisan serve
```

## Laravel License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
