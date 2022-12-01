# TesteVaga
Tive alguns problemas no desenvolvimento do projeto:

Um foi alertado com taag BugFix nos commits como: 
SQLSTATE 42000: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes com PHP
E problemas com rotas, onde optei por não adicionar todos os campos do banco de dados para facilitar os teste.

Os erros mencionados acabaram consumindo um certo tempo e não consegui implementar todos os requisitos do teste.

## ⚡ **Instalação**

Considerando que você esteja em um sistema operacional Linux e com o git instalado, faça o seguinte:

- **Clone o projeto**

```bash
git clone git@github.com:nome-projeto
```

- **Acesse o projeto**

```bash
cd nome-projeto
```

- **Instale as dependências e o framework**

```bash
composer install --no-scripts
```

- **Copie o arquivo .env.example**

```bash
cp .env.example .env
```

- **Crie uma nova chave para a aplicação**

```bash
php artisan key:generate
```

- **Configure o arquivo .env e rode as migrations**

```bash
php artisan migrate --seed
```
