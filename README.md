# Visão Geral do Projeto

O sistema encurtador de URL foi projetado para permitir que os usuários encurtem URLs longos e gerem links curtos que redirecionam para o URL original. O sistema é desenvolvido usando Laravel para backend, Vue.js para frontend e Tailwind CSS para estilo.

## Tecnologias Utilizadas

- **Back-end**: Laravel
- **Interface**: Vue.js -em desenvolvimento


## Configurando o servidor back-end (Laravel)

1. Clone o repositório do link fornecido: git clone https://github.com/DAYANE1130/url_shortener.git
2. Navegue até o diretório do projeto e execute `composer install` para instalar as dependências do projeto.
3. Crie uma cópia do `.env.example` arquivo e renomeie-o para `.env`. Atualize a configuração do banco de dados no `.env` arquivo.
4. Configure suas variaveis de ambiente conforme explicado em "Configuração das Variáveis de Ambiente"
5.  Execute `php artisan key:generate` para gerar a chave do aplicativo.
7. Migre o banco de dados usando `php artisan migrate`.
8. Inicie o servidor de desenvolvimento executando `php artisan serve`.
9. Acesse as rotas da  Api pelo navegador através do endereço http://127.0.0.1:8000

## Configuração das Variáveis de Ambiente

Crie um arquivo `.env` na raiz do projeto e configure suas variáveis de ambiente. Aqui está um exemplo de como configurar o banco de dados:

```bash
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=url
DB_USERNAME=root
DB_PASSWORD=
Por favor, substitua root e password com suas credenciais de banco de dados.

```
Lembre-se de que o arquivo `.env` não deve ser incluído no controle de versão, portanto, certifique-se de que ele esteja listado no arquivo `.gitignore`.


## Documentação da API
A documentação da API pode ser acessada no seguinte link: https://documenter.getpostman.com/view/31041446/2s9YypE2wV

## Possíveis melhorias de código
Implementar verificações de validação adicionais para dados de entrada.
Aprimoran o tratamento de erros e mecanismos de feedback para uma melhor experiência do usuário.
Otimizando consultas e desempenho do banco de dados.




