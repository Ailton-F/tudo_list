# Laravel 12 Task Manager

Um gerenciador de tarefas simples desenvolvido com Laravel 12.

## Requisitos

Para rodar o projeto, você precisa ter instalado:

- **PHP >= 8.1**
- **Composer**
- **Extensões PHP**:
  - OpenSSL
  - PDO
  - Mysql
  - Mbstring
  - XML
## Instalação Passo a Passo

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/seu-projeto.git
cd seu-projeto
```

### 2. Instale as dependências PHP

```bash
composer install
```

### 3. Configure o ambiente

Copie o arquivo `.env.example`:

```bash
cp .env.example .env
```

Edite o arquivo `.env` e atualize as seguintes configurações:

#### Banco de Dados SQLite

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_USER=root
DB_PASSWORD=
```

### 4. Gere a key da aplicação

```bash
php artisan key:generate
```

### 5. Suba os containers.

```bash
./vendor/bin/sail artisan sail:install
./vendor/bin/sail up -d # -d para rodar no background
```

### 6. Rode as migrações

```bash
./vendor/bin/sail artisan migrate
```

### 7. Seja feliz :D