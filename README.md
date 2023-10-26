Docker 
==================

## Install Docker

See doc: https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/

```bash
sudo usermod -aG docker ${USER}
sudo reboot
```

## Install containers for PIC

```bash
git clone  the project pic-front-outremer 

vim .env
# Edit env variables to match  the project
docker-compose -f docker-compose up or
docker-compose up -d
```

## Set up the  application PIC with Symfony4

```bash
# The path you defined above in .env
cd $SYMFONY_PATH
vim .env
# Set DATABASE_URL with the env variable you defined above
```

You are done!

###### Visit: http://localhost:8080


##Connect to a container

```bash
docker exec -it <CONTAINER_NAME> bash

# Composer is intalled in the apache container so you can:
cd /var/www/app && composer install --prefer-dist

```
```bash
## Delete all docker container
sudo docker rm $(docker ps -a -q)
```

```bash
## Delete all docker images
sudo docker rmi $(docker  images -q)
```
