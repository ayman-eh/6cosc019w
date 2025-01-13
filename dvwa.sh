#! /usr/bin/bash

null="> /dev/null 2>&1"
r="\033[1;31m"
b="\033[1;34m"
w="\033[0m"

docker exec -it dvwa /bin/bash
docker cp /home/Desktop/6cosc019w/dvwa/config.inc.php dvwa:/var/www/html/config/config.inc.php
Successfully copied 3.58kB to dvwa:/var/www/html/config/config.inc.php
exit
