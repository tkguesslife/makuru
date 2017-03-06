#!/bin/bash
echo "Starting with reload"
echo "==========================================="

php app/console doctrine:database:drop --force
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load


echo "Done, Thank you for your patiance!!!"
