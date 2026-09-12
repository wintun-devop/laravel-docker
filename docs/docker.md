###
```
docker network create my-net
```
```
docker compose -f docker-dev/docker-compose.yaml build
```
```
docker compose -f docker-dev/docker-compose.yaml up -d
```
```
docker compose -f docker-dev/docker-compose.yaml exec api composer --version
```
```
docker compose -f docker-dev/docker-compose.yaml exec api composer install
```