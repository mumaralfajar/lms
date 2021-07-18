|    Role       |        Email ID        |   Password    |
| ------------- | ---------------------  | ------------- |
|    Admin      | admin@admin.com        |    admin123   |
|    Instructor | instructor@lms.com     |    secret     |
|    Student    | student@lms.com        |    secret     |

## Installation
In the root folder, find the .env file and change the following values

```sh
APP_NAME=
APP_URL=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Through terminal or command prompt, update composer to install the dependencies:

```sh
composer update
```
Run the migration command to create the tables

```sh
php artisan migrate
```

Run the seeder to import mandatory values to the tables

```sh
php artisan db:seed
```
