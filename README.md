# leydelmonte
12/02/2017

Inicia https://www.leybook.com/doc/190

Termina https://www.leybook.com/doc/18620

Hacer pruebas con http://www.temasnicas.net/rtn106.pdf

Guardando el detalle de cada documento PDF EN MySQL

```
CREATE TABLE 'libros' (
  'id_libro' int(11) NOT NULL,
  'codigo' int(11) DEFAULT NULL,
  'titulo' text COLLATE utf8_spanish_ci,
  'materia' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'rango' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'numero' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'aprobado' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  'publicado' varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
```

### === Tipo de Cambio Nicaragua ===

El Tipo de Cambio Nicaragua es un Widget que brindar información de hoy, ayer, mañana y promedio del cambio del dólar (USD) a córdoba nicaragüense. Es una herramienta útil para PYMES y tener de primera mano toda la información necesaria en el sitio web de quien la instale.

### === Características ===

1. Permite conocer el tipo de cambio del día
2. Muestra el tipo de cambio de ayer y mañana
3. Muestra el promedio del tipo de cambio, que es la suma de todos valores entre la cantidad de días

### == Instalación ==

1. Visite la página de plugins dentro de su escritorio de Wordpress y seleccione 'Añadir nuevo'
2. Busque "Tipo de Cambio Nicaragua"
3. De clic en instalar ahora
3. Active el Tipo de Cambio Nicaragua desde su página de plugins
4. ¡Terminaste!

### == Ayuda ==

Cualquier ayuda dirijase a la página web [Binary Lemon](https://www.binarylemon.net)
