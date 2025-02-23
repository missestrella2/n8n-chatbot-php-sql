# Este es un chatbot que a traves de un chat en una web php, consulta y agrega registros a una db

Columnas de la tabla Usuarios: ID, Nombre, Mail

Requisitos previos:
- Tener una cuenta de n8n
- Sacar la API KEY de OPEN AI
- Tener una BBDD de SQL con una tabla Usuarios las 3 columnas (ID, Nombre, Mail)
- Poseer el nombre de la bbdd, usuario y contraseña

IMPORTANTE

En index.php:
- hay que reemplazar la url del webhook

En db.php:
- hay que reemplazar el nombre de la BBDD, usuario y contraseña

En el workflow n8n:
- En el nodo OpenAI hay que ingresar la OpenAI key

COMO ENCUENTRO EL WEBHOOK?
- Abrir projecto en n8n
- Ir al primer nodo "When chat message received" y hacer doble click. Se abrne las opciones del nodo
- El la ventana, pestaña Parameters, opcion Chat URL copiar la URL y reemplazarla en index.php 

COMO CREO LA CLAVE API DE OPENAI:
Tutorial: https://www.youtube.com/watch?v=L951IDfW-L8
