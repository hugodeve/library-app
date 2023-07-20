# Projeto de Integração com Volk LMS

Este repositório contém o código-fonte para o desenvolvimento do serviço de integração com Volk LMS. A seguir estão os passos para instalação e configuração do projeto.

## Pré-requisitos
- PHP 7.4 ou superior
- Composer
- MySQL ou qualquer outro banco de dados compatível

## Instalação

1. Clonar o repositório:
    git clone https://github.com/seu-usuario/library-app.git

2. Acessar o diretório do projeto:
    bash
    Copy code
    cd library-app

3. Instalar as dependências com o Composer:
    bash
    Copy code
    composer install

4. Configuração do ambiente:

    a. Copiar o arquivo de configuração .env.example para .env:
    Copy code
    cp .env.example .env

    b. Gerar uma nova chave de aplicação:
    Copy code
    php artisan key:generate

    c. Configurar os detalhes do banco de dados no arquivo .env:
    Copy code
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=library_db
    DB_USERNAME=(usuario mysql)
    DB_PASSWORD=(senha mysql)
    
5. Executar as migrações do banco de dados:
    bash
    Copy code
    php artisan migrate
6. Executar os seeders para popular o banco de dados com dados de exemplo:
    bash
    Copy code
    php artisan db:seed
7. Iniciar o servidor de desenvolvimento:
    bash
    Copy code
    php artisan serve
    Agora você poderá acessar o projeto no navegador através da URL http://localhost:8000.

