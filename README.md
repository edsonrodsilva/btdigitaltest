
# BT-DIGITAL
**Back-End**

Criar uma *API RESTful*

Existem inúmeras formas de deixar seu aplicativo com uma estrutura pronta para evolução, com funcionalidade comum de acesso a dados, fornecendo melhor capacidade de manutenção e desacoplando a infraestrutura ou tecnologia usada para acessar bancos de dados da camada de modelo de domínio. A opção abordada aqui é o Repository Pattern.

## Features
Criar uma API que contenha as seguintes Resources

    1. Ver todas as ordens com detalhe de um determinado cliente.

    2. Retornar a ficha de um cliente com todos os campos contidos na tabela "customers", exceto o campo "creditLimit" e com o nome do colaborador responsável pela ficha dele. 

    3. Retornar a quantidade de clientes exibindo o nome da capital de cada país. Para conseguir a capital, utilize a api GET "https://restcountries.eu/rest/v2/name/{NOME_PAIS}"                    

## Modeling databases
![Screenshot](/public/images/diagram.png)


## Cronagrama de desenvolvimento
![Screenshot](/public/images/cronograma_de_desenvolvimento.png)


## Rotas
![Screenshot](/public/images/routes.png)
<!--ts-->
    # CUSTOMERS RESOURSES
    | GET|HEAD | api/customers    
    | GET|HEAD | api/customers/{customerNumber}
    | GET|HEAD | api/customers/{customerNumber}/orders

    # ORDERS RESOURSES
    | GET|HEAD | api/orders
    | GET|HEAD | api/orders/{orderNumber}
    | GET|HEAD | api/reports/customers/country
<!--te-->


## Instruções para rodar a API local
<!--ts-->
    1 - clone o projeto
    2 - Entre na pasta do projeto.
    3 - Instale as dependências usando o comando.
    composer install
    4 - use o script sql que se encontra na raís do projeto para inportar o banco de dados.
    5- Configure o arquivo .env com as credenciais do banco de dados.
    6 - levante o servidor usando o comando.
    php artisan serve
    7- Test a API usando Insomnia ou Postman para acessar os recursos listados abaixo.
<!--te-->


## Baixe aqui a collections do postman
[< Postman Collection >](https://www.postman.com/collections/df6e23c297d40e1e783b)


## Testes realizados
### 1 - Ver todas as ordens com detalhe de um determinado cliente.
![Screenshot](/public/images/getAllOrdersByCustomerNumber.png)


### 2 - Retornar a ficha de um cliente com todos os campos contidos na tabela “customers”, exceto o campo “creditLimit” e com o nome do colaborador responsável pela ficha dele.
![Screenshot](/public/images/getAllOrdersByCustomerNumber.png)


### 3 - Retornar a quantidade de clientes exibindo o nome da capital de cada país. Para conseguir a capital, utilize a api GET “https://restcountries.eu/rest/v2/name/{NOME_PAIS}” 
![Screenshot](/public/images/getCustomersCountry.png)


## Tecnologias e ferramentas
<!--ts-->    
    * PHP 7.3
    * PHP-POO
    * Laravel Framework 8.*
    * API RESTful
    * Modelagem de dados
    * MySQL
    * Git
    * Composer    
<!--te-->

## O que tentei demostrar ##
<!--ts-->
    * Organização;
    * Simplicidade;
    * Objetividade;
    * Reúso de código;
    * Testes de integração *;
    * Padronização de código;
    * Padrões de projeto;
    * Alguns dos princípios de SOLID;
<!--te-->

## Conclusão ##
Com mais de 10 anos de experiência me fez ver o quanto é importante tornar seu código mais estruturado.

Criei a API usando o Repository Pattern.
Uma Trait para tratar a resposta da API que este mecanismo para reutilização de código em herança única para enviar resposta JSON ao cliente.

Com o objetivo de tornar o código mais estruturado, consistente, isso tornará seu código mais fácil de entender e manter.
