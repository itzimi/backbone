<p align="center"><a href="https://daniellanao.com" target="_blank"><img src="https://daniellanao.com/img/daniel_isotipo.png" width="200"></a></p>



## Daniel Lanao, Backbone challenge

Para incrementar eficiencia, me pareció pertinente guardar toda la información en una base de datos. Para este caso se utilizó una base de datos MySQL

y luego realizar la consulta la base de datos con el zipcode

## Laravel

El proyecto se realizó en Laravel Framework 8.83.19

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

## ZipCodes

La fuente original de los datos esta en  Códigos Postales México[Laravel documentation](https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx).

## Formateo de información

Antes de guardar la información en base de datos, se opto por reemplazar las tildes y caracteres especiales del español como (ñ,Ñ, ü,Ü) para no tener problemas en el futuro con el manejo de caracteres. (Se utilizó excel para hacer ese cambio)
