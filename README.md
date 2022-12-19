
A project which manage Role, Permissions and every actions of your Laravel application. A complete solution for Role based Access Control in Laravel.

Username - superadmin
password - 12345678

> Note : Don't try to modify the Super Admin (Role & admin) data, just for Heroku deployment.

> Requirements:
- Laravel `7.x` | `9.7`
- Spatie role permission package  `3.1.3`




## Project Setup
Git clone -
```console
git clone https://github.com/ShowkatEasin/Role_Permission_Management.git
```



Install Project -

```console
composer install
```

Create database called - `laravel_role`

Create `.env` file by copying `.env.example` file (Ex : "cp .env.example .env")

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate --seed
```

Run Project -
```php
php artisan serve
```


> How it works
1. Login using Super Admin Credential -
    1. Username - `superadmin`
    1. Password - `12345678`
2. Create Admin
3. Create Role
4. Assign Permission to Roles
5. Assign Multiple Role to an admin
6. Check by login with the new credentials.
7. If you've not enough permission to do any task, you'll get a warning message.

