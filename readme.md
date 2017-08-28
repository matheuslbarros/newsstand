# Newsstand application

## Instalation

### Download and setup the dependencies
* `composer install`
* `composer run post-root-package-install`
* `composer run post-create-project-cmd`
* `composer run post-update-cmd`

### Create a database, for example: *homestead*

### Configure the database in *.env*, example:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=
```

### Configure the stmp mail in *.env*, example:
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=59d66f3b5199d3
MAIL_PASSWORD=1893ed0d824947
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=admin@newsstand.com
MAIL_FROM_NAME=Newsstand
```

## Create the database schema
`php artisan migrate`

## Populate the database
`php artisan db:seed`

## Start the application on http://localhost:8000/
`php artisan serve`

## Run tests
`composer run tests`