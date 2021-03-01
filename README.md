# Executives Place - Technical Test

## Installation

- Clone Repo and set up the database (.env.example contains a default database). 
- Run composer install
- Copy .env.example file to .env and edit database credentials there
- Run php artisan migrate --seed

To use the Api to get the currency conversion enable the following line in the .env file

CURRENCYCONVERTER_DRIVER=api
