#  minimal Symfony app working with league/oauth2-server-bundle:0.8 without a user provider.

## Setup
1) Run the stack ```docker compose up -d```.
2) ```docker exec -it server bash```
    * install dependencies ```composer install```
    * proceed Doctrine migration ```symfony console doctrine:migrations:migrate```
    * create test user ```php bin/console app:bootstrap```


App is running on http://localhost, USER=t@t.t pass=p (htdocs/src/Command/BootstrapCommand.php:34)

PhpMyAdmin on port http://localhost:8000 mariadb:root:root  , dbname jacq (docker-compose.yml:31)

## OAuth test
```cd OAuthTestClient && chmod +x ./composer.sh && ./composer.sh && php -S localhost:8080 app.php ``` -->  local test OAuth client on http://localhost:8080 (easier than dockerized to keep hosts simple).
