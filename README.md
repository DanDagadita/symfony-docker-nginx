# Symfony + Nginx + MySQL Docker Boilerplate

This is a Symfony 6 boilerplate. It includes a MySQL database and an nginx server.

Recommended software: Docker Desktop, PhpStorm (used for code editing, but also for entering the Docker container)

## 1. Starting the containers

To launch, install Docker Desktop, and using a CLI (PowerShell is recommended, or PhpStorm's Terminal), enter the
command `docker-compose up -d` in the directory this project exists i.e.
`C:/Users/YOUR_NAME/Downloads/symfony-docker-nginx`.

## 2. Accessing the PHP container CLI

From the CLI, in the same directory you entered the `docker-compose up -d` command,
enter `docker ps` to get the container IDs, which will be random, and look for the ID of the symfony-docker-nginx-php
image (i.e. ID 1eb9a5a63542). Then, enter `docker exec -it CONTAINER_ID bash`, i.e. `docker exec -it 1eb9a5a63542 bash`.
The command you now enter will be executed on the container itself, so in Linux.

NOTE: This is if you don't use PhpStorm. If you do, use the Services tab and access the container's terminal from there.

## 3. Installing packages

Enter `composer install` in order to install the PHP dependencies of the project. They will be installed in the vendor
folder. (Package example: Symfony) Composer will install packages in the `composer.lock` file, and `composer update`
will update the existing packages in `composer.json` based on their version constraints.

## 4. The next steps

Use the MakerBundle to create Controllers, Entities, and other Symfony specific classes. (They are created in
src/Controller and src/Entity. You can configure and modify them however you see fit).
In order to create a Controller, run in the PHP container the following command: `php bin/console make:controller`.
In order to create an Entity, run in the PHP container the following command: `php bin/console make:entity`.
For more information, run `php bin/console list make` to see all available MakerBundle commands.

See more about controllers here: https://symfony.com/doc/6.4/controller.html.

After creating a controller, for instance HomeController, go to http://localhost/home.

## 5. Speeding up response times on Windows

On Windows, Symfony projects that use Docker are slow because of the var and vendor folders. The docker-compose file
excludes these folders from being synced with the container. It is recommended to un-comment these lines after running
docker-compose for the first time, for improved performance (in `compose.yml`). Example
difference in performance for a response: **120ms** with the lines un-commented vs **1750ms** with the lines commented.

## 6. Creating a database

Create an Entity using the MakerBundle.

Run `php bin/console make:migration`. Then, apply the migration: `php bin/console doctrine:migrations:migrate`.

More info here: https://symfony.com/doc/6.4/doctrine.html

## For more information, please read the following:

https://symfony.com/doc/6.4/index.html

https://docs.docker.com/get-started/overview/
