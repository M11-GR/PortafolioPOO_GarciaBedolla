# Proyecto 02: Actividad de evaluación C2 - Consumo energético servidores Unidad 3 – Métodos

## 1. Nombre del Proyecto
Analizador de Consumo Energético en Servidores (Cloud Energy Monitor).

## 2. Objetivo del Proyecto
Crear una aplicación web que permita calcular la energía total consumida por un servidor en un centro de datos, utilizando fórmulas matemáticas y programación para obtener el gasto energético según el tiempo de uso.

## 3. Problema que Resuelve
En los centros de datos, el consumo de luz de un servidor cambia constantemente dependiendo de qué tanto trabaje el procesador. Este sistema ayuda a calcular el consumo exacto de energía en segundos para poder cobrarle de forma justa a los clientes que usan servicios en la nube o para medir cuánta contaminación genera el servidor. El programa permite elegir tres tipos de consumo (cuando el servidor está en reposo, en uso normal o bajo mucha carga de trabajo) y evita que la página falle si el usuario llega a poner los datos al revés o de forma incorrecta.

## 4. Tecnologías Utilizadas
* **Lenguaje de Programación:** PHP.
* **Desarrollo de la Interfaz:** HTML5 para el formulario y la pantalla de resultados, decorado con un archivo CSS independiente para los estilos visuales.
* **Entorno de Ejecución:** Servidor local Apache usando el panel de control XAMPP.
* **Organización de Archivos:** El código que hace las operaciones matemáticas está guardado ordenadamente dentro de una carpeta especial de cálculo, separada de la página de inicio que ve el usuario.

## 5. Conceptos Aplicados (según temario de POO)
* **Organización del código:** Uso de carpetas virtuales para agrupar las partes del programa de forma profesional y evitar que se revuelvan los archivos.
* **Caja Negra:** El usuario solo interactúa con la pantalla de la página web metiendo los datos del tiempo y recibiendo el resultado, sin necesidad de saber cómo se hacen las operaciones matemáticas por dentro.
* **Protección de Datos:** Las variables internas del tiempo y los intervalos están configuradas para que no puedan ser modificadas por accidente desde fuera de la programación principal.
* **Uso de Métodos:** El programa utiliza funciones divididas; una se encarga de definir los perfiles de consumo y otra realiza la sumatoria matemática del gasto total de energía.
* **Control de Errores:** El sistema cuenta con una estructura que detecta si el usuario comete una equivocación (como poner que el tiempo final sea menor que el inicial) y manda un mensaje de aviso en lugar de romper o trabar la página web.

## 6. Capturas de Pantalla
*Las imágenes de evidencia se encuentran guardadas localmente en la carpeta de capturas:*

#### Formulario de Entrada / Interfaz Inicial
<img width="995" height="540" alt="Captura de pantalla 2026-05-26 201402" src="https://github.com/user-attachments/assets/ef3695be-b0a7-4137-996f-a585d1f59b08" />

#### Resultados Obtenidos
<img width="1414" height="1013" alt="Captura de pantalla 2026-05-26 201442" src="https://github.com/user-attachments/assets/2917a56b-fa2f-458e-9be6-fdea2aa5f253" />


## 7. Instrucciones de Ejecución
1. Guarda todos los archivos de programación dentro de la carpeta `codigo/` de este proyecto.
2. Copia la carpeta completa de este proyecto y pégala dentro de la ruta: `C:/xampp/htdocs/PortafolioPOO/Proyecto_02_ConsumoServidores/`.
3. Abre el panel de control de XAMPP e inicia el servidor Apache.
4. Entra a tu navegador de internet e ingresa a: `http://localhost/PortafolioPOO/Proyecto_02_ConsumoServidores/codigo/index.php`.
5. Selecciona el perfil del servidor, escribe los tiempos que deseas calcular y presiona el botón para ver los resultados.

## 8. Reflexión Personal
* **¿Qué aprendí?** Aprendí cómo se puede usar la programación para resolver problemas reales e importantes, como calcular los costos de luz en empresas grandes de tecnología como Amazon o Google Cloud.
* **¿Qué fue difícil?** Lo más complicado fue entender cómo hacer que la computadora diera un resultado exacto sin que tardara demasiado tiempo procesando la información.
* **¿Qué mejoraría?** Me gustaría agregarle una gráfica con dibujos o líneas de colores para que el administrador pueda ver de forma visual cómo sube y baja el gasto de energía conforme pasa el tiempo.

---
*Regresar al [README Principal](../README.md)*
