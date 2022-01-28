# Temita

Tema Base de WordPress, usamos Composer y Webpack (babel) para manejar php y js, js se puede usar con "import" de ser necesario.

## Utilizar

Clonar el repositorio dentro de wp-content/themes 
Ingresar al theme y ejecutar

```composer install```

luego

```npm install```

El script general del sitio es app.min.js, se genera con el comando ```npm run build```, para hacer cambios, utilizar el archivo **app/js/app.js**, luego correr el comando de build, si estan haciendo muchos cambios, correr ```npm run watch``` para que npm haga el build al guardar los cambios.

El style general es app.min.css, para hacer cambios usar el archivo **app/css/app.scss** al correr ```npm run build``` o tener corriendo ```npm run watch``` se compila a css automaticamente.

En el archivo webpack.config.js pueden configurar mas salidas y entradas de archivos, tanto de css como de js.


## Pueden leer la documetación que esta en Docs.md en esta misma carpeta.