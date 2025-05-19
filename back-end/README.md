# PetShop Dashboard - Backend

Este é o backend da aplicação PetShop Dashboard, desenvolvido com Laravel.

## 🚀 Começando

Siga os passos abaixo para configurar o projeto localmente.

### Pré-requisitos

- PHP 8.1 ou superior
- Composer
- MySQL

### Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/Matheus-Pessoa06/PetShop-Dashboard.git
   cd PetShop-Dashboard

2. Instale as dependências do Composer:
   composer install

3.   Configure o arquivo .env:
   cp .env.example .env

4. Gere a chave da aplicação:
   php artisan key:generate
   
5. Rode as migrations para criar as tabelas no banco:
   ```bash
   php artisan migrate

# Executando o projeto

Para rodar o servidor de desenvolvimento:

    php artisan serve

Por padrão, a aplicação vai rodar em http://localhost:8000.


   

