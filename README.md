# Phone Number List

Laravel application filtering customers phone numbers per country code and validate this phone numbers
## Requirements

In order to run this project you just only have Docker and Docker-compose installed.

## Installation

Once you have cloned the project run:
> docker-compose up

> docker exec -it task_php bash -c "composer install"

> docker exec -it task_php bash -c "chmod -R 777 -R ./storage/."


You can access the customer phones view through:
> http://localhost:8000

## Unit-Test

To run the tests you can run:
> docker exec -it task_php bash -c "vendor/bin/phpunit"
