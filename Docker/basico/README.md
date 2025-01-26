# Docker

Este directorio contiene la configuración básica para configurar un servidor con `apache` y php `8.4`.
Este directorio puede ser la raiz del proyecto si lo que desea es correr todo en `Docker`.

## Instalar pip

```bash
sudo apt install python3-pip
```

## Crear contenedor

```bash
docker-compose up --build
```

Opcionalmente podemos decirle que una vez creado se ejecuta en segundo plano y nos libere la consola

```bash
docker-compose up -d --build
```

Esto crea el contenedor `php8.4` y lo corre en el puerto `8000`.

## Eliminar contenedor

Si realizamos algún cambio en los archivos de configuración es necesario eliminar todo y volverlo a crear.
También podemos eliminar si necesitamos liberar espacio en disco.

```bash
docker-compose down
```

## Ejecutar el contenedor

Si nuestro contenedor está creado pero detenido no necesitamos volver a crearlo, basta con arrancarlo.

```bash
docker start php-8.4
```

## Detener el contenedor

Podemos detener el contenedor sin eliminar todo

```bash
docker stop php-8.4
```
