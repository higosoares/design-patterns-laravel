## Design Patterns laravel
A ideia aqui também é brincar com design-patterns mas já com o Laravel. Não fiz mais patterns e eles poderiam ficar mais completos mas fiz um básico por enquanto.

## Uso
Naquele padrão
````
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
````
## Rotas
Rotas do facade
- GET /facade/permission

Rotas do solid
- GET /solid/user
- GET /solid/user/create

Rotas do ddd
- GET /ddd/task
- GET /ddd/task

Observação:
No ddd, pro dto validar cada atributo por exemplo, dá pra usar o spatie/laravel-data via composer.
