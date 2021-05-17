
# - Inicia servidor back

```bash
php artisan serve
```

# - cria model, controller, migrations, factories and seeds

```bash
php artisan make:model Product -a
```

```bash
ir pro migrations e criar os campos que vão ser persistidos no banco
```

# - Executa a migração e persiste os dados no banco

```bash
    php artisan migrate
```

# - Desfaz a ultima

```bash
php artisan migrate:rollback
```

# - roda as migrações do início (apaga tudo - não usar em produção)
```bash 
php artisan migrate:fresh
```

# - cria uma custom request 
```bash
php artisan make:request NomeDaModelRequest
-lembrar de colocar o authorize como true
```


# - Ordem que tenho que criar:

```bash
-routes (no web (se for web que to fazendo) ou no api (se for api que eu to fazendo)) (lembrar de importar a classe)
-controller (ver as já existentes como exemplo e.g. ProductController) (fazer um por vez e ir settando as coisas na view)
-model (ta dentro do app - models)
-view (o bagulho do blade.php é view- criar create, edit, index e show e copiar dos já existentes (resources-view))

```

# - Listar rotas:

-   ctrl+r > cmd > cd C:\desenvolvimento\php\oi\

```bash
php artisan route:list
```
# ORDEM

-   rota `routes/web.php`

```bash
php artisan route:list
```

-   controller `AlgoController`
-   action/metodo `index, show, create, etc...`
-   view `resources/views/algo/create.blade.php`


# CRUD

-   Create
-   Read
-   Update
-   Delete
