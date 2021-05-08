
# - Inicia servidor back
```bash 
php artisan serve 
``` 

# - cria model, controller, migrations, factories and seeds
```bash 
php artisan make:model Product -a
```

# - Executa a migração e persiste os dados no banco
```bash 
    php artisan migrate
```

# - Desfaz a ultima
```bash 
php artisan migrate:rollback
```
# - Ordem que tenho que criar:
```bash 
routes, controller, model, viewer
```
