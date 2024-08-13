# Agencia De Eventos

![index1](https://github.com/user-attachments/assets/1ab19041-16a5-40e2-9a05-c7bc58f74b77)
![index2](https://github.com/user-attachments/assets/a666f5ef-5b5e-4613-b4fb-c30846251967)

# Sobre o projeto

Agencia De Eventos é uma aplicação web full stack.
A aplicação consiste em um sistema de uma agencia de eventos, onde os usuários podem criar eventos e participar de eventos criados por outros usuários.

# Funcionalidades

## Criar e Editar Eventos

![event create](https://github.com/user-attachments/assets/5f528e79-9894-419e-92c1-5c7be88b9cf4)

## Ver, Participar e Sair de qualquer evento criado por outros usuários

![event show](https://github.com/user-attachments/assets/1e1b36de-67ef-4531-b41f-53f317d3135c)

## Ver todos os eventos de que o usuário é dono ou participa 

![dashboard](https://github.com/user-attachments/assets/d7da485c-d9a4-4138-a398-76ebb9483ac0)

## Buscar evento específico no banco de dados

![find exact event](https://github.com/user-attachments/assets/a1ad6ff3-726f-4b41-aa58-58106433215d)

# O projeto conta ainda com feedback ao usuário

![event create success](https://github.com/user-attachments/assets/4428755a-f45c-4167-a2ca-cb04cd62a78b)

![event delete success](https://github.com/user-attachments/assets/de237fd7-697d-43b0-bee1-0c96d2d54096)

![event participant success](https://github.com/user-attachments/assets/0be676cc-f4a0-4049-8ed1-3aed6985824d)

![leave event success](https://github.com/user-attachments/assets/3a8d39f9-8d8f-470b-85b5-693c4b1f0570)

# Tecnologias utilizadas

## Front-end

* HTML/CSS/JS
* BLADE
* BOOTSTRAP

## Back-end

* PHP
* LARAVEL
* ELOQUENT

## Database

* MYSQL

## Como executar o projeto

### Pré requisitos

<table>
    <tr>
        <th>PHP</th>
        <th>Laravel</th>
        <th>Composer</th>
        <th>MySql</th>
    </tr>
    <tr>
        <td>8.2</td>
        <td>11.0</td>
        <td>2.7</td>
        <td>10.4</td>
    </tr>
</table>


1. clonar repositório
2. entrar na pasta do projeto
3. executar comando: composer install
4. executar comando: php artisan key:generate
5. criar banco de dados Mysql
6. criar arquivo .env (copiar de .env.example)
7. configurar as variaveis de ambiente do banco de dados no .env
8. executar comando: php artisan migrate
9. executar comando: php artisan serve

# Autor

Enus Natã Da Silva Santos
