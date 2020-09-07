# Тестовое задание

клонируем проект из репозитория

устанавливаем
```
composer install
```

настраиваем .env по примеру .env.example

```
php artisan key:generate
```

запускаем миграцию

```
php artisan migrate

или посредством баш файла

./up_migration.sh
```

запускаем сервер
```
php artisan serve --port=8001

или посредством баш файла

./run.sh
```
