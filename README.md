# 🛍️ Bangu Shopping CTF

Bem-vindo ao **Bangu Shopping CTF**, um desafio de segurança focado em aplicações web estudando vulnerabilidades clássicas em PHP. Este projeto simula o sistema interno de um shopping real (com um toque de humor) onde você deve explorar falhas para obter as bandeiras (flags).

## 📝 Descrição

O sistema possui as seguintes funcionalidades:
- **Página Inicial**: Listagem de eventos e filmes em cartaz.
- **Busca**: Funcionalidade de pesquisa de eventos.
- **Newsletter**: Sistema de inscrição para novidades.
- **Login**: Área restrita para usuários e administradores.
- **Dashboard**: Painel administrativo para gerenciamento de usuários e visualização de métricas.

## 🚀 Tecnologias Utilizadas

- **Front-end**: HTML5, CSS3 (Vanilla) com design "Bangu-style".
- **Back-end**: PHP 8.2.
- **Banco de Dados**: PostgreSQL 18.
- **Containerização**: Docker e Docker Compose.

## 🛠️ Como subir o projeto

Para rodar o desafio na sua máquina, você precisará ter o **Docker** e o **Docker Compose** instalados.

1.  **Clone o repositório** (ou baixe os arquivos):
    ```bash
    git clone <url-do-repositorio>
    cd bangushoppingctf
    ```

2.  **Inicie os containers**:
    ```bash
    docker-compose up -d --build
    ```

3.  **Acesse a aplicação**:
    Abra o seu navegador e acesse: `http://localhost:8080`

## 📂 Estrutura do Projeto

- `app/public/`: Contém os arquivos PHP acessíveis pelo servidor web (`index.php`, `login.php`, `dashboard.php`).
- `app/src/`: Lógica de back-end, conexão com o banco e verificação de sessões.
- `db/`: Script SQL para inicialização do banco de dados PostgreSQL.
- `docker-compose.yml`: Orquestração dos serviços de aplicação e banco de dados.


*Este projeto foi criado para fins educacionais e estudos de CTF.*
