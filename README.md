Данное развитие Yii2 Advance шаблона оптимизировано под быстрый старт нового проекта. В дальнейшем обновлять репозиторий не имеет смысла, т.к. предпологается, что Вы будите не только добалять новые, но и менять имеющиеся файлы, что может вызвать конфликты с уже внесенными изменениями.

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

4. Скопируйте конифгурационные common, backend, frontend, и console файлы из папок "mylocal-sample" в дериктории где эти папки находятся. Настройте скопированные конфигурационные файлы (как минимум укажите правльные доступык к базе данных).
```
cp -r common/config/mylocal-sample/* common/config
cp -r backend/config/mylocal-sample/* backend/config
cp -r frontend/config/mylocal-sample/* frontend/config
cp -r console/config/mylocal-sample/* console/config
```

5. Выполнить миграции для изменения структуры базы данных. Внимание! RBAC структура отличается от стандартной, поэтому если таблицы auth_assignment, auth_item, auth_item_child, auth_rule уже существуют, необходимо их удалить.
```
php yii migrate --migrationPath=@vendor/rusbeldoor/yii2-general/console/migrations/
```
