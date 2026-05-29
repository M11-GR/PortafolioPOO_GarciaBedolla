# Proyecto 05: Actividad Integradora - Gestión de Bitácoras en Archivos de Texto

## 1. Nombre del Proyecto
Sistema Digital de Gestión de Bitácoras en PHP.

## 2. Objetivo del Proyecto
Manipular archivos de texto plano utilizando el lenguaje PHP para almacenar, leer, añadir y presentar información de manera estructurada, aplicando validaciones de datos y un correcto control de flujos de información.

## 3. Problema que Resuelve
Una empresa de seguridad necesita sustituir su registro de actividades manual en papel (como revisiones, incidentes y tareas pendientes) por un formato digital ligero y eficiente que no requiera el uso o configuración de una base de datos compleja. Este sistema resuelve la persistencia de datos permitiendo guardar la fecha, la descripción de la actividad y el nombre del responsable en un archivo de texto independiente. El programa asegura que los nuevos registros se sumen al final del documento sin borrar la información escrita previamente y los muestra de regreso en pantalla de forma ordenada.

## 4. Tecnologías Utilizadas
* **Lenguaje de Programación:** PHP.
* **Diseño de Interfaz:** Formulario HTML5 con entradas específicas para texto y fechas.
* **Almacenamiento Local:** Archivo plano de texto denominado bitacora.txt, generado automáticamente por el sistema.
* **Entorno de Despliegue:** Servidor local Apache a través del panel de control XAMPP.
* **Organización de Archivos:** Todo el sistema está concentrado en un directorio compuesto por la interfaz visual de captura y lectura (index.php) y el archivo físico donde se guardan los datos (bitacora.txt).

## 5. Conceptos Aplicados (según temario de POO)
* **Persistencia de datos sin bases de datos:** Capacidad de escribir información directamente en el almacenamiento del disco para que los reportes no se pierdan al cerrar el navegador o apagar el servidor.
* **Escritura segura en modo adición:** Configuración de instrucciones de archivos para insertar nuevas líneas de registros al final del documento de texto, previniendo la sobrescritura accidental del historial de seguridad.
* **Lectura y transformación de flujos:** Uso de funciones del lenguaje para abrir el archivo de texto guardado, extraer todas sus líneas de información y traducirlas a componentes visuales estructurados dentro de la página web.
* **Validación de campos obligatorios:** Estructuras de control encargadas de revisar que el formulario no procese información en blanco, impidiendo que se introduzcan registros vacíos que ensucien la bitácora de la empresa.
* **Mensajes informativos de estado:** Implementación de alertas dinámicas integradas en la interfaz para confirmar al guardia de seguridad si su reporte se guardó correctamente o si existió algún error en los datos.

## 6. Capturas de Pantalla

#### Formulario de Entrada / Interfaz Inicial
<img width="1060" height="425" alt="image" src="https://github.com/user-attachments/assets/1a5728c5-bbf9-4974-a207-7bee5306137c" />

#### Ejecución del Proceso
<img width="779" height="502" alt="image" src="https://github.com/user-attachments/assets/a79e3fbf-02d4-441c-8e45-362b37087be9" />

#### Resultados Obtenidos
<img width="1049" height="367" alt="image" src="https://github.com/user-attachments/assets/6bc2b763-6e72-4779-8e82-26cac434c9cf" />


## 7. Instrucciones de Ejecución
1. Comprueba que tu archivo index.php esté dentro de la carpeta de código de este proyecto.
2. Copia la carpeta completa de esta actividad y colócala en tu servidor local en la ruta: `C:/xampp/htdocs/PortafolioPOO/Proyecto_05_GestionBitacoras/`.
3. Inicia el servidor Apache desde el panel de herramientas de XAMPP.
4. Abre el navegador web de tu computadora e ingresa a la dirección local: `http://localhost/PortafolioPOO/Proyecto_05_GestionBitacoras/codigo/index.php`.
5. Rellena los campos de fecha, responsable y actividad, y presiona el botón de guardar. El archivo bitacora.txt se creará automáticamente y verás tu registro impreso en la lista de abajo.

## 8. Reflexión Personal
* **¿Qué aprendí?** Aprendí a utilizar las funciones de almacenamiento de PHP para manipular archivos de texto y comprendí lo útiles que son estos métodos para crear aplicaciones ligeras y rápidas cuando no se cuenta con un sistema de bases de datos formal.
* **¿Qué fue difícil?** Lo más complicado fue dar el formato exacto de saltos de línea al escribir los datos en el archivo de texto para garantizar que al momento de leerlos y mostrarlos en el navegador aparecieran perfectamente separados y legibles.
* **¿Qué mejoraría?** En el futuro me gustaría añadir un buscador o filtro por fechas para que el director de seguridad pueda localizar de forma inmediata las actividades de un día en específico sin tener que leer toda la lista completa.

---
*Regresar al [README Principal](../README.md)*
