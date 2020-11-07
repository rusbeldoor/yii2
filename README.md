Данное развитие Yii2 Advance шаблона оптимизировано под быстрый старт нового проекта. В дальнейшем обновлять репозиторий не имеет смысла, т.к. предпологается, что Вы будите не только добалять новые, но и менять имеющиеся файлы, что может вызвать конфликты с уже внесенными изменениями.
1
# Установка и настройка

1. Выгрузите репозиторий.
```
git clone git@github.com:rusbeldoor/yii2.git
```

2. Зайдите в дерикторию с репозиторием.
```
cd yii2
```

3. Удалите файлы git.
```
rm -fR .git
```

4. Инициализируйте проект в одном из режимов (0 - development, 1 - production).
```
php init
```

5. Скопируйте конифгурационные common, backend, frontend, и console файлы из папок "mylocal-sample" в дериктории где эти папки находятся. Настройте скопированные конфигурационные файлы (как минимум укажите правльные доступык к базе данных).
```
cp -r common/config/mylocal-sample/* common/config
cp -r backend/config/mylocal-sample/* backend/config
cp -r frontend/config/mylocal-sample/* frontend/config
cp -r console/config/mylocal-sample/* console/config
```

6. Выполните установку или обновление зависимостей.
```
composer install
composer update
```

7. Выполнить миграции для изменения структуры базы данных.
```
php yii migrate --migrationPath=@vendor/rusbeldoor/yii2-general/console/migrations/
php yii migrate --migrationPath=@vendor/rusbeldoor/yii2-yandex-direct/console/migrations/
```

8. ...
```
```

9. Не обязательно (если Вам нужно и Вы понимаете как делать по другому). Переименуйте папку yii2 в yii2.local. Установите при обращении к адресу http://yii2.local папку yii2.local/frontend/web. Установите при обращении к адресу http://panel.yii2.local папку yii2.local/backend/web. 

# Ещё

Смотри описание репозитория https://github.com/rusbeldoor/yii2-general.
