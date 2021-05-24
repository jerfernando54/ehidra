Siga los siguientes pasos para rodar el proyecto.
Se considera que teneis el docker configurado
1- clonar el proyecto
2- abrir la terminal y navegar hasta el directório del proyecto (si está en una maqui windows, debes configurar el wsl2 y luego utilizarlo)
3- ejecuta el comando "composer require laravel/sail --dev" 
4- ejecuta el comando "php artisan sail:install"
5- ejecuta el comando alias sail='bash vendor/bin/sail', 
6- ejecute el comando sail npm install
7- ejecute el comando sail npm run dev
8- ejecuta el comando sail up -d

para povoar la tabla de programadores ejecuta el comando  sail artisan db:seed