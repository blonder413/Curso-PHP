# Docker

Este directorio contiene la configuración básica para configurar un servidor con `apache` y php `8.4`.
Adicionalmente cuenta con la cofiguración de red para que funcione con vpn y la configuración del archivo `hosts`.
Este directorio puede ser la raiz del proyecto si lo que desea es correr todo en `Docker`.

## Crear contenedor

Antes de crear todo es importante tener en cuenta que el Dockerfile posee la configuración de la red,
si ya existe una red similar puede dar error, en tal caso debemos omitir la creación de la red
y contectarnos a ella cuando el contenedor esté corriendo.

```bash
docker-compose up -d
```

Esto crea el contenedor `php8.4` y lo corre en el puerto `8000`.
A esta altura si levantamos la vpn e intentamos acceder a algún recurso de la red no podremos.
Por lo tanto debemos detener el contenedor, levantar la vpn y volver a iniciar el contenedor

```bash
docker stop php-8.4
conectar vpn
docker start php-8.4
docker exec -it php-8.4 bash
curl -v 192.168.0.4
```

Con estos pasos, si con la vpn tenemos acceso a la ip `192.168.0.4` deberíamos tener respuesta

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

## Conectarlo a una red

Si la red la tenemos creada con anterioridad, podremos conectar nuestro contenedor una vez que esté levantado.

```bash
docker network connect mi-red php-8.4
```
