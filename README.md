# Desafio técnico
Pra realização desse teste o candidato deverá realizar um fork do repositório, realizar o teste inserindo os arquivos dentro do mesmo repositório e ao finalizar todo o teste deverá realizar um Pull Request para o repositório original.

Desenvolver uma aplicação web simples para gerenciar **clientes** e **produtos**, utilizando uma **API principal em Node.js**

## 📚 O que você irá construir

## 1. 📦 CRUD de Produtos (Node.js + PostgreSQL)
Desenvolver uma **API RESTful** em **Node.js + Express**, responsável por gerenciar os dados de produtos.

- Salvar os dados no banco **PostgreSQL**
- A API deve retornar os dados **do PostgreSQL**
- Endpoints obrigatórios:
  - `GET /produtos`
  - `GET /produtos/:id`
  - `POST /produtos`
  - `PUT /produtos/:id`
  - `DELETE /produtos/:id`

## 2. 👤 CRUD de Clientes (PHP 7.4 + MySQL)
Desenvolver uma Aplicação Web Simples(2 paginas: uma de listagem e outra de edição, sem necessidade de login), utilizando PHP e uma estrutura básica em MVC (sem a utilização de frameworks para o backend). A aplicação deve exibir uma listagem de registros de **CLIENTES**, em formato de “table”, onde cada um destes, poderão sofrer todas as operações básicas de CRUD, **UTILIZAR O BANCO MYSQL**.

O layout da aplicação deverá ser responsivo / adaptativo e utilizar o Boostrap para tal. Deve ser utilizado AJAX nas operações de CRUD utilizando jQuery.

- 📄 Página 1: Listagem de clientes (com filtro e tabela responsiva) - adicionar uma coluna para excluir o cliente e outra coluna  editar o cliente
- 📄 Página 2: Edição de clientes
- Não mostrar clientes excluidos 

## 3. 💻 SPA em React
Implemente uma SPA moderna em React, que:
- Consuma os endpoints de produtos da **API Node.js**
- Faça CRUD completo de produtos
- Utilize Axios ou fetch
- O layout da aplicação deverá ser responsivo / adaptativo
- Não mostrar produtos excluidos
  
## 4. Estrutura básica das tabelas
### produtos (PostgreSQL)
- id
- nome
- preco
- estoque
- descricao
- status  (ativo, inativo, excluido)
- data_alteracao

### clientes (MYSQL)
- id
- nome
- cpf
- email
- status (ativo, inativo, excluido)
- data_alteracao

**Para o teste ser válido, o candidato deverá preencher toda a documentação básica dentro deste mesmo arquivo README.md informando todos os tópicos necessários pra ser executado no ambiente do testador.**

Em casos de problema de execução do ambiente do avaliador, o teste poderá ser desconsiderado.

# Requisitos

1. PHP 7.4;
2. MySQL >= 5.6;
3. Jquery
4. Bootstrap.
5. Git / Github.
6. NodeJs
7. Express
8. React

# Instalação

## ✅ Verifique seu ambiente

No terminal, rode:

```bash
php -v
```
Esperado: PHP >= 7.4


```bash
mysql --version
```
Esperado: MySQL >= 5.6


```bash
node -v
```
Esperado: Node.js >= 14


```bash
npm -v
```
Esperado: NPM compatível com seu Node.js

```bash
psql --version
```
Esperado: PostgreSQL >= 10


## ⬇️ Clone o repositório

```bash
git clone https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git
cd desafio-tecnico

```

## 📦 Instalação dos serviços

```bash
cd api-node
npm install

```

Configure o arquivo .env com os dados do PostgreSQL.  
Crie a tabela produtos no banco.  

Para iniciar:
```bash
node src/app.js
```
A API ficará disponível em: http://localhost:3000/produtos  


## 🔹 App PHP + MySQL

```bash
cd app-php
php -S 0.0.0.0:8080
```
Acesse no navegador: http://localhost:8080 (Obs: caso a prta 8080 esteja sendo utilizada por outro serviço altere-a para 8081, 8082, etc)


## 🔹 SPA React
```bash
cd web-react/spa-produtos
npm install
npm run dev
```
Acesse no navegador: http://localhost:5173


# Utilização

 * Abra o navegador de sua preferência e acesse os links acima.

 * Faça operações de CRUD:

  * Produtos → via SPA React.

  * Clientes → via App PHP.

 * O React consome a API Node.js para os produtos.

 * O PHP se conecta direto ao MySQL para clientes.


# Funcionamento

O projeto é composto por três camadas principais:  
 * API Node.js → expõe os dados dos produtos (PostgreSQL)
 * SPA React → interface moderna para CRUD de produtos
 * App PHP → interface para CRUD de clientes (MySQL)  
Cada camada pode ser executada independentemente para facilitar testes e manutenção.
