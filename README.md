##Clone o projeto

git clone https://github.com/claudineifusieger/ctic-login.git

##Acesse o projeto

cd /seuprojeto

##Instale as dependências e o framework

composer install 

composer update

##Copie o arquivo .env.example

cp .env.example .env

##Crie uma nova chave para a aplicação

php artisan key:generate

##Em seguida você deve configurar o arquivo .env ajustar as configs do sql e do ldap


DB_CONNECTION=mysql  
DB_HOST=ip do sql
DB_PORT=3306
DB_DATABASE=nome da base de dados
DB_USERNAME=username da base de dados
DB_PASSWORD=senha da base de dados

LDAP_LOGGING=true
LDAP_CONNECTION=default
LDAP_HOST=ip do ldap
LDAP_BASE_DN="dc=cefetsc,dc=edu,dc=br" 

##
php artisan migrate --seed

##Em relação ao npm, isso varia de projeto para projeto, mas provavelmente você também vai precisar rodar os seguintes comandos:

npm install

npm run dev

php artisan storage:link

php artisan vendor:publish
