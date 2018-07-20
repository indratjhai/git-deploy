#!/bin/sh

docker-compose --file ./docker/docker-compose.yml up -d --build --force-recreate

chmod -R 0777 ./logs