Tech test

This project was built using Laravel Sail so will require Docker desktop in order to be tested.

Steps in order to start up the project:

Step 1 - clone the repository 

step 2 - after cloning the repository, configure the environment by "cp .env.example .env"

step 3 update the .env file with the following:
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

step 4 - after starting Docker desktop you will need to set up Laravel sail this is done with "./vendor/bin/sail up -d"

step 5 - run the database migations "./vendor/bin/sail artisan migrate"

step 6 - install node dependencies and compile the assets with 
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev

the application should now be available at - http://localhost


