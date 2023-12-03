# Lara Tweet 💙🐦

Lara tweet is a simple and minamalistic twitter(now X) clone made with 

    - Laravel (Web Framework)
    - Sqlite3 (Database)
    - Blade (Php Templating Engine)

![image](https://github.com/Tadiwr/lara-tweet/assets/80280920/8a725d64-e81d-4492-8ca0-0498c1d4f549)


## To try it out locally on your computer
1. Clone the repository
2. Open the directory and make sure you have 
    - Php installeded
    - composer installed
    - laravel installed
3. Run the following commmand
   - ```
         npm run dev
     ```

     This runs vite in the background which compliles typescript files and offers hot module reloading
4. Now in a seperate terminal run the following commands 
     ```
         > composer install
     ```
     ```
         > php artisan migrate
     ```
     ```
         > php artisan serve
     ```

     - `composer install ` will install the dependencies required by laravel
     - `php artisan migrate` will run migrations for sqlite3 database
     - `php artisan serve` starts a developement sever and runs the application on localhost
