#!/bin/sh

docker-compose --file ./docker/docker-compose.yml up -d --build --force-recreate

chown -R www-data:www-data ./logs
chown -R www-data:www-data ./.ssh