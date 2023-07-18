# Pimcore 11 Tutorial

## Setup

run the following commands at first clone:

```bash
docker compose up -d
docker compose exec php composer install
docker compose exec db mysql -upimcore -ppimcore pimcore < database.sql
docker compose exec php bin/console pimcore:deployment:classes-rebuild
docker compose exec php composer install
```