## Cloning Instructions

- Clone project
- cd into folder
- install composer(if not already installed)
- install composer dependencies -- `composer install`
- install npm dependencies -- `npm install`
- copy example.env to .env and fill in appropriate details -- `cp .env.example .env`
- generate app encryption key -- `php artisan key:generate` 
- create empty database
- enter database information into .env 
- migrate data base -- `php artisan migrate`
- seed database -- `php artisan db:seed`
