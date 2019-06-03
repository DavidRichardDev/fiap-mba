# fiap-mba

# Requisitos utilizados

 - PHP >= 7.1.3 (Utilizado 7.3.4)
 - Composer 1.8.4
 - Node 8.11.3
 - npm 5.6.0

# Ativação projeto local

Clone o projeto

Rode os comandos na raiz do projeto:

    composer install
    npm install
    cp .env.example .env
    php artisan key:generate
    npm run dev
    php artisan serve

    Acessar localhost:8000
