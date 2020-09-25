1. Выполнить миграции для появления Yii2 RBAC структуры в базе данных.
```
php yii migrate --migrationPath=@yii/rbac/migrations/
```
2. Выполнить миграции для изменения структуры базы данных.
```
php yii migrate --migrationPath=@vendor/rusbeldoor/yii2-general/console/migrations/
```
