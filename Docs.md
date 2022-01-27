# Documentación


## Headers

Se puede tener diferentes headers (esto es así por defecto en WP) usando un solo archivo header.php, al definir el get_header() en los template, le podemos pasar 2 parametros, el primero es el nombre del header (le pasamos null también) y luego un array donde pasamos el type, este type tiene uqe existir en la carpeta ```template-parts/header/type-{acaelnombre}.php```, un ejemplo:

```php
get_header(null,[
    'type' => 'home'
]);
```
En la misma carpeta ```template-parts/header/``` podemos encontrar el-logo.php, todos los archivos que aparezcan en los template parts con el prefijo ***el-*** son para usar en muchas partes sin repetir código.

## Footers

## Posts Loop

Se puede mostrar los post (no importa el post type) con el template part ***post/content-loop*** simplemente pasandole el tipo de post a mostrar, ej:

```php
get_template_part('template-parts/post/content', 'loop', [
    'post_type' => 'products'
]);
```
Si no se le pasa ningun parametro, muestra las entradas comunes de WP.

También se le puede pasar la cantidad de entradas por pagina pasando el parametro ***post_per_page***, ej:

```php
get_template_part('template-parts/post/content', 'loop', [
    'post_per_page' => 5
]);
```
De esta forma se pueden mostrar 5 entradas (no importa el post type) por página.