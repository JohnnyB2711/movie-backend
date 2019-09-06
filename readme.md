# Запуск проекта

1. Установить Docker
2. Перейти в `laradock-movie`
3. `cp env-example .env`
4. `./up.sh`
5. `./workspace.sh`, затем `bash`
6. `composer install`
7. `cp .env.example .env`
8. `php artisan key:generate`
9. `php artisan migrate`

Сайт будет доступен на `http://localhost`, adminer на `http://localhost:8080`

