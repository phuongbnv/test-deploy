- Pull image from docker hub:
```sh
docker compose up -d
```

- Copy file .env.develop and name to `.env`. After that, check your server database status is running and check database information in `.env` file is correct.
   
- Install package composer using this project:
```sh
composer install
```
  
- Run migrate table to database:
```sh
php artisan migrate
```  

- After that, access browser with `http://localhost:9988` to perform operations with website. To access database, type`http://localhost:8081` into address bar browser, login with info: 
>server: db  
>user: root  
>pw: root

