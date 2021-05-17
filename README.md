# ORDEM

-   rota `routes/web.php`

```bash
php artisan route:list
```

-   controller `AlgoController`
-   action/metodo `index, show, create, etc...`
-   view `resources/views/algo/create.blade.php`

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

# - Listar rotas:

-   ctrl+r > cmd > cd C:\desenvolvimento\php\oi\

```bash
php artisan route:list
```

# CRUD

-   Create
-   Read
-   Update
-   Delete
