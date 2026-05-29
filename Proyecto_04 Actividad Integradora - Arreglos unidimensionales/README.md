# Proyecto 04: Actividad Integradora - Arreglos unidimensionales

## 1. Nombre del Proyecto
Gestor de Inventario de Tienda en Línea en PHP.

## 2. Objetivo del Proyecto
Desarrollar un prototipo de aplicación web utilizando arreglos en PHP para almacenar, procesar y analizar la información de precios y nombres de productos de manera ordenada y eficiente.

## 3. Problema que Resuelve
Una tienda en línea requiere un módulo para administrar sus productos en inventario de forma rápida. Este sistema automatiza la captura de información mediante un formulario web y procesa los datos en segundo plano para entregarle al dueño de la tienda cálculos exactos sin necesidad de hacer cuentas a mano. El programa calcula la suma total del valor de la mercancía, obtiene el costo promedio de los artículos y localiza de forma automática el nombre y precio tanto del producto más costoso como del más barato del catálogo.

## 4. Tecnologías Utilizadas
* **Lenguaje de Programación:** PHP.
* **Diseño de Formularios:** HTML5 con validaciones básicas integradas para asegurar que no se envíen campos vacíos.
* **Entorno de Ejecución:** Servidor local Apache mediante el paquete de herramientas XAMPP.
* **Estructura de Archivos:** Distribución limpia del código dividida en tres partes independientes: una pantalla de captura (index.php), un script de procesamiento de datos (procesar.php) y una pantalla final de visualización (resultados.php).

## 5. Conceptos Aplicados (según temario de POO)
* **Listas de datos paralelas:** Uso de dos estructuras de almacenamiento independientes en memoria que guardan una relación directa entre sus posiciones, asociando el nombre de un artículo con su precio correspondiente.
* **Funciones nativas de cálculo:** Implementación de herramientas internas del lenguaje para sumar de forma directa todos los valores numéricos de una lista sin necesidad de recorrerlos uno por uno manualmente.
* **Búsqueda de valores límite:** Uso de herramientas de programación optimizadas para identificar los extremos numéricos más altos y más bajos dentro de un conjunto de datos, permitiendo relacionar esos costos con la identidad del artículo.
* **Estructura visual de resultados:** Presentación de la información final analizada de forma limpia a través de una tabla organizada, facilitando la lectura de los reportes financieros al usuario final.

## 6. Capturas de Pantalla

#### Formulario de Entrada / Interfaz Inicial
<img width="909" height="532" alt="image" src="https://github.com/user-attachments/assets/c60aa0bd-b231-4315-b9cf-d6d64c07099c" />

<img width="955" height="514" alt="image" src="https://github.com/user-attachments/assets/f8da5929-5d1b-4c44-aee0-b52eb082993f" />

#### Ejecución del Proceso
<img width="890" height="750" alt="image" src="https://github.com/user-attachments/assets/46bef31a-fbe9-4f85-9825-e84fee38a693" />

#### Resultados Obtenidos
<img width="874" height="376" alt="image" src="https://github.com/user-attachments/assets/5c3c57d5-ad5a-4ce2-96d9-7760fb1b0ada" />


## 7. Instrucciones de Ejecución
1. Asegúrate de colocar tus archivos index.php, procesar.php y resultados.php dentro del directorio de código de este proyecto.
2. Copia la carpeta de este proyecto y pégala dentro de tu servidor local en la dirección: `C:/xampp/htdocs/PortafolioPOO/Proyecto_04_ArreglosUnidimensionales/`.
3. Inicia la aplicación Apache en el panel de control de XAMPP.
4. Abre tu navegador web de preferencia e ingresa a la siguiente dirección local: `http://localhost/PortafolioPOO/Proyecto_04_ArreglosUnidimensionales/codigo/index.php`.
5. Introduce los nombres y precios de al menos 5 artículos en el formulario y presiona el botón para procesar el inventario.

## 8. Reflexión Personal
* **¿Qué aprendí?** Aprendí a utilizar arreglos en parejas para mantener la información organizada y a implementar funciones integradas de PHP que ahorran líneas de código al momento de realizar sumas y búsquedas de valores mínimos y máximos.
* **¿Qué fue difícil?** Lo más complicado fue asegurar que la relación entre la lista de nombres y la lista de precios no se perdiera al transferir la información entre los diferentes archivos del sistema.
* **¿Qué mejoraría?** En una próxima versión, implementaría una función dinámica para que el encargado de la tienda pueda añadir o remover renglones de productos en el formulario en vivo sin límite de registros.

---
*Regresar al [README Principal](../README.md)*
