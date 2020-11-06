# Polling Personnel Management System

#### Online platform polling personnel management



## Using Docker for Running this application

* **Change Directory and Copy the `docker/.env.example` to `docker/.env`**

    `cd docker`

    `cp .env.example .env`

## Setup

Update `.env` under project root directory and tailor for your app, specifically any database settings to match the values in `docker/.env` (optional if using docker).

* **Start Docker:**
    `docker-compose up -d`

* **Install Dependencies using composer**

    `docker-compose exec php composer install -vvv`

## Database

* **Create Database Structure**

    `docker-compose exec php php artisan migrate:fresh --seed`
    
    * phpMyAdmin UI: [http://pma.ppms.docker.localhost/](http://pma.ppms.docker.localhost/)

* **Export Database from Docker**

    `docker-compose exec mariadb sh -c 'exec mysqldump -uroot -p"password" ppms' > ../mariadb-init/ppms.sql`

* Open URL [http://ppms.docker.localhost/login](http://ppms.docker.localhost/login) and login using the following
    > **User:** `deo` **Password:** `paSSw0rd`


* Built-in-Email Server [http://mailhog.ppms.docker.localhost/](http://mailhog.ppms.docker.localhost/)

## Docker Shutdown and Cleanup

* **Stop Docker:**
    `docker-compose down -v`