<p align="center"><a href="https://daniellanao.com" target="_blank"><img src="https://daniellanao.com/img/daniel_isotipo.png" width="200"></a></p>



## Daniel Lanao, Backbone challenge

Para incrementar eficiencia, me pareció pertinente guardar toda la información de los zipcodes en una base de datos.
Para este caso se utilizó una base de datos MySQL

## Laravel

El proyecto se realizó en Laravel Framework 8.83.19


## ZipCodes

La fuente original de los datos esta en  Códigos Postales México [ZIP CODES](https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx).

## Edición de la información inicial

Antes de guardar la información en base de datos, se optó por reemplazar las tildes (Á,á,É,é,Í,í,Ó,ó,Ú,ú) y caracteres especiales del español como (ñ,Ñ,ü,Ü) para no tener problemas en el futuro con el manejo de caracteres. (Se utilizó excel para hacer ese cambio)

## Instalación

Luego de realizar la instalación del proyecto Laravel, se debe configurar el .env utilzando las credenciales de la base de datos.

Luego para popular la tabla hay 2 posibles pasos:
1. Realizar php artisan migrate, y luego ejecutar el archivo public/docs/zipcodes_mysql.sql
2. Crear la base de datos MySql y ejecutar directamente el archivo public/docs/zipcodes.sql
