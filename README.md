# leydelmonte
12/02/2017

Inicia https://www.leybook.com/doc/190

Termina https://www.leybook.com/doc/18620

Hacer pruebas con http://www.temasnicas.net/rtn106.pdf

Guardando el detalle de cada documento PDF EN MySQL

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
