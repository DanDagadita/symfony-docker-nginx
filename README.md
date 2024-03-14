# Symfony + Nginx + MySql

## Starting the containers

Run in the root of the project folder: `docker compose up -d`

## Creating entities

Note: The following command are run in the **php** container

To create a controller, run: `php bin/console make:controller`

To create an entity, run: `php bin/console make:entity`

- Then, to create a database migration, run: `php bin/console make:migration`

- Then, to execute it, run: `php bin/console doctrine:migrations:migrate`
