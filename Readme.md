## Temita

Tema Base de WordPress, usamos Composer y Webpack (babel) para manejar php y js, js se puede usar con "import" de ser necesario.

### Uno

Clonar el repositorio dentro de wp-content/themes 
Ingresar al theme y ejecutar

```composer install```

luego

```npm install```

El script general del sitio es app.min.js, se genera con el comando ```npm run build```, para hacer cambios, utilizar el archivo **app/js/app.js**, luego correr el comando de build, si estan haciendo muchos cambios, correr ```npm run watch``` para que npm haga el build al guardar los cambios.

El style general es app.min.css, para hacer cambios usar el archivo **app/css/app.scss** al correr ```npm run build``` o tener corriendo ```npm run watch``` se compila a css automaticamente.

en el archivo webpack.config.js pueden configurar mas salidas y entradas de archivos, tanto de css como de js.

### Headers

Se puede tener diferentes headers (esto es así por defecto en WP) usando un solo archivo header.php, al definir el get_header() en los template, le podemos pasar 2 parametros, el primero es el nombre del header (le pasamos null también) y luego un array donde pasamos el type, este type tiene uqe existir en la carpeta ```template-parts/header/type-{acaelnombre}.php```, un ejemplo:

```php
get_header(null,[
    'type' => 'home'
]);
```
En la misma carpeta ```template-parts/header/``` podemos encontrar el-logo.php, todos los archivos que aparezcan en los template parts con el prefijo ***el-*** son para usar en muchas partes sin repetir código.
