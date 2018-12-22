Docker EPI
==================

## Install Docker

See doc: https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/

```bash
sudo usermod -aG docker ${USER}
sudo reboot
```

## Install containers for EPI

```bash
git clone https://github.com/bourdeau/docker-symfony4.git && cd docker-symfony4

vim .env
# Edit env variables to match  the project

docker-compose up -d
```

## Set up your Symfony4 application EPI

```bash
# The path you defined above in .env
cd $SYMFONY_PATH
vim .env
# Set DATABASE_URL with the env variable you defined above
```

You are done!

Visit: http://localhost:8080


## Connect to a container

```bash
docker exec -it <CONTAINER_NAME> bash

# Composer is intalled in the apache container so you can:
cd /var/www/app && composer install --prefer-dist


##delete all docker images
sudo docker rm $(docker ps -a -q)