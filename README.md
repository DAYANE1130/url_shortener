# Visão Geral do Projeto

O sistema encurtador de URL foi projetado para permitir que os usuários encurtem URLs longos e gerem links curtos que redirecionam para o URL original. O sistema é desenvolvido usando Laravel para backend, Vue.js para frontend e Tailwind CSS para estilo.

## Tecnologias Utilizadas

- **Back-end**: Laravel
- **Interface**: Vue.js

## Configurando o servidor back-end (Laravel)

1. Clone o repositório do link fornecido: git clone https://github.com/DAYANE1130/url_shortener.git
2. Navegue até o diretório do projeto e execute `composer install` para instalar as dependências do projeto.
3. Crie uma cópia do `.env.example` arquivo e renomeie-o para `.env`. Atualize a configuração do banco de dados no `.env` arquivo.
4. Execute `php artisan key:generate` para gerar a chave do aplicativo.
5. Migre o banco de dados usando `php artisan migrate`.
6. Inicie o servidor de desenvolvimento executando `php artisan serve`.

## Clonando o Repositório

Para clonar o repositório, use o seguinte comando:


## Documentação da API
A documentação da API pode ser acessada no seguinte link: https://documenter.getpostman.com/view/31041446/2s9YypE2wV

## Possíveis melhorias de código
Implementar verificações de validação adicionais para dados de entrada.
Aprimoran o tratamento de erros e mecanismos de feedback para uma melhor experiência do usuário.
Otimizando consultas e desempenho do banco de dados.




