
## About This Project

This project about microservice architecture example with 
docker,
rabbitmq,
swagger
and
laravel.

### DB Configuration

You should configure your .env file for database config.

    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    
## Installation 

You can initial project with these commands
in conuser1.test
and
producer.test

    docker-compose up -d --build
    COMPOSER_MEMORY_LIMIT=-1 composer update

and 

you should run these commands 
in consumer1.test/src
and
producer.test/src

    docker-compose exec php sh 
    php artisan migrate
    php artisan db:seed

 
you should run this command for queue system 
in producer.test/src
    
    php artisan queue:work


You should register this site
http://cloudamqp.com
for rabbitmq channel.

### RabbitMQ Configuration
You should pass to .env files and configure it.

    QUEUE_CONNECTION=rabbitmq

    RABBITMQ_HOST=yourhostname
    RABBITMQ_PORT=5672
    RABBITMQ_USER=yourusername
    RABBITMQ_PASSWORD=yourpassword
    RABBITMQ_VHOST=yourusername

### Links
consumer1.test 
http://localhost:8080/

producer.test 
http://localhost:8089/

### Open API Documention
You should run this command in contanier of producer.test.

    php artisan scribe:generate
    
you can see api documention.
http://localhost:8089/docs/#get-all-products

### Usage
(Producer.test)

You can send post it by Postman.
http://localhost:8089/api/products/
Header
    
    Accept application/json
    Content-Type application/json
Body(raw)
    
    {
        "title":"Product Name",
        "image":"Product image path"
    }

(Consumer1.test)

You can get products.
http://localhost:8080/api/products/
Header
    
    Accept application/json
    Content-Type application/json


![](http://recaicansiz.com/photos/swagger/1.png)
