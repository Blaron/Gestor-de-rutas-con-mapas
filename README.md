# Gestor de rutas
## _Simple y rapido_

Una aplicación para realizar rutas en base a calles indicadas en la base de datos.
En el ejemplo, se utiliza una simulación de un centro de día.

## Tecnologías
- PHP
- JavaScript



## Comentarios

> · Conozco que hay algunos bugs.
> · Tengo en conocimiento que la dirección primaria esta creada a mano.


## Installation
 Requiere [Php](https://php.net/) v7+

Instala un servidor Apache y MySQL

```sh
Descomprimir los documentos en el servidor
importar "mapas.sql"
configurar la api en 'router' del siguiente modo en 'index.js':
router: L.Routing.mapbox('<API KEY>', {language: 'es'}),
```
Puedes conseguir tu key en: [MapBox](http://mapbox.com)

## Apis / Librerias

Para el proyecto se han utilizado los siguientes recursos

| Apis / Librerias | Web |
| ------ | ------ |
| OpenStreetMap | https://www.openstreetmap.org |
| Leaflet | https://leafletjs.com |
| MapBox | http://mapbox.com |
| Nominatim | https://nominatim.openstreetmap.org/ |
| Tailwind | https://tailwindcss.com |


## License

MIT
