### Microservices

```bash
docker run --name microservice_admin -p 33600:3306 --tmpfs /var/lib/mysql:rw -e MYSQL_ROOT_PASSWORD=magynevy@11055 -e MYSQL_USER=admin -e MYSQL_PASSWORD=magynevy@11055 -e MYSQL_DATABASE=microservice_admin -d mariadb
```