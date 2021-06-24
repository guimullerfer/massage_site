Após clonar/baixar o repositório, no cmd: 
- composer install
- npm install
- cp .env.example .env (Linux) ou copy .env.example .env (Windows)
- php artisan key:generate

Abra o MySQL ou outro SGBD e crie a database: CREATE DATABASE <DB_DATABASE (presente no arquivo .env)>

Novamente no cmd:
- php artisan migrate
- php artisan serve
