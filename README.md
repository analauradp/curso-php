# PHP 8
Curso introductorio a PHP + aplicación con deploy.

Abrir Xampp en el disco C > app  > xampp-control > Shell para poder visualizar la terminal Xampp for Windows:
```
code . 
```
Primer hola mundo en el terminal de Xampp:
```
php -r "echo 'Hola mundo';"
```
Para ejecutar un archivo hecho en VSCode:
Primero accedemos a la carpeta donde se encuentra el archivo
con cd. 
```
php index.php
```

Levantar un entorno de desarrollo con un puerto, el localhost para acceder y ver nuestros cambios:
```
php -S localhost:8000
```
en el puerto 8000 queremos levantar el entorno de desarrollo, lo que detecta nuestro archivo index.php  y si accedemos a nuestro puerto localhost 8000, podemos ver lo que tenemos ejecutando en nuestro archivo. 
php permite colocar html, CSS y JS en el mismo documento, y se puede utilizar como un sistema de plantillas. 
echo es como un console log pero sí se muestra en el navegador 
La forma corta de hacer lo mismo que echo para el sistema de plantillas:
```
<?= "Mi primera app"; ?>
```
Recomendada para no repetir echo. 

No hace falta colocar los tipos (cadena de texto, booleano, número). PHP es de tipado dinámico, débil, y gradual. 
*Dinámico* porque no es necesario declarar el tipo de la variable, puede cambiar en tiempo de ejecución. 
*Débil* porque intenta cambiar los tipos automáticamente, convertir según sea necesario.  
El símbolo de + no sirve para concatenar cadenas de texto, para eso es el operador punto (.).  
*Gradual* porque podemos indicar explícitamente los tipos de las variables en ciertos contextos. 
**Método var_dump**
Dice exactamente el tipo de datos y el valor del dato de una variable en el navegador. 
Los errores de PHP por defecto en el entorno de desarrollo te aparecen en la página web, lo que puede exponer información sensible. Para eso se puede configurar para asegurarse de no exponer los errores. 
**Gettype**
Dice el tipo de dato junto con el echo, junto con diferentes métodos que verifican variables como is_string, is_bool, is_int. 
**Type casting**. Forzado de tipos
**Interpolación de cadenas**
Las comillas simples no aceptan la interpolación de cadenas. 
Otra forma de concatenar es:
```
$output = "Hola $name";
$output .=, con una edad de $age.";
```
Concatenando lo que tenía antes con el nuevo
**Constantes en PHP**
Hay dos tipos, globales (define) que se pueden utilizar en cualquier lugar de la aplicación, y no nos deja declarar dos veces. Locales a nivel de clases.
No hace falta poner en el simbolo $. No funcionan a nivel de ejecución, son estáticas. php
**Expresión match en PHP**
Expresión con la que se puede sustituir el switch case. 
Match es una expresión, por lo tanto su resultado puede ser almacenado en una variable o retornado.
Cada variante de Match solo acepta una expresión de una sola línea y por lo tanto no necesita break como en el caso de switch.
Las comparaciones de Match son estrictas en tipo. Es decir '8.0' (cadena) no coincidirá con 8.0 (número).
Si quieres coincidir con más de un valor, puedes separarlos por comas: 'double', 'float'
**Arrays**
Arrays asociativos son aquellos que inician con una cadena de texto. Es una estructura de datos que almacena pares clave-valor, en lugar de utilizar índices numéricos.Fundamentales para estructurar datos. Útil por ejemplo para hacer un diccionario.  

## Proyecto La próxima película de Marvel
**Llamadas a API**
Se pueden hacer de muchas formas especialmente hablando de dependencias
Utilizamos el comando llamado cURL, que es la forma más básica de hacerlo (Pasos indicados en el index). 

Utilizando el framework sin clases Pico CSS para dar estilos. Introducir HTML. 
**Desplegar a producción**
Para desplegar proyectos pequeños podemos usar docker, y en esta ocasión usaremos zeabur.
Primero se debe crear un reporitorio en GitHub:
Nombre del repositorio
Descripción

En terminal: 
cd 'carpeta de proyecto'
git init 
git add . (todos los archivos)
git status (para revisar)
colocar correo y nombre
git commit -m "mensaje"
git push página donde se encuentra el repositorio recien creado

Iniciar sesión en Zeabur con mi cuenta de GitHub>Configurar o desde local. 
Una vez completa la carga se genera una URL interna y se puede generar un dominio público para que cualquiera pueda ver el proyecto.
