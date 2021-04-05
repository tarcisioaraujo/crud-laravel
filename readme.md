<h1 align="center">Blog</h1>

Um aplicação para cadastro de cursos com imagem ilustrativa e controle de publicação contruído com Laravel 5.3 e Materialize.

<p align="center">
	<a href="https://github.com/tarcisioaraujo/blog-laravel-vue/issues">
		<img src="https://img.shields.io/github/issues/tarcisioaraujo/crud-laravel" alt="Issues">
	</a>	
	<img src="https://img.shields.io/github/license/tarcisioaraujo/crud-laravel" alt="License">	 
</p>

<p align="center">
	<a href="#computer-tecnologias">Tecnologias</a> •		
	<a href="#runner-começando">Começando</a> •
	<a href="#warning-pré-requisitos">Pré-requisitos</a> •
	<a href="#elephant-configuração-do-php">Configuração do php</a> •
	<a href="#hammer_and_wrench-instalação">Instalação</a> •
	<a href="#passport_control-login">Login</a> •
	<a href="#construction_worker-autor">Autor</a> •
	<a href="#memo-licença">Licença</a>
</p>

<p align="center">
	<kbd>
		<img alt="Lista cartões de cursos" title="#ListaCartoesDeCursos" width="600" height="333" style="border-radius: 5px" src="...">
	</kbd>
	<br/><br/>
	<kbd>
		<img alt="Lista CRUD cursos" title="#ListaCrudCursos" width="600" height="333" style="border-radius: 5px" src="...">
	</kbd>		
</p>

## :computer: Tecnologias 

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Materialize](https://materializecss.com/)

## :runner: Começando 

Essas instruções fornecerão uma cópia do projeto instalado e funcionando em sua máquina local.

## :warning: Pré-requisitos 

O que você precisar para instalar a aplicação

```
PHP 5.6.4 - 7.1.*
Composer >= 1.4.2
Node >= 8.6.0
```
### :elephant: Configuração do php 

```
# Habilitar os recursos no php.ini
extension=mbstring
extension=openssl
extension=pdo_sqlite
extension_dir = "ext"
```

## :hammer_and_wrench: Instalação

Passos para rodar a aplicação

```
# Clonar
git clone https://github.com/tarcisioaraujo/crud-laravel

# Acessar o diretório
cd crud-laravel

# Instalar e atualizar as dependências do Composer (leva alguns minutos ☕)
composer install
composer update

# Instalar as dependências do Node JS
npm install

# Criar arquivo .env e configurar variáveis de ambiente
cp .env.example .env
php artisan key:generate

# Alterar o arquivo .env para ficar dessa forma
DB_CONNECTION=sqlite
//DB_HOST=127.0.0.1
//DB_PORT=3306
//DB_DATABASE=homestead
//DB_USERNAME=homestead
//DB_PASSWORD=secret

# Criar arquivo do banco de dados SQLite
copy con .\database\database.sqlite
<aperte a tecla F6>

# Criar tabelas do Banco de Dados
php artisan migrate

# Rodar Servidor PHP
php artisan serve

# Acessar o endereço 
http://localhost:8000
```
## :passport_control: Login 

Usuário de teste

```
E-mail: admin@mail.com
Password: 123456
```

## :construction_worker: Autor

<a href="https://github.com/tarcisioaraujo">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/47223046?v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Tarcísio Silva de Araújo</b></sub></a> <a href="https://github.com/tarcisioaraujo" title="GitHub"></a>

Feito por Tarcísio Silva de Araújo :wave:

[![Linkedin Badge](https://img.shields.io/badge/-Tarcísio-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/tarcisiosaraujo/)](https://www.linkedin.com/in/tarcisiosaraujo/) 
[![Gmail Badge](https://img.shields.io/badge/-tarcisio.saraujo@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:tarcisio.saraujo@gmail.com)](mailto:tarcisio.saraujo@gmail.com)

## :memo: Licença

Este projeto esta sobe a licença [MIT](./LICENSE).