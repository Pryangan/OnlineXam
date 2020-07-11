#!/bin/sh

sudo docker build ./sql database/ -t db
sudo docker run -it -d -p 3306:3306 --name mysql db

sudo docker build -t web
sudo docker run -it -d -p 3001:80 --link mysql:db web
