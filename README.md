## Tech test
This project was built using Laravel Sail and has the following dependancies:
- docker
- npm
- mysql (client)

Steps in order to start up the project:

### Clone the repository
```
git clone git@github.com:bbutler919/laravel-tech-test.git
```

### Configure the environment with
```
"cp .env.example .env"
```

### Update the .env:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

### Starting laravel sail
In the project root directory run
```
./vendor/bin/sail up -d
```

### Run database migrations
```
./vendor/bin/sail artisan migrate
```

### install node dependencies and run
```
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

The application should now be available at - http://localhost
You can view the mysql database with the supplied database connection details used in the .env using yur preferred mysql client

