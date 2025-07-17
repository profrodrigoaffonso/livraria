# Sistema de Livraria

Um sistema web para livrarias.

## Funcionalidades

- Cadastrar autores
- Cadastrar editoras
- Cadastrar estantes
- Cadastrar livros

## Tecnologias utilizadas

- PHP 8.0
- Laravel 8
- MySQL
- HTML / CSS
- JavaScript
- Bootsrapp

## Estrutura do projeto

```text

app/
├── Http/
│ └── Controllers/
│   ├── AutoresController.php
|   ├── CategoriasController.php
|   ├── EditorasController.php
|   ├── EstantesController.php
|   ├── LivrosController.php
|   └── LoginController.php
├── Models/
│ ├── Autor.php
│ ├── Editora.php
│ ├── Estante.php
│ ├── Livro.php
│ └── User.php
routes/
└── web.php
