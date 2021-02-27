# React-and-Laravel
Bunch of projects implementing React as front end, Laravel as back end.

# Open Laravel projects
- Open root folder of project into IDE
- in *.env.example* file, set *DB_USERNAME* to: root
- in *.env.example* file, set *DB_PASSWORD* to: 
- create schema/database on MySQL Workbench with same name as the value in *DB_DATABASE* from *.env.example* file 
- type command lines in terminal of IDE
```
  - cd evadus-social-master OR cd react-laravel-master (depending on the project)
  - copy .env.example .env
  - composer install
  - php artisan key:generate
  - php artisan migrate
  - php artisan serve 
```
- click on http://127.0.0.1:8000 to view the app
