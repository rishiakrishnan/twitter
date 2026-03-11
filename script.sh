#!/bin/bash

docker compose down

docker system prune -a -f

docker compose up -d

docker exec -i twitter_db mysql -utwitter -ptwitter twitter < twitter.sql

docker exec -it twitter_db mysql -utwitter -ptwitter twitter -e "SHOW TABLES;"
