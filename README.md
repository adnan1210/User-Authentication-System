<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## About Application

User management system application. In this application User can create their profile. But User can access their dashboard after activating their account by the Admin.

## Features

- User registration.
- User login.
- Admin loogin.
- Activation of registered users accounts.


## Admin Credentials

- **email : admin@example.com**
- **password : admin123**


## Application Setup Process

- Clone this project to your local server.
- Rename the .env.example file to .env file.
- Setup your Database name in .env file.
- Open command prompt. And go to your directory.
- Run **composer install**
- Run **php artisan key:generate**
- Run **php artisan migrate**
- Run **php artisan db:seed** [To insert Admin row]
- Run **php artisan serve**
- Run **npm run dev** [If needed to run the view file properly]


## Conclusion

This is just a User Authentication System with Admin approval.

If you have any suggesstion or any error please feel free to mail me : [adnanahsan.1210@gmail.com](mailto:adnanahsan.1210@gmail.com)
