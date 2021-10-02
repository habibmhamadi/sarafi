## Sarafi

A Laravel 8 management information system for local accounting business in context of Afghansitan.

## Installation

```
git clone https://github.com/habibmhamadi/sarafi

cd sarafi

copy .env.example .env

php artisan key:generate

composer install

npm install && npm run dev
```
Update `.env` with your database credentials.

```
php artisan migrate:fresh --seed

php artisan serv
```

## Admin Credentials

```
Email: admin@gmail.com
Password: 12341234
```

## Contribution

For contribution please submit a pull request or use [Issue tracker](https://github.com/habibmhamadi/sarafi/issues) to address issues.
