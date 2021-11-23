Challenge – Backend Developer

Escriba un programa que imprima todos los números del 1 al 100. Sin embargo, para múltiplos de 3, en lugar del número, escriba "Falabella". Para los múltiplos de 5 escriba "IT". Para números que son múltiplos de 3 y 5, escriba "Integraciones".
Pero aquí está el truco: solo puede usar un "IF". Sin ramas múltiples, Ni if ternario.

Arquitectura:

Este proyecto inicio con una estructura en PHP, luego fue integrado PhpUnit para pruebas unitarias.
En la raíz del proyecto encontrara un archivo index.php, quien se encarga de imprimir en pantalla el resultado del ejercicio. Mientras que el archivo multiple.php se encuentra la clase multiple quien es responsable de hacer el recorrido y ordenar el resultado que es enviado a index.php
Co

Instalación
1- Clonar el repo: https://github.com/tatigoliat/multiple.git

2- Instalar dependencias ejecutando: composer install

Una vez hecho lo anterior puede ir a su navegador y buscar http://localhost/carpeta_del_proyecto

Para hacer uso de las pruebas unitarias:

    Dirijase al directorio:  carpeta_del_proyecto/test 
    Inicie una consola de comandos en este directorio
    Ejecute el comando vendor/bin/phpunit MultipleTest.php
